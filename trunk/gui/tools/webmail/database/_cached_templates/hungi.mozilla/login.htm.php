<?php /* Smarty version 2.3.1, created on 2005-10-13 02:32:10
         compiled from hungi.mozilla/login.htm */ ?>
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
		<table width="450" cellspacing="7" align="center">
			
			<form name="form1" action="process.php" method=post>
				
				<tr align="center"><td class="title" colspan=2>&nbsp;</td>

				<?php if ($this->_tpl_vars['umServerType'] != "ONE-FOR-EACH"): ?>
				<tr><td align=right  width="30%" class="login_text"><b><?php echo $this->_config[0]['vars']['lng_user_email']; ?>
</b>: &nbsp;</td><td class="default"><input type=text size=10 name="f_email" value="<?php echo $this->_tpl_vars['umEmail']; ?>
" class="textinput" style="width:180px;"></td>
				<?php else: ?>
				<tr><td align=right  width="30%" class="login_text"><b><?php echo $this->_config[0]['vars']['lng_user_name']; ?>
</b>: &nbsp;</td><td class="default"><input type=text size=5 name="f_user" value="<?php echo $this->_tpl_vars['umUser']; ?>
" class="textinput" style="width:80px;">
				<?php if ($this->_tpl_vars['umAvailableServers'] != 0): ?> <b><?php echo $this->_tpl_vars['umServer']; ?>
</b><?php endif; ?></td>
				<?php endif; ?>
				<tr><td align=right  width="30%" class="login_text"><b><?php echo $this->_config[0]['vars']['lng_user_pwd']; ?>
</b>: &nbsp;</td><td class="default"><input type=password size=10 name="f_pass" class="textinput" style="width:180px;" value="<?php echo $this->_tpl_vars['umPass']; ?>
"></td>


				<?php if ($this->_tpl_vars['umAllowSelectLanguage']): ?>
				<tr><td align=right class="login_text"><b><?php echo $this->_config[0]['vars']['lng_language']; ?>
</b>: &nbsp;</td><td class="default"><?php echo $this->_tpl_vars['umLanguages']; ?>
</td>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['umAllowSelectTheme']): ?>
				<tr><td align=right class="login_text"><b><?php echo $this->_config[0]['vars']['lng_theme']; ?>
</b>: &nbsp;</td><td class="default"><?php echo $this->_tpl_vars['umThemes']; ?>
</td>
				<?php endif; ?>

				<tr><td>&nbsp;</td><td class="default">
				<input type=submit name=submit value="<?php echo $this->_config[0]['vars']['lng_login_btn']; ?>
" class="button"></td>
			  </form>
			</table>
		</td>
      </tr>
      <tr>
        <td width="1" height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
        <td height="2" background="themes/modern_blue/images/login/content_down.gif"><img src="themes/modern_blue/images/login/content_down.gif" width="2" height="2"></td>
      </tr>
      <tr>
        <td width="1" bgcolor="#334163">&nbsp;</td>
        <td bgcolor="#334163"><br><span class="login_bottom"></span></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
