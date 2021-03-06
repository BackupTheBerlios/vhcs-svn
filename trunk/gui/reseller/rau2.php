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

$tpl = new pTemplate();

$tpl -> define_dynamic('page', $cfg['RESELLER_TEMPLATE_PATH'].'/rau2.tpl');

$tpl -> define_dynamic('page_message', 'page');

$tpl -> define_dynamic('logged_from', 'page');

$tpl -> define_dynamic('custom_buttons', 'page');

global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

// check if we have only hosting plans for admins - ressseler shoul not can edit them
if (isset($cfg['HOSTING_PLANS_LEVEL']) && $cfg['HOSTING_PLANS_LEVEL'] === 'admin') {
	Header("Location: users.php");
	die();
}

$tpl -> assign(
                array(
                        'TR_CLIENT_CHANGE_PERSONAL_DATA_PAGE_TITLE' => tr('VHCS - User/Add user(step2)'),
                        'THEME_COLOR_PATH' => "../themes/$theme_color",
                        'THEME_CHARSET' => tr('encoding'),
                        'VHCS_LICENSE' => $cfg['VHCS_LICENSE'],
						'ISP_LOGO' => get_logo($_SESSION['user_id']),
                     )
              );

/*
 *
 * static page messages.
 *
 */

gen_reseller_menu($tpl);

gen_logged_from($tpl);


$tpl -> assign(
                array(
                        'TR_ADD_USER' => tr('Add user'),
						'TR_HOSTING_PLAN_PROPERTIES' => tr('Hosting plan properties'),
						'TR_TEMPLATE_NAME' => tr('Template name'),
						'TR_MAX_DOMAIN' => tr('Max domain count<br><i>(0 unlimited)</i>'),
						'TR_MAX_SUBDOMAIN' => tr('Max subdomain count<br><i>(0 unlimited)'),
						'TR_MAX_DOMAIN_ALIAS' => tr('Max aliases count<br><i>(0 unlimited)</i>'),
						'TR_MAX_MAIL_COUNT' => tr('Max mail users count<br><i>(0 unlimited)</i>'),
						'TR_MAX_FTP' => tr('Max FTP users count<br><i>(0 unlimited)</i>'),
						'TR_MAX_SQL_DB' => tr('Max SQL databases count<br><i>(-1 disabled, 0 unlimited)</i>'),
						'TR_MAX_SQL_USERS' => tr('Max SQL users count<br><i>(-1 disabled, 0 unlimited)</i>'),
						'TR_MAX_TRAFFIC' => tr('Max traffic amount [MB]<br><i>(0 unlimited)</i>'),
						'TR_MAX_DISK_USAGE' => tr('Max disk amount [MB]<br><i>(0 unlimited)</i>'),
						'TR_PHP' => tr('PHP'),
						'TR_CGI' => tr('CGI / Perl'),
						'TR_YES' => tr('yes'),
						'TR_NO' => tr('no'),
						'TR_NEXT_STEP' => tr('Next step'),
						'TR_BACKUP_RESTORE' => tr('Backup / Restore'),
						'TR_APACHE_LOGS' => tr('Apache logs'),
						'TR_AWSTATS' => tr('Awstats')
					)
			);


get_pageone_param();

if (isset($_POST['uaction']) && ("rau2_nxt" === $_POST['uaction']) && (!isset($_SESSION['step_one_data'])) ) {

    if(check_user_data($tpl))
		update_hp_data($_SESSION['user_id']);

}else
{
	unset($_SESSION['step_one_data']);
	global $dmn_chp;
	get_hp_data($dmn_chp, $_SESSION['user_id']);
	$tpl -> assign('MESSAGE', "");
}

get_init_au2_page($tpl);
gen_page_message($tpl);

$tpl -> parse('PAGE', 'page');

$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

//unset_messages();
//
// Function declaration
//

// get param of previus page
function get_pageone_param()
{
	global $dmn_name;
	global $dmn_chp;
	global $dmn_pt;

	if(isset($_SESSION['dmn_name']))
		$dmn_name = $_SESSION['dmn_name'];

	if(isset($_SESSION['dmn_tpl']))
		$dmn_chp = $_SESSION['dmn_tpl'];

	if(isset($_SESSION['chtpl']))
		$dmn_pt = $_SESSION['chtpl'];

}// End of get_pageone_param()



// Show page with initial data fileds
function get_init_au2_page(&$tpl)
{
	global $hp_name, $hp_php, $hp_cgi;
    global $hp_sub, $hp_als, $hp_mail;
    global $hp_ftp, $hp_sql_db, $hp_sql_user;
    global $hp_traff, $hp_disk;

	$tpl -> assign(
                array(
                       	'VL_TEMPLATE_NAME' => $hp_name,
						'MAX_DMN_CNT' => '',
						'MAX_SUBDMN_CNT' => $hp_sub,
						'MAX_DMN_ALIAS_CNT' => $hp_als,
						'MAX_MAIL_CNT' => $hp_mail,
						'MAX_FTP_CNT' => $hp_ftp,
						'MAX_SQL_CNT' => $hp_sql_db,
						'VL_MAX_SQL_USERS' => $hp_sql_user,
						'VL_MAX_TRAFFIC' => $hp_traff,
						'VL_MAX_DISK_USAGE' => $hp_disk,
						//'VL_PHPY' => 'checked',
						//'VL_CGIY' => 'checked'
					)
			);

	if("_yes_" === $hp_php)
		$tpl -> assign(
                array(
                       	'VL_PHPY' => 'checked',
						'VL_PHPN' => ''
						)
			);
	else
		$tpl -> assign(
                array(
                       	'VL_PHPN' => 'checked',
						'VL_PHPY' => '',
						)
			);

	if("_yes_" === $hp_cgi)
		$tpl -> assign(
                array(
                       	'VL_CGIY' => 'checked',
						'VL_CGIN' => ''
						)
			);
	else
		$tpl -> assign(
                array(
                       	'VL_CGIN' => 'checked',
						'VL_CGIY' => '',
						)
			);


}// End of get_init_au2_page()


// Get data for hosting plan
function get_hp_data($hpid, $admin_id) {

    global $hp_name, $hp_php, $hp_cgi;
    global $hp_sub, $hp_als, $hp_mail;
    global $hp_ftp, $hp_sql_db, $hp_sql_user;
    global $hp_traff, $hp_disk;
    global $sql;

	$query = "select name, props from hosting_plans where reseller_id = ? and id = ?";

  $res = exec_query($sql, $query, array($admin_id, $hpid));

	if(0 !== $res -> RowCount())
	{
		$data = $res -> FetchRow();

		$props = $data['props'];

		list($hp_php, $hp_cgi, $hp_sub, $hp_als, $hp_mail, $hp_ftp, $hp_sql_db, $hp_sql_user, $hp_traff, $hp_disk) = explode(";", $props);

		$hp_name = $data['name'];
	} else {
		$hp_php = ''; $hp_cgi = ''; $hp_sub = ''; $hp_als = ''; $hp_mail = ''; $hp_ftp = ''; 
		$hp_sql_db = ''; $hp_sql_user = ''; $hp_traff = ''; $hp_disk = '';
		$hp_name = 'Custom';
	}

}// End of get_hp_data()



// Check validity of input data
function check_user_data (&$tpl) {

    global $hp_name, $hp_php, $hp_cgi;
    global $hp_sub, $hp_als, $hp_mail;
    global $hp_ftp, $hp_sql_db, $hp_sql_user;
    global $hp_traff, $hp_disk, $hp_dmn;

    $ehp_error = '_off_';

	// Gete data for fields from previus page
	if(isset($_POST['template']))
		$hp_name	 = $_POST['template'];

	if(isset($_POST['nreseller_max_domain_cnt']))
		$hp_dmn	 = $_POST['nreseller_max_domain_cnt'];

	if(isset($_POST['nreseller_max_subdomain_cnt']))
		$hp_sub	 = $_POST['nreseller_max_subdomain_cnt'];

	if(isset($_POST['nreseller_max_alias_cnt']))
		$hp_als	 = $_POST['nreseller_max_alias_cnt'];

	if(isset($_POST['nreseller_max_mail_cnt']))
		$hp_mail	 = $_POST['nreseller_max_mail_cnt'];

	if(isset($_POST['nreseller_max_ftp_cnt']))
		$hp_ftp	 = $_POST['nreseller_max_ftp_cnt'];

	if(isset($_POST['nreseller_max_sql_db_cnt']))
		$hp_sql_db	 = $_POST['nreseller_max_sql_db_cnt'];

	if(isset($_POST['nreseller_max_sql_user_cnt']))
		$hp_sql_user	 = $_POST['nreseller_max_sql_user_cnt'];

	if(isset($_POST['nreseller_max_traffic']))
		$hp_traff	 = $_POST['nreseller_max_traffic'];

	if(isset($_POST['nreseller_max_disk']))
		$hp_disk	 = $_POST['nreseller_max_disk'];

	//if(isset($_POST['']))
	//	$hp_dmn	 = $_POST[''];

	if(isset($_POST['php']))
		$hp_php	 = $_POST['php'];

	if(isset($_POST['cgi']))
		$hp_cgi	 = $_POST['cgi'];



	// Begin checking...
  /*  if (!vhcs_name_check($hp_name, 200)) {

        $ehp_error = tr('Incorrect template name range or syntax!');

    }
	if(!check_hosting_plan_name($_SESSION{'user_id'}))
	{
		$ehp_error = tr('Hosting plan with entered name already exists!');

	}
	else*/ if (!vhcs_limit_check($hp_sub, 999)) {

        $ehp_error = tr('Incorrect subdomain range or syntax!');

    } else if (!vhcs_limit_check($hp_als, 999)) {

        $ehp_error = tr('Incorrect alias range or syntax!');

    } else if (!vhcs_limit_check($hp_mail, 999)) {

        $ehp_error = tr('Incorrect mail account range or syntax!');

    } else if (!vhcs_limit_check($hp_ftp, 999)) {

        $ehp_error = tr('Incorrect FTP account range or syntax!');

    } else if (!vhcs_limit_check($hp_sql_user, 999)) {

        $ehp_error = tr('Incorrect SQL database range or syntax!');

    } else if (!vhcs_limit_check($hp_sql_db, 999)) {

        $ehp_error = tr('Incorrect SQL user range or syntax!');

    } else if (!vhcs_limit_check($hp_traff, 1024*1024)) {

        $ehp_error = tr('Incorrect traffic range or syntax!');

    } else if (!vhcs_limit_check($hp_disk, 1024*1024)) {

        $ehp_error = tr('Incorrect disk range or syntax!');

    }

    if ($ehp_error == '_off_') {

        $tpl -> assign('MESSAGE', '');

		// send data throught session
		return true;

    } else {

        $tpl -> assign('MESSAGE', $ehp_error);

        return false;
    }

	return true;
}//End of check_user_data()

// Insert into hosting plans new data
function update_hp_data($admin_id)
{

	global $hp_name, $hp_php, $hp_cgi;
    global $hp_sub, $hp_als, $hp_mail;
    global $hp_ftp, $hp_sql_db, $hp_sql_user;
    global $hp_traff, $hp_disk;
    global $sql, $hpid, $dmn_name;
    global $step_two_back_data;

    //$hp_props = "$hp_php;$hp_cgi;$hp_sub;$hp_als;$hp_mail;$hp_ftp;$hp_sql_db;$hp_sql_user;$hp_traff;$hp_disk;";

    //$query = "insert into hosting_plans (reseller_id, name, props) values ('$admin_id', '$hp_name', '$hp_props');";

    //$res = $sql -> Execute($query);

    //$tmp_hpid = $sql -> Insert_ID();

	// Serialize the data from this page
    $step_two_data = "$dmn_name;0;";
    $_SESSION["step_two_data"] = $step_two_data;

	$ch_hpprops = "$hp_php;$hp_cgi;$hp_sub;$hp_als;$hp_mail;$hp_ftp;$hp_sql_db;$hp_sql_user;$hp_traff;$hp_disk;";
	$_SESSION["ch_hpprops"] = $ch_hpprops;

    Header("Location: rau3.php");

    die();

}// End of update_hp_data()


// Check is hosting plan with this name already exists!
function  check_hosting_plan_name ($admin_id)
{
	global $hp_name;
	global $sql;

	$query = "select id from hosting_plans where name = ? and reseller_id = ?";
  $res = exec_query($sql, $query, array($hp_name, $admin_id));
    if ($res -> RowCount() !== 0) {
		return false;
	}

	return true;

}// End of check_hosting_plan_name()



?>
