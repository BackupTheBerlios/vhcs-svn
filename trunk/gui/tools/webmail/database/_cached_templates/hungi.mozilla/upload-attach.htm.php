<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:04
         compiled from hungi.mozilla/upload-attach.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Newmessage", 'local'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>UebiMiau - <?php echo $this->_config[0]['vars']['up_title']; ?>
</title>
	<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
</head>
<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#DDE3EB" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
<table width="98%" border="0" cellspacing="0" cellpadding="0" align="center">
<form name=form1 enctype="multipart/form-data" action="upload.php?sid=<?php echo $this->_tpl_vars['umSid']; ?>
" method=POST>
	<td><img src="themes/hungi.mozilla/header-bg-left.gif" border="0"></td><td  height="22" width="100%" class="headers"><b><?php echo $this->_config[0]['vars']['up_information_text']; ?>
</b></td><td><img src="themes/hungi.mozilla/header-bg-right.gif" border="0"></td>
<tr><td colspan="3"><input type=file name=userfile class=textbox size=33 style="width: 250px;"></td></tr>
<tr><td  colspan="3"class=default align=right>
<table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:document.form1.submit()"><?php echo $this->_config[0]['vars']['up_button_text']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
</table>
</td></tr>
</form>
</table>
</body>
</html>