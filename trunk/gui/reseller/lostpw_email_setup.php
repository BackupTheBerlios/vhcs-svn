<?php
//   -------------------------------------------------------------------------------
//  |             VHCS(tm) - Virtual Hosting Control System                         |
//  |              Copyright (c) 2001-2005 be moleSoftware		            		|
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
// Written by: Mark Henning (tirex) for Lostpw Mod

include '../include/vhcs-lib.php';

check_login();

$tpl = new pTemplate();
$tpl -> define_dynamic('page', $cfg['RESELLER_TEMPLATE_PATH'].'/lostpw_email_setup.tpl');
$tpl -> define_dynamic('page_message', 'page');
$tpl -> define_dynamic('logged_from', 'page');
$tpl -> define_dynamic('custom_buttons', 'page');
global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

function insert_lostpw_email_1_tpl(&$sql, $admin_id)
{

    global $cfg;

    $msg_subject = 'Auto message allert for lostpw ! {USERNAME}';

    $msg = <<<MSG

Dear {NAME},
Use this link to aktivate your new VHCS password:

{LINK}


Good Luck with VHCS Pro System
Hosting Provider Team

MSG;



    $query = <<<SQL_QUERY
        insert into email_tpls
            (owner_id, name, subject, message)
        values
            (?, 'lostpw-msg-1', ?, ?)
SQL_QUERY;

    $rs = exec_query($sql, $query, array($admin_id, $msg_subject, $msg));

}

function insert_lostpw_email_2_tpl(&$sql, $admin_id)
{

    global $cfg;

    $msg_subject = 'Auto message allert for lostpw ! {USERNAME}';

    $msg = <<<MSG

Hello {NAME} !

Your VHCS login is: {USERNAME}
Your VHCS password is: {PASSWORD}


Good Luck with VHCS Pro System
Hosting Provider Team

MSG;



    $query = <<<SQL_QUERY
        insert into email_tpls
            (owner_id, name, subject, message)
        values
            (?, 'lostpw-msg-2', ?, ?)
SQL_QUERY;

    $rs = exec_query($sql, $query, array($admin_id, $msg_subject, $msg));

}

function gen_email_data(&$tpl, &$sql)
{
  if (isset($_POST['uaction']) && $_POST['uaction'] === 'lostpw_email_setup') {
    $tpl -> assign(array('SUBJECT_VALUE1' => $_POST['auto_subject1'],
                         'MESSAGE_VALUE1' => $_POST['auto_message1'],
												 'SUBJECT_VALUE2' => $_POST['auto_subject2'],
                         'MESSAGE_VALUE2' => $_POST['auto_message2'],
                         'SENDER_EMAIL_VALUE' => $_POST['sender_email'],
                         'SENDER_NAME_VALUE' => $_POST['sender_name']));
  } else {
    $user_id = $_SESSION['user_id'];

    $query = <<<SQL_QUERY
            select
                fname, lname, email
            from
                admin
            where
                admin_id = ?
SQL_QUERY;
    $rs = exec_query($sql, $query, array($user_id));

    $sender_name = '';

    if ($rs->fields('fname') !='' && $rs->fields('lname') !='') {
      $sender_name = $rs->fields('fname') ." " . $rs->fields('lname');
    }

    $sender_email = $rs->fields['email'];
    // Check email 1
		$query = <<<SQL_QUERY
            select
                subject, message
            from
                email_tpls
            where
                owner_id = ? and name = 'lostpw-msg-1'
SQL_QUERY;

    $rs = exec_query($sql, $query, array($user_id));

    if ($rs ->RowCount() == 0 ) {
      insert_lostpw_email_1_tpl($sql, $user_id);
      $rs = exec_query($sql, $query, array($user_id));
    }

    $subject1 = $rs->fields['subject'];
    $message1 = $rs->fields['message'];

    // Check email 2
		$query = <<<SQL_QUERY
            select
                subject, message
            from
                email_tpls
            where
                owner_id = ? and name = 'lostpw-msg-2'
SQL_QUERY;

    $rs = exec_query($sql, $query, array($user_id));

    if ($rs ->RowCount() == 0 ) {
      insert_lostpw_email_2_tpl($sql, $user_id);
      $rs = exec_query($sql, $query, array($user_id));
    }

    $subject2 = $rs->fields['subject'];
    $message2 = $rs->fields['message'];

    $tpl -> assign(array('SUBJECT_VALUE1' => $subject1,
                         'MESSAGE_VALUE1' => $message1,
												 'SUBJECT_VALUE2' => $subject2,
                         'MESSAGE_VALUE2' => $message2,
                         'SENDER_EMAIL_VALUE' => $sender_email,
                         'SENDER_NAME_VALUE' => $sender_name,
                         'PAGE_MESSAGE' =>''));
  }
}


function check_user_data ( &$tpl )
{
  global $sender_email, $sender_name;
  global $auto_message1, $auto_subject1;
  global $auto_message2, $auto_subject2;

  $sender_name= $_POST['sender_name'];
  $sender_email= $_POST['sender_email'];
  $auto_message1 = $_POST['auto_message1'];
  $auto_subject1= $_POST['auto_subject1'];
  $auto_message2 = $_POST['auto_message2'];
  $auto_subject2= $_POST['auto_subject2'];
  $err_msg = '_off_';

  if ($auto_subject1 == '' && $auto_subject2 == '') {
      $err_msg = tr('Please specify a subject!');
  } else if ($auto_message1 == '' && $auto_message2 == '') {
      $err_msg = tr('Please specify message!');
  } else if ($sender_email == '' || preg_match("/^ *$/", $sender_email)) {
      $err_msg = tr('Please specify email address!');
  } /*else if (chk_email($sender_email)) {
      set_page_message( tr("Incorrect email range or syntax!"));
      return false;
  }

  else if ($sender_name == '' || preg_match("/^ *$/", $sender_name)) {

      $err_msg = tr('Please specify sender name!');

  } else if (!preg_match("/ /", $sender_name)) {

      $err_msg = tr('Havent you got more then one name?');

  } */

  if ($err_msg == '_off_') {
      return true;
  } else {
      set_page_message($err_msg);
      return false;
  }
}


function update_email_data(&$tpl, &$sql)
{
  global $sender_name,$sender_email;
	global $auto_message1, $auto_subject1;
	global $auto_message2, $auto_subject2;

  $user_id = $_SESSION['user_id'];

  if (isset($_POST['uaction']) && $_POST['uaction'] === 'lostpw_email_setup') {
    $sender_name= $_POST['sender_name'];
    $sender_email= $_POST['sender_email'];
    $auto_message1 = $_POST['auto_message1'];
    $auto_subject1= $_POST['auto_subject1'];
    $auto_message2 = $_POST['auto_message2'];
    $auto_subject2= $_POST['auto_subject2'];

    if (check_user_data($tpl)) {
			// list($fname, $lname) = explode(" ", $sender_name);
			// Update email 1
      $query = <<<SQL_QUERY
                 update email_tpls set
                    subject = ?,
                    message = ?
                where
                    owner_id = ?
                  and
                    name = 'lostpw-msg-1'
SQL_QUERY;
      $rs = exec_query($sql, $query, array($auto_subject1, $auto_message1, $user_id));
			// Update email 2
      $query = <<<SQL_QUERY
                 update email_tpls set
                    subject = ?,
                    message = ?
                where
                    owner_id = ?
                  and
                    name = 'lostpw-msg-2'
SQL_QUERY;
      $rs = exec_query($sql, $query, array($auto_subject2, $auto_message2, $user_id));
      set_page_message (tr('Auto email template data updated!'));
      //  Header("Location: users.php");
      //  die();
    }
  }
}

/*
 *
 * static page messages.
 *
 */

$tpl -> assign(array('TR_LOSTPW_EMAL_SETUP' => tr('VHCS - Reseller/Lostpw email setup'),
                     'THEME_COLOR_PATH' => "../themes/$theme_color",
                     'THEME_CHARSET' => tr('encoding'),
                     'VHCS_LICENSE' => $cfg['VHCS_LICENSE'],
                     'ISP_LOGO' => get_logo($_SESSION['user_id'])));

gen_reseller_menu($tpl);
gen_logged_from($tpl);
update_email_data($tpl, $sql);
gen_email_data($tpl, $sql);

$tpl -> assign(array(
										 'TR_LOSTPW_EMAIL' => tr('Lostpw email'),
                     'TR_MESSAGE_TEMPLATE_INFO' => tr('Message template info'),
                     'TR_MESSAGE_TEMPLATE' => tr('Message template'),
                     'TR_LOSTPW_MESSAGE_1' => tr('Lostpw message 1'),
                     'TR_LOSTPW_MESSAGE_2' => tr('Lostpw message 2'),
                     'TR_USER_LOGIN_NAME' => tr('User login (system) name'),
                     'TR_USER_PASSWORD' => tr('User password'),
                     'TR_USER_REAL_NAME' => tr('User (first and last) name'),
										 'TR_LOSTPW_LINK' => tr('Lostpw link'),
										 'TR_SUBJECT' => tr('Subject'),
                     'TR_MESSAGE' => tr('Message'),
                     'TR_SENDER_EMAIL' => tr('Senders email'),
                     'TR_SENDER_NAME' => tr('Senders name'),
                     'TR_APPLY_CHANGES' => tr('Apply changes')));

gen_page_message($tpl);
$tpl -> parse('PAGE', 'page');
$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

unset_messages();

?>