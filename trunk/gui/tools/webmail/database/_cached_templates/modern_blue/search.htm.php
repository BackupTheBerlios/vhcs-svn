<?php /* Smarty version 2.3.1, created on 2005-11-12 02:58:52
         compiled from modern_blue/search.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'modern_blue/search.htm', 140, false),
array('modifier', 'truncate', 'modern_blue/search.htm', 171, false),
array('modifier', 'default', 'modern_blue/search.htm', 171, false),
array('modifier', 'date_format', 'modern_blue/search.htm', 173, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Search", 'local'); ?>
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
            <td width="151" background="themes/modern_blue/images/menu/menu_top_bckgr.jpg" class="title"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
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
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:folderlist()" onMouseOver="MM_swapImage('folders','','themes/modern_blue/images/icons/dirs_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:folderlist()" onMouseOver="MM_swapImage('folders','','themes/modern_blue/images/icons/dirs_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/dirs.gif" name="folders" width="36" height="36" border="0" id="folders"></a></td>
          </tr>
		  <tr>
            <td colspan="3"><img src="themes/modern_blue/images/trans.gif" width="30" height="4"></td>
            </tr>
		   <tr>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/menu/pointer.jpg" width="28" height="36" border="0"></a></td>
            <td background="themes/modern_blue/images/menu/button_background.jpg" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()" class="menu_active"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</a></td>
            <td align="right" background="themes/modern_blue/images/icons/icon_bcgr.gif" class="menu"><a href="javascript:search()" onMouseOver="MM_swapImage('search','','themes/modern_blue/images/icons/search_a.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="themes/modern_blue/images/icons/search_a.gif" name="search" width="36" height="36" border="0" id="search"></a></td>
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
            <td height="62" align="left" background="themes/modern_blue/images/content/table_background.jpg" class="title"><img src="themes/modern_blue/images/content/table_icon.jpg" width="85" height="62" align="absmiddle"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</td>
            <td width="27" align="right" background="themes/modern_blue/images/content/table_background.jpg"><img src="themes/modern_blue/images/content/table_icon_close.jpg" width="27" height="62"></td>
          </tr>
          <tr>
            <td valign="top"><table width="100%"  border="00" cellspacing="0" cellpadding="0">
              <tr>
                <td width="30">&nbsp;</td>
                <td>
				<!-- HERE gose Mail Content -->
				
				 <table cellspacing=1 cellpadding=1 width="100%" border=0>
			<tr>
				<td class="content" colspan="5"> <?php echo $this->_config[0]['vars']['sch_information_text']; ?>

				</td>
			<tr>
				<form name="form1" action="search.php" method="POST">
				<input type=hidden name=tid value="<?php echo $this->_tpl_vars['umTid']; ?>
">
				<input type=hidden name=lid value="<?php echo $this->_tpl_vars['umLid']; ?>
">
				<input type=hidden name=sid value="<?php echo $this->_tpl_vars['umSid']; ?>
">
				<td colspan=5>
					<table cellspacing=7 width="100%">
						<tr>
							<td class="content2" width="230"><?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
: &nbsp;
							<td colspan="4"><input type=text name=srcFrom value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputFrom'], "html"); ?>
" class="textinput" size="40" maxlength="40"></td>
						<tr>
							<td class="content2"><?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
: &nbsp;<td colspan="4"><input type=text name=srcSubject value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputSubject'], "html"); ?>
" class="textinput" size="40" maxlength="40"></td>
						<tr>
							<td class="content2"><?php echo $this->_config[0]['vars']['sch_body_hea']; ?>
: &nbsp;<td colspan="4"><input type=text name=srcBody value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputBody'], "html"); ?>
" class="textinput" size="40" maxlength="40"></td>
						<tr>
							<td>
							<td colspan="4">
							<span class="default">
							<input type=submit value="<?php echo $this->_config[0]['vars']['sch_button_text']; ?>
" class=button>
							</span><br></td>
					</table>			
	
				</td>
				</form>
			<tr>
				<td colspan="5">&nbsp;</td>

			<?php if ($this->_tpl_vars['umDoSearch']): ?>

			  <tr>
				    <td width="35"  class="content2"><img src="./images/prior_high.gif" width=5 height=11 border=0 alt="">&nbsp;<img src="images/attach.gif" border="0" width="6" height="14" alt="">&nbsp;<img src="images/msg_read.gif" border="0" width="14" height="14" alt=""></td>
				    <td width="200" class="content2">.: <b><?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
</b> :.</td>
			    	<td width="160" class="content2">.: <b><?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
</b> :.</td>
				    <td width="90" class="content2">.: <b><?php echo $this->_config[0]['vars']['sch_date_hea']; ?>
</b> :.</td>
				    <td width="140" class="content2">.: <b><?php echo $this->_config[0]['vars']['sch_folder_hea']; ?>
</b> :.</td>
			  </tr>

				<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umMessageList']) ? count($this->_tpl_vars['umMessageList']) : max(0, (int)$this->_tpl_vars['umMessageList']);
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
					<td class="content3"><?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['priorimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['attachimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['statusimg']; ?>
</td>
					<td class="content3"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
" class="link"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b><?php endif; ?></td>
					<td class="content3"><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['composelink']; ?>
" class="link"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a></td>
					<td class="content3"><?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['date'], $this->_config[0]['vars']['date_format']); ?>
</td>
					<td class="content3">&nbsp;<a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['folderlink']; ?>
" class="link"><?php echo $this->_tpl_vars['umBoxName']; ?>
</a></td>
				</tr>
				<?php endfor; else: ?>
				<tr>
				    <td width="100%"  class="content3"  colspan="5"><center><br><?php echo $this->_config[0]['vars']['sch_no_results']; ?>
<br><br></center></td>
				</tr>
				<?php endif; ?>
			<?php endif; ?>
		</table>

				
				<!-- END of Mail Content --></td>
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