<?php
/* $Id: header_http.inc.php,v 2.1.10.1 2005/11/15 15:21:47 lem9 Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

/**
 * Sends http headers
 */
$GLOBALS['now'] = gmdate('D, d M Y H:i:s') . ' GMT';
header('Expires: ' . $GLOBALS['now']); // rfc2616 - Section 14.21
header('Last-Modified: ' . $GLOBALS['now']);
header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0
if (!defined('IS_TRANSFORMATION_WRAPPER')) {
    // Define the charset to be used
    header('Content-Type: text/html; charset=' . $GLOBALS['charset']);
}
?>
