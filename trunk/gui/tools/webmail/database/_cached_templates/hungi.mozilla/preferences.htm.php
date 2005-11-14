<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:29
         compiled from hungi.mozilla/preferences.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'hungi.mozilla/preferences.htm', 56, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Preferences", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>UebiMiau - <?php echo $this->_config[0]['vars']['prf_title']; ?>
</title>
	<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">

<script language="JavaScript" src="themes/hungi.mozilla/webmail.js" type="text/javascript"></script>

<?php echo $this->_tpl_vars['umJS']; ?>


</head>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" onLoad="dis()">


<table cellspacing=0 cellpadding=0 border=0 align=center bgcolor="#DDE3EB" width="100%">
	<tr>
		<td valign=top width="100%" align=center>
		
			<table cellspacing=1 background="themes/hungi.mozilla/menu-bg.gif" cellpadding=3 width="100%" border=0>
			<tr height="54" align="center">
				<td > <a class="menu" href="javascript:goinbox()"><img src="themes/hungi.mozilla/inbox.gif" border=0></a><br>
				<a class="menu" href="javascript:goinbox()"><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:newmsg()"><img src="themes/hungi.mozilla/compose.gif" border=0></a><br>
				<a class="menu" href="javascript:newmsg()"><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
</a></td>
				<td ><img src="themes/hungi.mozilla/refresh.gif" border=0><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:folderlist()"><img src="themes/hungi.mozilla/folders.gif" border=0></a><br>
				<a class="menu" href="javascript:folderlist()"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:search()"><img src="themes/hungi.mozilla/search.gif" border=0></a><br>
				<a class="menu" href="javascript:search()"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:addresses()"><img src="themes/hungi.mozilla/address.gif" border=0></a><br>
				<a class="menu" href="javascript:addresses()"><?php echo $this->_config[0]['vars']['address_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:emptytrash()"><img src="themes/hungi.mozilla/trash.gif" border=0></a><br>
				<a class="menu" href="javascript:emptytrash()"><?php echo $this->_config[0]['vars']['empty_trash_mnu']; ?>
</a></td>
				<td ><img src="themes/hungi.mozilla/preferences.gif" border=0></a><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:goend()"><img src="themes/hungi.mozilla/logout.gif" border=0></a><br>
				<a class="menu" href="javascript:goend()"><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a></td>
			</tr></table>		
		</td></tr>
		<td valign=top>
			<table cellspacing=0 cellpadding=2 width="100%" border=0 >
				<form name=form1 action=preferences.php method=POST>
				<input type=hidden name=sid value="<?php echo $this->_tpl_vars['umSid']; ?>
">
				<input type=hidden name=lid value="<?php echo $this->_tpl_vars['umLid']; ?>
">
				<input type=hidden name=tid value="<?php echo $this->_tpl_vars['umTid']; ?>
">
				<tr>
					<td height="22" colspan=2 class=headers><b><?php echo $this->_config[0]['vars']['prf_general_title']; ?>
</b></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class=default size="20%"> &nbsp;<?php echo $this->_config[0]['vars']['prf_name']; ?>
</td>
					<td class=default><input type=text name=f_real_name size=30 value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umRealName'], "html"); ?>
" class="textbox"></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class=default> &nbsp;<?php echo $this->_config[0]['vars']['prf_reply_to']; ?>
</td>
					<td class=default><input type=text name=f_reply_to size=30 value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umReplyTo'], "html"); ?>
" class="textbox"></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class=default> &nbsp;<?php echo $this->_config[0]['vars']['prf_time_zone']; ?>
</td>
					<td class=default><?php echo $this->_tpl_vars['umTimezoneSelect']; ?>
</td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class=default> &nbsp;<?php echo $this->_config[0]['vars']['prf_default_editor_mode']; ?>
</td>
					<td class=default>
					<select name="f_editor_mode">
						<option value="text"<?php if ($this->_tpl_vars['umEditorMode'] == "text"): ?> selected<?php endif; ?>><?php echo $this->_config[0]['vars']['prf_default_editor_mode_text']; ?>

						<option value="html"<?php if ($this->_tpl_vars['umEditorMode'] == "html"): ?> selected<?php endif; ?>><?php echo $this->_config[0]['vars']['prf_default_editor_mode_html']; ?>

					</select>
					</td>
				</tr>
				<tr>
					<td  height="22" colspan=2 class=headers><b><?php echo $this->_config[0]['vars']['prf_trash_title']; ?>
</b></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class=default colspan=2><input type=checkbox name=f_save_trash onClick="dis()" value="1"<?php echo $this->_tpl_vars['umSaveTrash']; ?>
><acronym style="cursor: hand;" OnClick="f_save_trash.click()"><?php echo $this->_config[0]['vars']['prf_save_to_trash']; ?>
 "<b><?php echo $this->_config[0]['vars']['trash_extended']; ?>
</b>"</acronym></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default colspan=2><input type=checkbox name=f_st_only_read onClick="return checkDis()" value="1"<?php echo $this->_tpl_vars['umSaveTrashOnlyRead']; ?>
><acronym style="cursor: hand;" OnClick="f_st_only_read.click()"><?php echo $this->_config[0]['vars']['prf_save_only_read']; ?>
 "<b><?php echo $this->_config[0]['vars']['trash_extended']; ?>
</b>"</acronym></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default colspan=2><input type=checkbox name=f_empty_on_exit value="1"<?php echo $this->_tpl_vars['umEmptyTrashOnExit']; ?>
><acronym style="cursor: hand;" OnClick="f_empty_on_exit.click()"><?php echo $this->_config[0]['vars']['prf_empty_on_exit']; ?>
</acronym></td>
				</tr>
				<tr>
					<td height="22" colspan=2  class=headers><b><?php echo $this->_config[0]['vars']['prf_sent_title']; ?>
</b></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default colspan=2><input type=checkbox name=f_save_sent value="1"<?php echo $this->_tpl_vars['umSaveSent']; ?>
><acronym style="cursor: hand;" OnClick="f_save_sent.click()"><?php echo $this->_config[0]['vars']['prf_save_sent']; ?>
 "<b><?php echo $this->_config[0]['vars']['sent_extended']; ?>
</b>"</acronym></td>
				</tr>
				<tr>
					<td  height="22" colspan=2  class=headers><b><?php echo $this->_config[0]['vars']['prf_messages_title']; ?>
</b></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default> &nbsp;<?php echo $this->_config[0]['vars']['prf_page_limit']; ?>
</td>
					<td class=default><?php echo $this->_tpl_vars['umRecordsPerPage']; ?>
</td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default> &nbsp;<?php echo $this->_config[0]['vars']['prf_time_to_refesh']; ?>
</td>
					<td class=default><?php echo $this->_tpl_vars['umTimeToRefresh']; ?>
</td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				

				<tr>
					<td colspan=2  class=default><input type=checkbox name=f_display_images value="1"<?php echo $this->_tpl_vars['umDisplayImages']; ?>
><acronym style="cursor: hand;" OnClick="f_display_images.click()"><?php echo $this->_config[0]['vars']['prf_display_images']; ?>
</acronym></td>
				</tr>

				<tr>
					<td  height="22" colspan=2  class=headers><b><?php echo $this->_config[0]['vars']['prf_signature_title']; ?>
</b></td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default valign=top> &nbsp;<?php echo $this->_config[0]['vars']['prf_signature']; ?>
</td>
					<td class=default><?php echo $this->_tpl_vars['umSignature']; ?>
</td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				<tr>
					<td class=default colspan=2><input type=checkbox name=f_add_sig value="1"<?php echo $this->_tpl_vars['umAddSignature']; ?>
><acronym style="cursor: hand;" OnClick="f_add_sig.click()"><?php echo $this->_config[0]['vars']['prf_auto_add_sign']; ?>
</acronym> </td>
				</tr>
				<tr>
					<td height="50" background="themes/hungi.mozilla/menu-bg.gif" ></td>
					<td height="50"  background="themes/hungi.mozilla/menu-bg.gif" ><br>
		<table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:document.form1.submit()"><?php echo $this->_config[0]['vars']['prf_save_button']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
		</table>
					
					
					</td>
				</tr>
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				
				</form>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
