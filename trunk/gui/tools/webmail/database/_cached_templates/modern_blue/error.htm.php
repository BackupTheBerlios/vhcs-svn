<?php /* Smarty version 2.3.1, created on 2005-10-13 05:13:54
         compiled from modern_blue/error.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Login", 'local'); ?>
<html>
<head>
<title>Webmail :: Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
<link href="themes/modern_blue/css/vhcs.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="themes/modern_blue/css/vhcs.js"></script>

<?php echo $this->_tpl_vars['umJS']; ?>

</head>
<body text="#000000">
<table width="100%" height="99%"  border="00" cellpadding="0" cellspacing="0" bgcolor="#334163">
  <tr>
    <td height="551"><table width="100%"  border="00" cellpadding="0" cellspacing="0">
      <tr bgcolor="#334163">
        <td>&nbsp;</td>
        <td align="right"><span class="login_time">&nbsp;</td>
      </tr>
      <tr>
        <td width="1" background="themes/modern_blue/images/login/content_background.gif"><img src="themes/modern_blue/images/login/content_background.gif" width="1" height="348"></td>
        <td height="348" align="center" background="themes/modern_blue/images/login/content_background.gif">
		<table width="450" align="center" cellpadding="3" cellspacing="1" bgcolor="#FF0000">
			
				
				<tr align="center"><td width="30" align="center" bgcolor="#FFFFFF" class="title">
				<strong><br>
				<?php echo $this->_config[0]['vars']['err_msg']; ?>
</strong><br>
				<br>
				<?php echo $this->_config[0]['vars']['err_system_msg']; ?>
 
				<?php if ($this->_tpl_vars['umErrorCode'] == "1"): ?><?php echo $this->_config[0]['vars']['error_connect']; ?>

				<?php elseif ($this->_tpl_vars['umErrorCode'] == "2"): ?><?php echo $this->_config[0]['vars']['error_retrieving']; ?>

				<?php else: ?><?php echo $this->_config[0]['vars']['error_other']; ?>
<?php endif; ?><br><br>
				<a href="logout.php?sid=<?php echo $this->_tpl_vars['umSid']; ?>
&tid=<?php echo $this->_tpl_vars['umTid']; ?>
&lid=<?php echo $this->_tpl_vars['umLid']; ?>
" class="link"><?php echo $this->_config[0]['vars']['err_exit']; ?>
</a><br><br></td>

			</table>
		</td>
      </tr>
      <tr>
        <td width="1" height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
        <td height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
      </tr>
      <tr>
        <td width="1" bgcolor="#334163">&nbsp;</td>
        <td bgcolor="#334163"><span class="login_bottom"></span></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
