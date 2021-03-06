<?php
//   -------------------------------------------------------------------------------
//  |             VHCS(tm) - Virtual Hosting Control System                         |
//  |              Copyright (c) 2001-2005 by moleSoftware                    |
//  |     http://vhcs.net | http://www.molesoftware.com                 |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the MPL General Public License                   |
//  | as published by the Free Software Foundation; either version 1.1              |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//  | You should have received a copy of the MPL Mozilla Public License             |
//  | along with this program; if not, write to the Open Source Initiative (OSI)    |
//  | http://opensource.org | osi@opensource.org                    |
//  |                                                                               |
//   -------------------------------------------------------------------------------



include '../include/vhcs-lib.php';

check_login();

$tpl = new pTemplate();
$tpl -> define_dynamic('page', $cfg['ADMIN_TEMPLATE_PATH'].'/ahp.tpl');
$tpl -> define_dynamic('page_message', 'page');
global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

$tpl -> assign(array('TR_RESELLER_MAIN_INDEX_PAGE_TITLE' => tr('VHCS - Administrator/Add hosting plan'),
                     'THEME_COLOR_PATH' => "../themes/$theme_color",
                     'THEME_CHARSET' => tr('encoding'),
                     'VHCS_LICENSE' => $cfg['VHCS_LICENSE'],
                     'ISP_LOGO' => get_logo($_SESSION['user_id'])));

/*
 *
 * static page messages.
 *
 */
gen_admin_menu($tpl);

$tpl -> assign(array('TR_ADD_HOSTING_PLAN' => tr('Add hosting plan'),
                     'TR_HOSTING PLAN PROPS' => tr('Hosting plan properties'),
                     'TR_TEMPLATE_NAME' => tr('Template name'),
                     'TR_MAX_SUBDOMAINS' => tr('Max subdomains<br><i>(-1 disabled, 0 unlimited)'),
                     'TR_MAX_ALIASES' => tr('Max aliases<br><i>(-1 disabled, 0 unlimited)'),
                     'TR_MAX_MAILACCOUNTS' => tr('Mail account limit<br><i>(0 unlimited)</i>'),
                     'TR_MAX_FTP' => tr('FTP account limit<br><i>(0 unlimited)</i>'),
                     'TR_MAX_SQL' => tr('SQL databases limit<br><i>(-1 disabled, 0 unlimited)</i>'),
                     'TR_MAX_SQL_USERS' => tr('SQL users limit<br><i>(-1 disabled, 0 unlimited)</i>'),
                     'TR_MAX_TRAFFIC' => tr('Traffic limit [Mb]<br><i>(0 unlimited)</i>'),
                     'TR_DISK_LIMIT' => tr('Disk limit [Mb]<br><i>(0 unlimited)</i>'),
                     'TR_PHP' => tr('PHP'),
                     'TR_CGI' => tr('CGI / Perl'),
                     'TR_BACKUP_RESTORE' => tr('Backup and restore'),
                     'TR_APACHE_LOGS' => tr('Apache logfiles'),
                     'TR_AWSTATS' => tr('AwStats'),
                     'TR_YES' => tr('yes'),
                     'TR_NO' => tr('no'),
					 'TR_BILLING_PROPS' => tr('Billing Settings'),
					 'TR_PRICE' => tr('Price'),
					 'TR_SETUP_FEE' => tr('Setup fee'),
					 'TR_VALUE' => tr('Currency'),
					 'TR_PAYMENT' => tr('Payment period'),
					 'TR_STATUS' => tr('Available for purchasing'),
					 'TR_TEMPLATE_DESCRIPTON' => tr('Description'),
					 'TR_EXAMPEL' => tr('(Ex. EUR)'),
					 
                     'TR_ADD_PLAN' => tr('Add plan')));

if (isset($_POST['uaction']) && ('add_plan' === $_POST['uaction'])) {
  // Process data
  if(check_data_correction($tpl))
    save_data_to_db($tpl, $_SESSION['user_id']);

  gen_data_ahp_page($tpl);
} else {
  gen_empty_ahp_page($tpl);
}

gen_page_message($tpl);

$tpl -> parse('PAGE', 'page');
$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

//
// Function definitions
//

// Generate empty form
function gen_empty_ahp_page(&$tpl)
{
  $tpl -> assign(array('HP_NAME_VALUE' => '',
                       'TR_MAX_SUB_LIMITS' => '',
                       'TR_MAX_ALS_VALUES' => '',
                       'HP_MAIL_VALUE' => '',
                       'HP_FTP_VALUE' => '',
                       'HP_SQL_DB_VALUE' => '',
                       'HP_SQL_USER_VALUE' => '',
                       'HP_TRAFF_VALUE' => '',
					   'HP_PRICE' => '',
					   'HP_SETUPFEE' => '',
					   'HP_VELUE' => '',
					   'HP_PAYMENT' => '',
					   'HP_DESCRIPTION_VALUE' => '',
					   'TR_STATUS_NO' => 'checked',
                       'HP_DISK_VALUE' => ''));
  $tpl -> assign('MESSAGE', '');
}// End of gen_empty_hp_page()

// Show last entered data for new hp
function gen_data_ahp_page(&$tpl)
{
  global $hp_name, $description, $hp_php, $hp_cgi;
  global $hp_sub, $hp_als, $hp_mail;
  global $hp_ftp, $hp_sql_db, $hp_sql_user;
  global $hp_traff, $hp_disk;
  global $price, $setup_fee, $value, $payment, $status;

  $tpl -> assign(array('HP_NAME_VALUE' => $hp_name,
                       'TR_MAX_SUB_LIMITS' => $hp_sub,
                       'TR_MAX_ALS_VALUES' => $hp_als,
                       'HP_MAIL_VALUE' => $hp_mail,
                       'HP_FTP_VALUE' => $hp_ftp,
                       'HP_SQL_DB_VALUE' => $hp_sql_db,
                       'HP_SQL_USER_VALUE' => $hp_sql_user,
                       'HP_TRAFF_VALUE' => $hp_traff,
                       'HP_DISK_VALUE' => $hp_disk,
					   'HP_DESCRIPTION_VALUE' => $description,
					   'HP_PRICE' => $price,
					   'HP_SETUPFEE' => $setup_fee,
					   'HP_VELUE' => $value,
					   'HP_PAYMENT' => $payment));

  if ('_yes_' === $hp_php) {
    $tpl -> assign(array('TR_PHP_YES' => 'checked'));
  } else {
    $tpl -> assign(array('TR_PHP_NO' => 'checked'));
  }
  if ('_yes_' === $hp_cgi) {
    $tpl -> assign(
    array('TR_CGI_YES' => 'checked'));
  } else {
    $tpl -> assign(array('TR_CGI_NO' => 'checked'));
  }
  if ($status == 1) {
    $tpl -> assign(array('TR_STATUS_YES' => 'checked'));
  } else
    $tpl -> assign(array('TR_STATUS_NO' => 'checked'));
} // End of gen_data_ahp_page()

// Check correction of input data
function check_data_correction(&$tpl)
{
  global $hp_name, $description, $hp_php, $hp_cgi;
  global $hp_sub, $hp_als, $hp_mail;
  global $hp_ftp, $hp_sql_db, $hp_sql_user;
  global $hp_traff, $hp_disk;
  global $price, $setup_fee, $value, $payment, $status;

  $ahp_error  = "_off_";

	$hp_name = htmlspecialchars(stripslashes($_POST['hp_name']), ENT_QUOTES, "UTF-8");
	$hp_sub = $_POST['hp_sub'];
	$hp_als = $_POST['hp_als'];
	$hp_mail = $_POST['hp_mail'];
	$hp_ftp = $_POST['hp_ftp'];
	$hp_sql_db = $_POST['hp_sql_db'];
	$hp_sql_user= $_POST['hp_sql_user'];
	$hp_traff = $_POST['hp_traff'];
	$hp_disk = $_POST['hp_disk'];
	$description = htmlspecialchars(stripslashes($_POST['hp_description']), ENT_QUOTES, "UTF-8");
	
	if ($_POST['hp_price'] == ''){
		$price = 0;
	} else {
	$price = $_POST['hp_price'];
	}
	if ($_POST['hp_setupfee'] == ''){
		$setup_fee = 0;
	} else {
	$setup_fee = $_POST['hp_setupfee'];
	}

	$value = $_POST['hp_value'];
	$payment = $_POST['hp_payment'];
	$status = $_POST['status'];

  if (isset($_POST['php']))
    $hp_php = $_POST['php'];

  if (isset($_POST['cgi']))
    $hp_cgi = $_POST['cgi'];;

  if ($hp_name == '') {
        $ahp_error = tr('Incorrect template name range or syntax!');
    }
	
  if ($description == '') {
        $ahp_error = tr('Incorrect template description range or syntax!');
    }
  if (!is_numeric($price)) {
  	$ahp_error = tr('Incorrect price range or syntax!');
  }
  
  if (!is_numeric($setup_fee)) {
  	$ahp_error = tr('Incorrect setup fee range or syntax!');
  }
  
  if (!vhcs_limit_check($hp_sub, 999)) {
    $ahp_error = tr('Incorrect subdomain range or syntax!');
  } else if (!vhcs_limit_check($hp_als, 999)) {
    $ahp_error = tr('Incorrect alias range or syntax!');
  } else if (!vhcs_limit_check($hp_mail, 999)) {
    $ahp_error = tr('Incorrect mail account range or syntax!');
  } else if (!vhcs_limit_check($hp_ftp, 999) || $hp_ftp == -1) {
    $ahp_error = tr('Incorrect FTP account range or syntax!');
  } else if (!vhcs_limit_check($hp_sql_user, 999)) {
    $ahp_error = tr('Incorrect SQL database range or syntax!');
  } else if (!vhcs_limit_check($hp_sql_db, 999)) {
    $ahp_error = tr('Incorrect SQL user range or syntax!');
  } else if (!vhcs_limit_check($hp_traff, 1024*1024) || $hp_traff == -1) {
    $ahp_error = tr('Incorrect traffic range or syntax!');
  } else if (!vhcs_limit_check($hp_disk, 1024*1024) || $hp_disk == -1) {
    $ahp_error = tr('Incorrect disk range or syntax!');
  }

  if ($ahp_error == '_off_') {
    $tpl -> assign('MESSAGE', '');
    return true;
  } else {
    set_page_message($ahp_error);
	//$tpl -> assign('MESSAGE', $ahp_error);
    return false;
  }

  return TRUE;

}// End of check_data_correction()



// Add new host plan to DB
function save_data_to_db(&$tpl, $admin_id)
{
  global $sql;
  global $hp_name, $description, $hp_php, $hp_cgi;
  global $hp_sub, $hp_als, $hp_mail;
  global $hp_ftp, $hp_sql_db, $hp_sql_user;
  global $hp_traff, $hp_disk;
  global $price, $setup_fee, $value, $payment, $status;

  $query = "select id from hosting_plans where name = ? and reseller_id = ?";
  $query = <<<SQL_QUERY
        select
            t1.id, t1.name, t1.reseller_id, t1.name, t1.props, t1.status,
			t2.admin_id, t2.admin_type
        from
            hosting_plans as t1,
			admin as t2
        where
            t2.admin_type=?
		and
			t1.reseller_id = t2.admin_id
		and
			t1.name=?
SQL_QUERY;
#	$rs = exec_query($sql, $query, array());  
  
  
  
  $res = exec_query($sql, $query, array('admin', $hp_name));

  if ($res -> RowCount() == 1) {
    $tpl -> assign('MESSAGE', tr('Hosting plan with entered name already exists!'));
    //$tpl -> parse('AHP_MESSAGE', 'ahp_message');

  } else {
    $hp_props = "$hp_php;$hp_cgi;$hp_sub;$hp_als;$hp_mail;$hp_ftp;$hp_sql_db;$hp_sql_user;$hp_traff;$hp_disk;";
	  $query = <<<SQL_QUERY
        insert into
            hosting_plans(reseller_id,
							name, 
							description,
							props,
							price,
							setup_fee,
							value,
							payment,
							status)
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)
SQL_QUERY;
  $res = exec_query($sql, $query, array($admin_id, $hp_name, $description, $hp_props, $price, $setup_fee, $value, $payment, $status));

	
	
	$_SESSION['hp_added'] = '_yes_';
    Header("Location: hp.php");
    die();
  }
} //End of save_data_to_db()

?>
