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

include 'include/vhcs-lib.php';
include 'include/lostpw.php';

unset_user_login_data();


if (isset($_SESSION['user_theme_color'])) {

    global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];

} else {

    $theme_color = $cfg['USER_INITIAL_THEME_COLOR'];

}

if (isset($_GET['i'])) {
	if ($_GET['i'] != "") {
		$tpl = new pTemplate();
		$tpl -> define('page', $cfg['LOGIN_TEMPLATE_PATH'].'/lostpw_message.tpl');
		$tpl -> assign(array(
                        'TR_MAIN_INDEX_PAGE_TITLE' => tr('VHCS - Virtual Hosting Control System'),
                        'THEME_COLOR_PATH' => "themes/$theme_color",
                        'THEME_CHARSET' => tr('encoding'),
                        'TC_BLUE_SELECTED' => $theme_color === 'blue' ? 'selected' : '',
                        'TC_GREEN_SELECTED' => $theme_color === 'green' ? 'selected' : '',
                        'TC_YELLOW_SELECTED' => $theme_color === 'yellow' ? 'selected' : '',
                        'TC_RED_SELECTED' => $theme_color === 'red' ? 'selected' : '',
                        'TR_THEME_COLOR' => tr('Theme color'),
                        'TR_BLUE' => tr('Blue'),
                        'TR_GREEN' => tr('Green'),
                        'TR_YELLOW' => tr('Yellow'),
                        'TR_RED' => tr('Red'),
												'TR_TIME' => date("g:i a"),
												'TR_DATE' => date("l dS of F Y"),
                        'TR_VHCS_LICENSE' => $cfg['VHCS_LICENSE']));

		if (sendpw($_GET['i'])) {
			$tpl -> assign(array(
												'TR_MESSAGE' => tr('Password send'),
                        'TR_LINK' => "<A CLASS=\"submenu\" href=\"index.php\">".tr('Login')."</A>" ));

		} else {
			$tpl -> assign(array(
												'TR_MESSAGE' => tr('ERROR: Password not send'),
                        'TR_LINK' => "<A CLASS=\"submenu\" href=\"index.php\">".tr('Login')."</A>" ));
		}
		$tpl -> parse('PAGE', 'page');

		$tpl -> prnt();

		if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();
		exit(0);
	}
}

if (isset($_POST['uname'])) {
	if (($_POST['uname'] != "") AND isset($_SESSION['image']) AND isset($_POST['capcode'])) {

		$tpl = new pTemplate();
		$tpl -> define('page', $cfg['LOGIN_TEMPLATE_PATH'].'/lostpw_message.tpl');
		$tpl -> assign(array(
                        'TR_MAIN_INDEX_PAGE_TITLE' => tr('VHCS - Virtual Hosting Control System'),
                        'THEME_COLOR_PATH' => "themes/$theme_color",
                        'THEME_CHARSET' => tr('encoding'),
                        'TC_BLUE_SELECTED' => $theme_color === 'blue' ? 'selected' : '',
                        'TC_GREEN_SELECTED' => $theme_color === 'green' ? 'selected' : '',
                        'TC_YELLOW_SELECTED' => $theme_color === 'yellow' ? 'selected' : '',
                        'TC_RED_SELECTED' => $theme_color === 'red' ? 'selected' : '',
                        'TR_THEME_COLOR' => tr('Theme color'),
                        'TR_BLUE' => tr('Blue'),
                        'TR_GREEN' => tr('Green'),
                        'TR_YELLOW' => tr('Yellow'),
                        'TR_RED' => tr('Red'),
												'TR_TIME' => date("g:i a"),
												'TR_DATE' => date("l dS of F Y"),
                        'TR_VHCS_LICENSE' => $cfg['VHCS_LICENSE']));

		if ($_SESSION['image'] == $_POST['capcode']) {
			if (lostpw($_POST['uname'])) {
				$tpl -> assign(array(
						'TR_MESSAGE' => tr('The password was requested'),
                        'TR_LINK' => "<A CLASS=\"submenu\" href=\"index.php\">".tr('Login')."</A>" ));
			} else {
				$tpl -> assign(array(
						'TR_MESSAGE' => tr('ERROR: Unknown user'),
                        'TR_LINK' => "<A CLASS=\"submenu\" href=\"index.php\">".tr('Retry')."</A>" ));
			}
		} else {
			$tpl -> assign(array(
					'TR_MESSAGE' => tr('ERROR: Security code was not correct!'),
                        'TR_LINK' => "<A CLASS=\"submenu\" href=\"index.php\">".tr('Retry')."</A>" ));
		}
		$tpl -> parse('PAGE', 'page');

		$tpl -> prnt();

		if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();
		exit(0);
	}
}



$tpl = new pTemplate();

$tpl -> define('page', $cfg['LOGIN_TEMPLATE_PATH'].'/lostpw.tpl');

$tpl -> assign(
                array(
                        'TR_MAIN_INDEX_PAGE_TITLE' => tr('VHCS - Virtual Hosting Control System'),
                        'THEME_COLOR_PATH' => "themes/$theme_color",
                        'THEME_CHARSET' => tr('encoding'),
                        'TC_BLUE_SELECTED' => $theme_color === 'blue' ? 'selected' : '',
                        'TC_GREEN_SELECTED' => $theme_color === 'green' ? 'selected' : '',
                        'TC_YELLOW_SELECTED' => $theme_color === 'yellow' ? 'selected' : '',
                        'TC_RED_SELECTED' => $theme_color === 'red' ? 'selected' : '',
                        'TR_CAPCODE' => tr('Security code'),
                        'TR_IMGCAPCODE_DESCRIPTION' => tr('Imagecode description'),
												'TR_IMGCAPCODE' => "<IMG SRC=\"include/imagecode.php\" BORDER=\"0\" NOSAVE ALT=\"\">",
												'TR_USERNAME' => tr('Username'),
                        'TR_THEME_COLOR' => tr('Theme color'),
                        'TR_BLUE' => tr('Blue'),
                        'TR_GREEN' => tr('Green'),
                        'TR_YELLOW' => tr('Yellow'),
                        'TR_RED' => tr('Red'),
												'TR_SEND' => tr('Request password'),
												'TR_BACK' => tr('Back'),
												'TR_TIME' => date("g:i a"),
												'TR_DATE' => date("l dS of F Y"),
                        'TR_VHCS_LICENSE' => $cfg['VHCS_LICENSE']
                     )
              );

$tpl -> parse('PAGE', 'page');

$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

?>