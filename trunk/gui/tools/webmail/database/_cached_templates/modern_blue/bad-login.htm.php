<?php /* Smarty version 2.3.1, created on 2005-11-12 22:18:16
         compiled from modern_blue/bad-login.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "BadLogin", 'local'); ?>
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
		<table width="450" cellspacing="7" align="center">
			

				
				<tr align="center"><td width="30" height="250" valign="middle"><font color=red><b><?php echo $this->_config[0]['vars']['bdl_title']; ?>
</b></font><br><br><br><?php echo $this->_config[0]['vars']['bdl_msg']; ?>
<br><a href="./index.php?tid=<?php echo $this->_tpl_vars['umTid']; ?>
&lid=<?php echo $this->_tpl_vars['umLid']; ?>
" class="link"><?php echo $this->_config[0]['vars']['bdl_back']; ?>
</a></td>

			</table>
		</td>
      </tr>
      <tr>
        <td width="1" height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
        <td height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
      </tr>
      <tr>
        <td width="1" bgcolor="#334163">&nbsp;</td>
        <td bgcolor="#334163"><a href="http://www.vhcs.net" target="_blank"><img src="themes/modern_blue/images/login/vhcs_logo.gif" alt="VHCS - Virtual Hosting Control System - Control Panel" width="68" height="60" border="0"></a><br><span class="login_bottom">Webmail<br>powered by UebiMiau!</span></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
