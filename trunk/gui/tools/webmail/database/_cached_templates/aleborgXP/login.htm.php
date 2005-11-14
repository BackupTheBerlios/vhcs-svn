<?php /* Smarty version 2.3.1, created on 2005-10-13 01:16:15
         compiled from aleborgXP/login.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'aleborgXP/login.htm', 8, false),)); ?><html><body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Login", 'local'); ?>
<!---
Theme created by Anders Aleborg
Visit www.cyber.nu
--->

<head>
<title>UebiMiau - <?php echo $this->_run_mod_handler('escape', true, $this->_config[0]['vars']['lgn_title'], "html"); ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="themes/aleborgXP/webmail.css" type="text/css">
</head>
<?php echo $this->_tpl_vars['umJS']; ?>


<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td background="themes/aleborgXP/images/menu_back.gif" bgcolor="#FFFFFF" align="center"> 
        <table border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="8"><img src="themes/aleborgXP/images/login/left_up_corner.gif" width="8" height="29"></td>
            <td> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td background="themes/aleborgXP/images/login/up_back.gif" class="white"><b><?php echo $this->_config[0]['vars']['lgn_welcome_msg']; ?>
</b></td>
                  
                <td width="31"><a href="javascript:;" onClick="self.close();"><img src="themes/aleborgXP/images/login/right_up_corner.gif" width="31" height="29" border="0"></a></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td background="themes/aleborgXP/images/login/left_side.gif"><img src="themes/aleborgXP/images/login/left_side.gif" width="8" height="5"></td>
            <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td> 
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td colspan="2" height="20"></td>
                    </tr>
                    <form name="form1" action="process.php" method=post>
                      <?php if ($this->_tpl_vars['umServerType'] != "ONE-FOR-EACH"): ?> 
                      <tr> 
                        <td><?php echo $this->_config[0]['vars']['lng_user_email']; ?>
:&nbsp;</td>
                        <td>
                          <input type="text" name="f_email" value="<?php echo $this->_tpl_vars['umEmail']; ?>
">
                        </td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="3"></td>
                      </tr>
                      <?php else: ?> 
                      <tr> 
                        <td><?php echo $this->_config[0]['vars']['lng_user_name']; ?>
:&nbsp;</td>
                        <td>
                          <input type="text" name="f_user" value="<?php echo $this->_tpl_vars['umUser']; ?>
">
                          <?php if ($this->_tpl_vars['umAvailableServers'] != 0): ?> <b><?php echo $this->_tpl_vars['umServer']; ?>
</b><?php endif; ?></td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="3"></td>
                      </tr>
                      <?php endif; ?> 
                      <tr> 
                        <td><?php echo $this->_config[0]['vars']['lng_user_pwd']; ?>
:</td>
                        <td>
                          <input type="password" name="f_pass">
                        </td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="3"></td>
                      </tr>
                      <?php if ($this->_tpl_vars['umAllowSelectLanguage']): ?> 
                      <tr> 
                        <td><?php echo $this->_config[0]['vars']['lng_language']; ?>
:</td>
                        <td><?php echo $this->_tpl_vars['umLanguages']; ?>
</td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="5"></td>
                      </tr>
                      <?php endif; ?> <?php if ($this->_tpl_vars['umAllowSelectTheme']): ?> 
                      <tr> 
                        <td><?php echo $this->_config[0]['vars']['lng_theme']; ?>
:</td>
                        <td><?php echo $this->_tpl_vars['umThemes']; ?>
</td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="15"></td>
                      </tr>
                      <?php endif; ?> 
                      <tr> 
                        <td></td>
                        <td> <input type="submit" name="submit" value="<?php echo $this->_config[0]['vars']['lng_login_btn']; ?>
"> 
                        </td>
                      </tr>
                      <tr> 
                        <td colspan="2" height="5"></td>
                      </tr>
                      <tr> 
                        <td></td>
                        <td><a target="_blank" href="http://uebimiau.sourceforge.net">Powered 
                          by UebiMiau!</a></td>
                      </tr>
                    </form>
                  </table>
                    </td>
                  <td width="8" background="themes/aleborgXP/images/login/right_side.gif"><img src="themes/aleborgXP/images/login/right_side.gif" width="8" height="5"></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td><img src="themes/aleborgXP/images/login/left_down_corner.gif" width="8" height="5"></td>
            <td align="right" background="themes/aleborgXP/images/login/down_buttom.gif"><img src="themes/aleborgXP/images/login/down_buttom.gif" width="8" height="5"><img src="themes/aleborgXP/images/login/right_down_corner.gif" width="8" height="5"></td>
          </tr>
        </table>
	</td>
  </tr>
</table>
</body>
</html>