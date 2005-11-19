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

function passgen() {
	$pw = '';
	$pw_lenght = 8;
  $zeichen = "0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
  $array_b = explode(",",$zeichen);
  for($i=0;$i<$pw_lenght;$i++) {
  	srand((double)microtime()*1000000);
    $z = rand(0,25);
    $pw .= "".$array_b[$z]."";
  }
	return $pw;
}

function uniqkeyexists($uniqkey) {
	global $sql;
  $query = <<<SQL_QUERY
        select
            *
        from
            admin
        where
            uniqkey = ?

SQL_QUERY;

  $res = exec_query($sql, $query, array($uniqkey));
  if ($res -> RecordCount() != 0) return true;
  return false;
}

function uniqkeygen() {
	$uniqkey='';
	while ( uniqkeyexists($uniqkey) || !$uniqkey) {
		$uniqkey = md5(uniqid(rand()));
	}
	return $uniqkey;
}

function sendpw($uniqkey) {
	global $sql;

  $query = <<<SQL_QUERY
        select
            admin_name, created_by, fname, lname, email
        from
            admin
        where
            uniqkey = ?

SQL_QUERY;

  $res = exec_query($sql, $query, array($uniqkey));

	if ($res -> RecordCount() ==1 ){

		$admin_name = $res -> fields['admin_name'];

	  $created_by = $res -> fields['created_by'];

	  $admin_fname = $res -> fields['fname'];

  	$admin_lname = $res -> fields['lname'];

  	$to = $res -> fields['email'];

		$upass = passgen();

    $query = <<<SQL_QUERY
            update
              admin
            set
              admin_pass = ?
            where
              uniqkey = ?
SQL_QUERY;

    $rs = exec_query($sql, $query, array(crypt_user_pass($upass), $uniqkey));

    write_log("Lostpassword: ".$admin_name." : password updated");

    $query = <<<SQL_QUERY
            update
              admin
            set
              uniqkey = ?
            where
              uniqkey = ?
SQL_QUERY;

    $rs = exec_query($sql, $query, array('', $uniqkey));

	  $query = <<<SQL_QUERY
  	      select
    	        admin_id, fname, lname, email
      	  from
        	    admin
        	where
          	  admin_id = ?

SQL_QUERY;

		if ($created_by == 0) $created_by = 1;

	  $res = exec_query($sql, $query, array($created_by));

		$admin_id = $res -> fields['admin_id'];

		$from_fname = $res -> fields['fname'];

		$from_lname = $res -> fields['lname'];

		$from_email = $res -> fields['email'];

    if ($from_fname && $from_lname) {

        $from = "$from_fname $from_lname <$from_email>";

    } else {

        $from = $from_email;
		}

    $query = <<<SQL_QUERY
        select
            subject, message
        from
            email_tpls
        where
            owner_id = ?
          and
            name = 'lostpw-msg-2'
SQL_QUERY;

    $res = exec_query($sql, $query, array($admin_id));

    $subject = $res -> fields['subject'];

    $message = $res -> fields['message'];

    if ($res -> RecordCount() ==0 ){

	  $subject = "Auto message allert for lostpw ! {USERNAME}";

    $message = <<<MSG
Hello {NAME} !

Your VHCS login is: {USERNAME}
Your VHCS password is: {PASSWORD}

Good Luck with VHCS Pro System
Hosting Provider Team


MSG;
}
    $subject = preg_replace("/\{USERNAME\}/", $admin_name, $subject);
    $message = preg_replace("/\{USERNAME\}/", $admin_name, $message);
    $message = preg_replace("/\{NAME\}/", $admin_fname." ".$admin_lname, $message);
    $message = preg_replace("/\{PASSWORD\}/", $upass, $message);
    $message = str_replace(chr(10),"",$message);
    
    $headers = "From: $from\r\n";

    $headers .= "Content-Type: text/plain\nContent-Transfer-Encoding: 7bit\n";

    $headers .= "X-Mailer: VHCS Pro v2.5.x lostpassword mailer";

    $mail_result = mail($to, $subject, $message, $headers);

    $mail_status = ($mail_result) ? 'OK' : 'NOT OK';

    $log_message = "Lostpassword aktivated: To: |$to|, From: |$from|, Status: |$mail_status| !";

    write_log($log_message);

		return true;

	}

	return false;

}

function lostpw($admin_name) {
	global $sql;

  $query = <<<SQL_QUERY
        select
            created_by, fname, lname, email
        from
            admin
        where
            admin_name = ?

SQL_QUERY;

  $res = exec_query($sql, $query, array($admin_name));

	if ($res -> RecordCount() ==1 ){

	  $created_by = $res -> fields['created_by'];

	  $admin_fname = $res -> fields['fname'];

  	$admin_lname = $res -> fields['lname'];

  	$to = $res -> fields['email'];

		$uniqkey = uniqkeygen();

    $query = <<<SQL_QUERY
            update
              admin
            set
              uniqkey = ?
            where
              admin_name = ?
SQL_QUERY;

    $rs = exec_query($sql, $query, array($uniqkey, $admin_name));
    write_log("Lostpassword: ".$admin_name." : uniqkey created");

	  $query = <<<SQL_QUERY
  	      select
    	        admin_id, fname, lname, email
      	  from
        	    admin
        	where
          	  admin_id = ?

SQL_QUERY;

		if ($created_by == 0) $created_by = 1;

	  $res = exec_query($sql, $query, array($created_by));

		$admin_id = $res -> fields['admin_id'];

		$from_fname = $res -> fields['fname'];

		$from_lname = $res -> fields['lname'];

		$from_email = $res -> fields['email'];

    if ($from_fname && $from_lname) {

        $from = "$from_fname $from_lname <$from_email>";

    } else {

        $from = $from_email;
		}

    switch( $_SERVER["SERVER_PORT"] ) {
		case "80": $prot = "http://";
		break;
		case "443": $prot = "https://";
		break;
	}

	$link = $prot.$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]."?i=".$uniqkey;

    $query = <<<SQL_QUERY
        select
            subject, message
        from
            email_tpls
        where
            owner_id = ?
          and
            name = 'lostpw-msg-1'
SQL_QUERY;

    $res = exec_query($sql, $query, array($admin_id));

    $subject = $res -> fields['subject'];

    $message = $res -> fields['message'];

    if ($res -> RecordCount() ==0 ){


  $subject = "Auto message allert for lostpw ! {USERNAME}";

    $message = <<<MSG
Hello {NAME} !

Use this link to aktivate your new VHCS password:

{LINK}


Good Luck with VHCS Pro System
Hosting Provider Team

MSG;
}
    $subject = preg_replace("/\{USERNAME\}/", $admin_name, $subject);
    $message = preg_replace("/\{NAME\}/", $admin_fname." ".$admin_lname, $message);
    $message = preg_replace("/\{LINK\}/", $link, $message);
    $message = str_replace(chr(10),"",$message);

    $headers = "From: $from\r\n";

    $headers .= "Content-Type: text/plain\nContent-Transfer-Encoding: 7bit\n";

    $headers .= "X-Mailer: VHCS Pro v2.5.x lostpassword mailer";

    $mail_result = mail($to, $subject, $message, $headers);

    $mail_status = ($mail_result) ? 'OK' : 'NOT OK';

    $log_message = "Lostpassword send: To: |$to|, From: |$from|, Status: |$mail_status| !";

    write_log($log_message);

		return true;

	}

	return false;

}

?>