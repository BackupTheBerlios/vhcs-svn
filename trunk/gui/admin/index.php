<?php
//   -------------------------------------------------------------------------------
//  |             VHCS(tm) - Virtual Hosting Control System                         |
//  |              Copyright (c) 2001-2005 by moleSoftware		            		|
//  |			http://vhcs.net | http://www.molesoftware.com		           		|
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the MPL General Public License                   |
//  | as published by the Free Software Foundation; either version 1.1              |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//  | You should have received a copy of the MPL Mozilla Public License             |
//  | along with this program; if not, write to the Open Source Initiative (OSI)    |
//  | http://opensource.org | osi@opensource.org								    |
//  |                                                                               |
//   -------------------------------------------------------------------------------



include '../include/vhcs-lib.php';

check_login();

global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

$tpl = new pTemplate();

$tpl -> define_dynamic('page', $cfg['ADMIN_TEMPLATE_PATH'].'/index.tpl');

$tpl -> define_dynamic('def_language', 'page');

$tpl -> define_dynamic('def_layout', 'page');

$tpl -> define_dynamic('no_messages', 'page');

$tpl -> define_dynamic('msg_entry', 'page');

$tpl -> define_dynamic('traff_warn', 'page');


function gen_system_message(&$tpl, &$sql)
{

    $user_id =  $_SESSION['user_id'];

    $query = <<<SQL_QUERY
        select
            count(ticket_id) as cnum
        from
            tickets
        where
            ticket_to=?
          and
            (ticket_status = '2' or ticket_status = '5')
          and
            ticket_reply = '0'
SQL_QUERY;

    $rs = exec_query($sql, $query, array($user_id));

    $num_question = $rs->fields('cnum');

    if ($num_question == 0) {
        $tpl -> assign(
                array(
                        'TR_NO_NEW_MESSAGES' => tr('You have no new support questions!'),
                        'MSG_ENTRY' => ''
                        )
                );
    }
    else {
        $tpl -> assign(
                         array(
                                 'NO_MESSAGES' => '',
                                 'TR_YOU_HAVE' => tr('You have'),
								 'TR_MSG_TYPE' => tr('Support question(s)'),
                                 'TR_NEW' => tr('New'),
								 'MSG_NUM' => $num_question,
                                 'TR_VIEW' => tr('View')
                              )
                      );

        $tpl -> parse('MSG_ENTRY', '.msg_entry');


    }
}

function gen_server_trafic(&$tpl, &$sql)
{
    $query = <<<SQL_QUERY
        select
            straff_max,straff_warn
        from
            straff_settings
SQL_QUERY;

    $rs = exec_query($sql, $query, array());

    $straff_max= (($rs -> fields['straff_max'])*1024)*1024;

    $fdofmnth = mktime(0,0,0,date("m"),1,date("Y"));

    $ldofmnth = mktime(1,0,0,date("m")+1,0,date("Y"));

    $query = <<<SQL_QUERY
        select
            IFNULL((sum(bytes_in) + sum(bytes_out)), 0)  as traffic
        from
            server_traffic
        where
            traff_time > ?
          and
            traff_time < ?
SQL_QUERY;

    $rs1 = exec_query($sql, $query, array($fdofmnth, $ldofmnth));

    $traff  = $rs1 -> fields['traffic'];

    $mtraff = sprintf("%.2f",$traff);

   	if ($straff_max == 0){
		$pr = 0;
	}
   	else{
    $pr = ($traff/$straff_max)*100;
   	}

	$pr = sprintf("%.2f", $pr);

    if(($straff_max != 0 || $straff_max != '') && ($mtraff > $straff_max)){

            $tpl -> assign(
                            'TR_TRAFFIC_WARNING', tr('You are exceeding your traffic limit!')
                          );
    }
    else{

        $tpl -> assign('TRAFF_WARN', '');

    }

    $bar_value = calc_bar_value($traff, $straff_max , 400);

	if ($straff_max == 0) {
		$show_straf_max = tr('unlimited');
	} else {
		$show_straf_max = sizeit($straff_max);
	}



    $tpl -> assign(
            array(
                    'TR_OF' => tr('of'),
                    'PERCENT' => $pr,
                    'VALUE' => sizeit($mtraff),
                    'MAX_VALUE' => $show_straf_max,
                    'BAR_VALUE' => $bar_value,
                    )
            );
}



/*
 *
 * static page messages.
 *
 */

$tpl -> assign(
                array(
                        'TR_ADMIN_MAIN_INDEX_PAGE_TITLE' => tr('VHCS - Admin/Main Index'),
                        'THEME_COLOR_PATH' => "../themes/$theme_color",
                        'ISP_LOGO' => get_logo($_SESSION['user_id']),
                        'THEME_CHARSET' => tr('encoding'),
                        'VHCS_LICENSE' => $cfg['VHCS_LICENSE']
                     )
              );



gen_admin_menu($tpl);

get_admin_general_info($tpl, $sql);

gen_system_message($tpl, $sql);

gen_server_trafic($tpl, $sql);

$tpl -> parse('PAGE', 'page');

$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

unset_messages();

?>
