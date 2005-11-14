<?php /* Smarty version 2.3.1, created on 2005-11-12 02:58:57
         compiled from modern_blue/folders.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'modern_blue/folders.htm', 139, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Folders", 'local'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
<title>Webmail</title>
<link href="themes/modern_blue/css/vhcs.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="themes/modern_blue/css/vhcs.js"></script>
<script type="text/javascript" src="themes/modern_blue/css/js.js"></script>
<script type="text/javascript" src="themes/modern_blue/css/webmail.js"></script>
<?php echo $this->_tpl_vars['umJS']; ?>

</head>

<body onLoad="MM_preloadImages('themes/modern_blue/images/icons/database_a.gif','themes/modern_blue/images/icons/hosting_plans_a.gif','themes/modern_blue/images/icons/domains_a.gif','themes/modern_blue/images/icons/new_mail_a.gif','themes/modern_blue/images/icons/refresh_a.gif','themes/modern_blue/images/icons/dirs_a.gif','themes/modern_blue/images/icons/search_a.gif','themes/modern_blue/images/icons/adresses_a.gif','themes/modern_blue/images/icons/trash_a.gif','themes/modern_blue/images/icons/settings_a.gif','themes/modern_blue/images/icons/logout_a.gif','themes/modern_blue/images/icons/indox_a.gif')">
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
  <tr>
    <td height="80" align="left" valign="top">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="17"><img src="themes/modern_blue/images/top/left.jpg" name="Image2" width="17" height="80" id="Image2"></td>
          <td width="198" align="center" background="themes/modern_blue/images/top/logo_background.jpg"><img src="themes/modern_blue/images/trans.gif" width="1" height="1"></td>
          <td background="themes/modern_blue/images/top/left_fill.jpg"><img src="themes/modern_blue/images/top/left_fill.jpg" width="2" height="80"></td>
          <td width="766"><img src="themes/modern_blue/images/top/middle_background.jpg" width="766" height="80"></td>
          <td background="themes/modern_blue/images/top/right_fill.jpg"><img src="themes/modern_blue/images/top/right_fill.jpg" width="3" height="80"></td>
          <td width="9"><img src="themes/modern_blue/images/top/right.jpg" width="9" height="80"></td>
        </tr>
    </table></td>
  </tr>
  <tr background="themes/modern_blue/images/content_background_mainpage.gif">
    <td valign="top"><table height="100%" width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="215" valign="top" bgcolor="#F5F5F5">
		<table width="211" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60" background="themes/modern_blue/images/menu/menu_top_left_bckgr.jpg"><img src="themes/modern_blue/images/menu/menu_top_left_bckgr.jpg" width="60" height="62"></td>
            <td width="151" background="themes/modern_blue/images/menu/menu_top_bckgr.jpg" class="title"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</td>
          </tr>
        </table>
		<table width="205" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr background="themes/modern_blue/images/line.jpg">
            <td colspan="3" background="themes/modern_blue/images/line.jpg"><img src="themes/modern_blue/images/line.jpg" width="2" height="7"><img src="themes/modern_blue/images/line.jpg" width="2" height="7"></td>
            </tr>
          <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
          </tr>
          <tr>
            <td width="28" background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:goinbox()" onMouseOver="MM_swapImage('indox','','themes/modern_blue/images/icons/indox_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:goinbox()" onMouseOver="MM_swapImage('indox','','themes/modern_blue/images/icons/indox_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a></td>
            <td width="36" align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:goinbox()" onMouseOver="MM_swapImage('indox','','themes/modern_blue/images/icons/indox_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/indox.gif" name="indox" width="36" height="36" border="0" id="indox"></a></td>
          </tr>
          <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
			 <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:newmsg()" onMouseOver="MM_swapImage('new_mail','','themes/modern_blue/images/icons/new_mail_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" name="Image1" width="28" height="36" border="0" id="Image1"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:newmsg()" onMouseOver="MM_swapImage('new_mail','','themes/modern_blue/images/icons/new_mail_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:newmsg()" onMouseOver="MM_swapImage('new_mail','','themes/modern_blue/images/icons/new_mail_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/new_mail.gif" name="new_mail" width="36" height="36" border="0" id="new_mail"></a></td>
          </tr>
		   <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:refreshlist()" onMouseOver="MM_swapImage('refresh','','themes/modern_blue/images/icons/refresh_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:refreshlist()" onMouseOver="MM_swapImage('refresh','','themes/modern_blue/images/icons/refresh_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:refreshlist()" onMouseOver="MM_swapImage('refresh','','themes/modern_blue/images/icons/refresh_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/refresh.gif" name="refresh" width="36" height="36" border="0" id="refresh"></a></td>
          </tr>
          <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:folderlist()" onMouseOver="MM_swapImage('folders','','themes/modern_blue/images/icons/dirs_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:folderlist()" onMouseOver="MM_swapImage('folders','','themes/modern_blue/images/icons/dirs_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu_active"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:folderlist()" onMouseOver="MM_swapImage('folders','','themes/modern_blue/images/icons/dirs_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/dirs_a.gif" name="folders" width="36" height="36" border="0" id="folders"></a></td>
          </tr>
		  <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/search.gif" name="search" width="36" height="36" border="0" id="search"></a></td>
          </tr>
		   <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:addresses()" onMouseOver="MM_swapImage('adressbook','','themes/modern_blue/images/icons/adresses_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:addresses()" onMouseOver="MM_swapImage('adressbook','','themes/modern_blue/images/icons/adresses_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['address_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:addresses()" onMouseOver="MM_swapImage('adressbook','','themes/modern_blue/images/icons/adresses_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/adresses.gif" name="adressbook" width="36" height="36" border="0" id="adressbook"></a></td>
          </tr>
		  <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:emptytrash()" onMouseOver="MM_swapImage('trash','','themes/modern_blue/images/icons/trash_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:emptytrash()" onMouseOver="MM_swapImage('trash','','themes/modern_blue/images/icons/trash_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['empty_trash_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:emptytrash()" onMouseOver="MM_swapImage('trash','','themes/modern_blue/images/icons/trash_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/trash.gif" name="trash" width="36" height="36" border="0" id="trash"></a></td>
          </tr>
		  <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:prefs()" onMouseOver="MM_swapImage('preferences','','themes/modern_blue/images/icons/settings_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:prefs()" onMouseOver="MM_swapImage('preferences','','themes/modern_blue/images/icons/settings_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:prefs()" onMouseOver="MM_swapImage('preferences','','themes/modern_blue/images/icons/settings_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/settings.gif" name="preferences" width="36" height="36" border="0" id="preferences"></a></td>
          </tr>
		  <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:goend()" onMouseOver="MM_swapImage('logout','','themes/modern_blue/images/icons/logout_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:goend()" onMouseOver="MM_swapImage('logout','','themes/modern_blue/images/icons/logout_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:goend()" onMouseOver="MM_swapImage('logout','','themes/modern_blue/images/icons/logout_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/logout.gif" name="logout" width="36" height="36" border="0" id="logout"></a></td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="62" align="left" background="themes/modern_blue/images/content/table_background.jpg" class="title"><img src="themes/modern_blue/images/content/table_icon.jpg" width="85" height="62" align="absmiddle"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</td>
            <td width="27" align="right" background="themes/modern_blue/images/content/table_background.jpg"><img src="themes/modern_blue/images/content/table_icon_close.jpg" width="27" height="62"></td>
          </tr>
          <tr>
            <td valign="top"><table width="100%"  border="00" cellspacing="0" cellpadding="0">
              <tr>
                <td width="30">&nbsp;</td>
                <td>
				<!-- HERE gose Mail Content -->
				
				<table cellspacing=3 width="100%">
			<tr>
			    <td width="30%" class="content"><b>.: <?php echo $this->_config[0]['vars']['fld_name_hea']; ?>
 :.</b></td>
			    <td width="20%" class="content"><b>.: <?php echo $this->_config[0]['vars']['fld_messages_hea']; ?>
 :.</b></td>
			    <td width="15%" class="content"><b>.: <?php echo $this->_config[0]['vars']['fld_size_hea']; ?>
 :.</b></td>
			    <td width="15%" class="content"><b>.: <?php echo $this->_config[0]['vars']['fld_empty_hea']; ?>
 :.</b></td>
			    <td width="20%" class="content"><b>.: <?php echo $this->_config[0]['vars']['fld_delete_hea']; ?>
 :.</b></td>
			</tr>

			<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umFolderList']) ? count($this->_tpl_vars['umFolderList']) : max(0, (int)$this->_tpl_vars['umFolderList']);
$this->_sections["i"]['show'] = true;
$this->_sections["i"]['max'] = $this->_sections["i"]['loop'];
$this->_sections["i"]['step'] = 1;
$this->_sections["i"]['start'] = $this->_sections["i"]['step'] > 0 ? 0 : $this->_sections["i"]['loop']-1;
if ($this->_sections["i"]['show']) {
    $this->_sections["i"]['total'] = $this->_sections["i"]['loop'];
    if ($this->_sections["i"]['total'] == 0)
        $this->_sections["i"]['show'] = false;
} else
    $this->_sections["i"]['total'] = 0;
if ($this->_sections["i"]['show']):

            for ($this->_sections["i"]['index'] = $this->_sections["i"]['start'], $this->_sections["i"]['iteration'] = 1;
                 $this->_sections["i"]['iteration'] <= $this->_sections["i"]['total'];
                 $this->_sections["i"]['index'] += $this->_sections["i"]['step'], $this->_sections["i"]['iteration']++):
$this->_sections["i"]['rownum'] = $this->_sections["i"]['iteration'];
$this->_sections["i"]['index_prev'] = $this->_sections["i"]['index'] - $this->_sections["i"]['step'];
$this->_sections["i"]['index_next'] = $this->_sections["i"]['index'] + $this->_sections["i"]['step'];
$this->_sections["i"]['first']      = ($this->_sections["i"]['iteration'] == 1);
$this->_sections["i"]['last']       = ($this->_sections["i"]['iteration'] == $this->_sections["i"]['total']);
?>
				<tr>

					<td class="content3"><a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['chlink']; ?>
" class="link"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['name'], "html"); ?>
</a></td>
					<td class="content3"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['msgs']; ?>
</td>
					<td class="content3"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['boxsize']; ?>
Kb &nbsp;</td>
					<td class="content3"><a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['emptylink']; ?>
" class="link">OK</a></td>
					<td class="content3"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['del']; ?>
</td>
				</tr>
			<?php endfor; endif; ?>

			<tr>
				<td>&nbsp;</td>
				<td class="content2" align="right"><b><?php echo $this->_config[0]['vars']['fld_total']; ?>
</b> &nbsp;</td>
				<td class="content2"><b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>Kb &nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

			<?php if ($this->_tpl_vars['umQuotaEnabled'] == 1): ?>
			<tr>
			  <td colspan=5>&nbsp;</td>
			  </tr>
			<tr>
				<td colspan=5>&nbsp; <?php echo $this->_config[0]['vars']['quota_usage_info']; ?>
: <?php echo $this->_config[0]['vars']['quota_usage_used']; ?>
 <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_of']; ?>
 <b><?php echo $this->_tpl_vars['umQuotaLimit']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_avail']; ?>
<br> <?php echo $this->_tpl_vars['umUsageGraph']; ?>
</td>
			</tr>
			<?php endif; ?>
			<tr>
			  <td colspan="5">&nbsp;</td>
			  </tr>
			<tr>
				<form name="form1" action="folders.php" method="POST" onsubmit="return create();">
				<input type=hidden name=sid value="<?php echo $this->_tpl_vars['umSid']; ?>
">
				<input type=hidden name=lid value="<?php echo $this->_tpl_vars['umLid']; ?>
">
				<input type=hidden name=tid value="<?php echo $this->_tpl_vars['umTid']; ?>
">
				<td colspan="5">
				<br>
					<table cellspacing="3">
                      <tr>
                        <td><input type=Text name=newfolder value="" class="textinput">
&nbsp; </td>
                        <td><span class="default">
                          <input type=button value="<?php echo $this->_config[0]['vars']['fld_make_new']; ?>
" class=button onClick="create()">
                        </span></td>
                      </tr>
                    </table>
				  </td>
				</form>
			</tr>
		</table>
				
				
				
				<!-- END of Mail Content -->
				</td>
              </tr>
            </table>
			</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
          </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="71" background="themes/modern_blue/images/background_down.gif"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr><td width="17"><img src="themes/modern_blue/images/top/down_left.jpg" width="17" height="71"></td><td width="198" valign="top" background="themes/modern_blue/images/top/downlogo_background.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td width="55"></td>
            <td class="bottom"></td>
          </tr>
        </table>          </td>
          <td background="themes/modern_blue/images/top/down_left_fill.jpg"><img src="themes/modern_blue/images/top/down_left_fill.jpg" width="2" height="71"></td><td width="766" background="themes/modern_blue/images/top/middle_background.jpg"><img src="themes/modern_blue/images/top/down_middle_background.jpg" width="766" height="71"></td>
          <td background="themes/modern_blue/images/top/down_right_fill.jpg"><img src="themes/modern_blue/images/top/down_right_fill.jpg" width="3" height="71"></td>
          <td width="9"><img src="themes/modern_blue/images/top/down_right.jpg" width="9" height="71"></td></tr>
    </table></td>
  </tr>
</table>
</body>
</html>