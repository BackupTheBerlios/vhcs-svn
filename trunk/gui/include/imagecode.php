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

if (!isset($_SESSION)) session_start();

createImage('image',array(229,243,252),array(0,53,92),100,20);

function strrand($length) {
    $str = "";
    while(strlen($str)<$length){
    $random=rand(48,122);
    if (ereg('[A-Za-z]',chr($random)))
        $str.=chr($random);
    }
    return $str;
}

function createImage($strSessionVar,$rgBgColor,$rgTextColor,$x,$y) {

    $iRandVal = strrand(10);

    $_SESSION[$strSessionVar] = $iRandVal;

    $im = imagecreate($x,$y) or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($im, $rgBgColor[0],
                                                $rgBgColor[1],
                                                $rgBgColor[2]);

    $text_color = imagecolorallocate($im,  $rgTextColor[0],
                                           $rgTextColor[1],
                                           $rgTextColor[2]);

	$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);

    // genaueres zur Funktion auf php.net
    imagestring($im,5,3,3,$iRandVal,$text_color);

	//some obfuscation
    for ($i=0; $i<3; $i++) {
    	$x1 = rand(0, $x - 1);
        $y1 = rand(0, round($y / 10, 0));
        $x2 = rand(0, round($x / 10, 0));
        $y2 = rand(0, $y - 1);
        imageline($im, $x1, $y1, $x2, $y2, $white);

        $x1 = rand(0, $x - 1);
        $y1 = $y - rand(1, round($y / 10, 0));
        $x2 = $x - rand(1, round($x / 10, 0));
        $y2 = rand(0, $y - 1);
        imageline($im, $x1, $y1, $x2, $y2, $white);
	}

    // Header schicken
    header("Content-type: image/png");

    // PNG Bild erzeugen und senden
    imagepng($im);

    // Bild auf dem Server loeschen
    imagedestroy($im);

}

?>