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

$tpl -> define_dynamic('page', $cfg['CLIENT_TEMPLATE_PATH'].'/language.tpl');

$tpl -> define_dynamic('page_message', 'page');

$tpl -> define_dynamic('def_language', 'page');

$tpl -> define_dynamic('logged_from', 'page');

$tpl -> define_dynamic('custom_buttons', 'page');


/*
 *
 * page actions.
 *
 */

if (isset($_POST['uaction']) && $_POST['uaction'] === 'save_lang') {
  $user_id = $_SESSION['user_id'];
  $user_lang = $_POST['def_language'];
  $query = <<<SQL_QUERY
        update
            user_gui_props
        set
            lang = ?
        where
            user_id = ?
SQL_QUERY;

  $rs = exec_query($sql, $query, array($user_lang, $user_id));
	unset($_SESSION['user_def_lang']);
	$_SESSION['user_def_lang'] = $user_lang;
	set_page_message(tr('User language updated successfully!'));
}

global $cfg;
$theme_color = $cfg['USER_INITIAL_THEME'];


// ko ima jump from other user interface neka esik i optica da ostanat tezi na
// ska4ashtijat user
if (!isset($_SESSION['logged_from']) && !isset($_SESSION['logged_from_id'])) {

		list($user_def_lang, $user_def_layout) = get_user_gui_props($sql, $_SESSION['user_id']);

} else {

		$user_def_layout = $_SESSION['user_theme_color'];

		$user_def_lang = $_SESSION['user_def_lang'];

}

gen_def_language($tpl, $sql, $user_def_lang);





$tpl -> assign(
                array(
                        'TR_CLIENT_LANGUAGE_TITLE' => tr('VHCS - Client/Change Language'),
                        'THEME_COLOR_PATH' => "../themes/$theme_color",
                        'THEME_CHARSET' => tr('encoding'),
						'TID' => $_SESSION['layout_id'],
                        'VHCS_LICENSE' => $cfg['VHCS_LICENSE'],
						'ISP_LOGO' => get_logo($_SESSION['user_id'])
                     )
              );



/*
 *
 * static page messages.
 *
 */

gen_client_menu($tpl);

gen_logged_from($tpl);

check_permissions($tpl);

$tpl -> assign(
                array(
                       'TR_LANGUAGE' => tr('Language'),
                        'TR_CHOOSE_DEFAULT_LANGUAGE' => tr('Choose default language'),
                        'TR_SAVE' => tr('Save'),
                     )
              );

gen_page_message($tpl);

$tpl -> parse('PAGE', 'page');

$tpl -> prnt();

if (isset($cfg['DUMP_GUI_DEBUG'])) dump_gui_debug();

unset_messages();

?>
