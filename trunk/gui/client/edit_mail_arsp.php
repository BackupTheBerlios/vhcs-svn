<?php
//   -------------------------------------------------------------------------------
//  |             VHCS(tm) - Virtual Hosting Control System                         |
//  |              Copyright (c) 2001-2005 by moleSoftware	|
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

$tpl = new pTemplate();
$tpl -> define_dynamic('page', $cfg['CLIENT_TEMPLATE_PATH'].'/enable_mail_arsp.tpl');
$tpl -> define_dynamic('page_message', 'page');
$tpl -> define_dynamic('logged_from', 'page');
$tpl -> define_dynamic('custom_buttons', 'page');

//
// page functions.
//

function check_email_user(&$sql) {
	$dmn_name = $_SESSION['user_logged'];
	$mail_id = $_GET['id'];
	
	$query = <<<SQL_QUERY
		select
		  t1.*, t2.domain_id, t2.domain_name
		from
		  mail_users as t1,
		  domain as t2
		where
		  t1.mail_id = ?
		and
		  t2.domain_id = t1.domain_id
		and
		  t2.domain_name = ?
SQL_QUERY;

  $rs = exec_query($sql, $query, array($mail_id, $dmn_name));

  if ($rs -> RecordCount() == 0) {
	set_page_message(tr('User does not exist or you do not have permission to access this interface!'));
	header('Location: email_accounts.php');
	die();
  }
}

function gen_page_dynamic_data(&$tpl, &$sql, $mail_id, $read_from_db)
{
  global $cfg;

// Get Message
	if ($read_from_db) {
		$query = <<<SQL_QUERY
			SELECT
				mail_auto_respond
			FROM
				mail_users
			WHERE
				mail_id = ?
SQL_QUERY;
		$rs = exec_query($sql, $query, array($mail_id));
		$tpl -> assign('ARSP_MESSAGE', $rs -> fields['mail_auto_respond']);
		return;
	} else {
		$arsp_message = $_POST['arsp_message'];
	}
	
    $item_change_status = $cfg['ITEM_CHANGE_STATUS'];
    check_for_lock_file();

	if (isset($_POST['uaction']) && $_POST['uaction'] === 'enable_arsp') {
		if ($_POST['arsp_message'] === '') {
		  $tpl -> assign('ARSP_MESSAGE', '');
		  set_page_message(tr('Please type your mail autorespond message!'));
		  return;
	}
	
    $query = <<<SQL_QUERY
            update
                mail_users
            set
                status = ?,
                mail_auto_respond = ?
            where
                mail_id = ?
SQL_QUERY;

    $rs = exec_query($sql, $query, array($item_change_status, $arsp_message, $mail_id));

    send_request();
    write_log($_SESSION['user_logged']." : add mail autorsponder");
    set_page_message(tr('Mail account scheduler for modification!'));
    header("Location: email_accounts.php");
    exit(0);
  } else {
    $tpl -> assign('ARSP_MESSAGE', '');
  }
}

//
// common page data.
//
if (isset($_GET['id'])) {
    $mail_id = $_GET['id'];
} else if (isset($_POST['id'])) {
    $mail_id = $_POST['id'];
} else {
    header("Location: email_accounts.php");
    exit(0);
}

if (isset($_SESSION['email_support']) && $_SESSION['email_support'] == "no")
{
  header("Location: index.php");
}

global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

$tpl -> assign(array('TR_CLIENT_ENABLE_AUTORESPOND_PAGE_TITLE' => tr('VHCS - Client/Enable Mail Auto Responder'),
                     'THEME_COLOR_PATH' => "../themes/$theme_color",
                     'THEME_CHARSET' => tr('encoding'),
                     'TID' => $_SESSION['layout_id'],
                     'VHCS_LICENSE' => $cfg['VHCS_LICENSE'],
                     'ISP_LOGO' => get_logo($_SESSION['user_id'])));

//
// dynamic page data.
//
check_email_user($sql);
gen_page_dynamic_data($tpl, $sql, $mail_id, !isset($_POST['uaction']));

//
// static page messages.
//
gen_client_menu($tpl);
gen_logged_from($tpl);
check_permissions($tpl);

$tpl -> assign(array('TR_ENABLE_MAIL_AUTORESPONDER' => tr('Edit mail auto responder'),
                     'TR_ARSP_MESSAGE' => tr('Your message'),
                     'TR_ENABLE' => tr('Save'),
					 'TR_CANCEL' => tr('Cancel'),
                     'ID' => $mail_id));
gen_page_message($tpl);

$tpl -> parse('PAGE', 'page');
$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

unset_messages();

?>
