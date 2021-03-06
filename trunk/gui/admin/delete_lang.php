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

/* do we have a proper delete_id ? */

global $cfg;

if (!isset($_GET['delete_lang'])) {

    header( "Location: multilanguage.php" );

    die();
}

$delete_lang = $_GET['delete_lang'];

if ($delete_lang== $cfg['USER_INITIAL_LANG']) {
    /* ERR - we have domain that use this ip */

    set_page_message('Error we can\'t delete system default language!');

    header( "Location: multilanguage.php" );
    die();
}

/* check if some one still use that lang */

$query = <<<SQL_QUERY
    select
        *
    from
         user_gui_props
    where
        lang = ?
SQL_QUERY;

$rs = exec_query($sql, $query, array($delete_lang));

if ($rs -> RecordCount () > 0) {
    /* ERR - we have domain that use this ip */

    set_page_message('Error we have user that uses that language!');

    header( "Location: multilanguage.php" );
    die();
}


$query = <<<SQL_QUERY
    drop table $delete_lang
SQL_QUERY;

$rs = exec_query($sql, $query, array());

/*

if( $exstatus != 0) {
    $error = "000017";
    set_page_message('Error 000017!');

    header( "Location: multilanguage.php" );
    die();
}
*/
write_log("$admin_login: remove language $id");

set_page_message('Language was removed!');

header( "Location: multilanguage.php" );
die();

?>
