<?php /* Smarty version 2.3.1, created on 2005-10-13 02:06:50
         compiled from modern_blue/upload-attach.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Newmessage", 'local'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Webmail - <?php echo $this->_config[0]['vars']['up_title']; ?>
</title>
	<link rel="stylesheet" href="themes/blue/css/vhcs.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
</head>

<body bgcolor="#334163" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
<br>
<table width="250" border="0" cellspacing="0" cellpadding="0" align="center">
<form enctype="multipart/form-data" action="upload.php?sid=<?php echo $this->_tpl_vars['umSid']; ?>
" method=POST>
<tr><td class=headers><b><?php echo $this->_config[0]['vars']['up_information_text']; ?>
</b></td></tr>
<tr><td><input type=file name=userfile class=textbox size=22></td></tr>
<tr><td align=right><input type=submit value="<?php echo $this->_config[0]['vars']['up_button_text']; ?>
" name=submit class=button></td></tr>
</form>
</table>
</body>
</html>