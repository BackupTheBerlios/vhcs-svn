<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:28
         compiled from hungi.mozilla/messagelist.htm */ ?>
<?php $this->_load_plugins(array(
array('function', 'um_welcome_message', 'hungi.mozilla/messagelist.htm', 2, false),
array('modifier', 'escape', 'hungi.mozilla/messagelist.htm', 69, false),
array('modifier', 'default', 'hungi.mozilla/messagelist.htm', 69, false),
array('modifier', 'truncate', 'hungi.mozilla/messagelist.htm', 69, false),
array('modifier', 'date_format', 'hungi.mozilla/messagelist.htm', 75, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "MessageList", 'local'); ?>
<?php $this->_plugins['function']['um_welcome_message'][0](array('messages' => $this->_tpl_vars['umNumMessages'],'unread' => $this->_tpl_vars['umNumUnread'],'boxname' => $this->_tpl_vars['umBoxName'],'var' => "umWelcomeMessage"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>UebiMiau - <?php echo $this->_config[0]['vars']['messages_to']; ?>
 <?php echo $this->_tpl_vars['umUserEmail']; ?>
</title>
	<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
	<script language="JavaScript" src="themes/hungi.mozilla/webmail.js" type="text/javascript"></script>
	<?php echo $this->_tpl_vars['umJS']; ?>

</head>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

<table cellspacing=0 cellpadding=0 border=0 align=center bgcolor="#DDE3EB" width="100%">
	<tr>
		<td bgcolor="#FFFFFF" valign=top width="100%" align=center>
		<table background="themes/hungi.mozilla/menu-bg.gif" cellspacing=1 cellpadding=3 width="100%" height="54" border=0>
			<tr height="54" align="center">
				<td > <a class="menu" href="javascript:goinbox()"><img src="themes/hungi.mozilla/inbox.gif" border=0><br><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:newmsg()"><img src="themes/hungi.mozilla/compose.gif" border=0><br><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:refreshlist()"><img src="themes/hungi.mozilla/refresh.gif" border=0><br><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:folderlist()"><img src="themes/hungi.mozilla/folders.gif" border=0><br><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:search()"><img src="themes/hungi.mozilla/search.gif" border=0><br><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:addresses()"><img src="themes/hungi.mozilla/address.gif" border=0><br><?php echo $this->_config[0]['vars']['address_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:emptytrash()"><img src="themes/hungi.mozilla/trash.gif" border=0><br><?php echo $this->_config[0]['vars']['empty_trash_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:prefs()"><img src="themes/hungi.mozilla/preferences.gif" border=0><br><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:goend()"><img src="themes/hungi.mozilla/logout.gif" border=0><br><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a></td>
			</tr></table>		
		</td></tr>
		<td valign=top>
			<table cellspacing=0 cellpadding=1 width="100%" border=0 bgcolor="#DDE3EB">
			<?php if ($this->_tpl_vars['umNumMessages'] > 0): ?>
				<tr>
					<form name=form1 action=process.php method=post>
					<?php echo $this->_tpl_vars['umForms']; ?>

					<td colspan="7" class="default"> &nbsp;&nbsp;
					<?php echo $this->_tpl_vars['umWelcomeMessage']; ?>

					</td>
				</tr>
				<?php if ($this->_tpl_vars['umErrorMessage'] != ""): ?>
				<tr>
					<td colspan="7" class="default"><font color=red><b> &nbsp;&nbsp;<?php echo $this->_tpl_vars['umErrorMessage']; ?>
</b></font></td>
				</tr>
				<?php endif; ?>
	
				<tr>
				    <td width="5"  class="headers"><input type=checkbox name=chkall onclick="sel()"></td>
				    <td width="34"  class="headers"><img src="./images/prior_high.gif" width=5 height=11 border=0 alt="">&nbsp;<img src="images/attach.gif" border="0" width="6" height="14" alt="">&nbsp;<img src="images/msg_read.gif" border="0" width="14" height="14" alt=""></td>

					<?php if ($this->_tpl_vars['umFolder'] == "sent"): ?>
				    	<td width="210" class="headers">.: <b><a class="menu" href="javascript:sortby('toname')"><?php echo $this->_config[0]['vars']['to_hea']; ?>
<?php echo $this->_tpl_vars['umToArrow']; ?>
</a></b> :.</td>
					<?php else: ?>
				    	<td width="210" class="headers">.: <b><a class="menu" href="javascript:sortby('fromname')"><?php echo $this->_config[0]['vars']['from_hea']; ?>
<?php echo $this->_tpl_vars['umFromArrow']; ?>
</a></b> :.</td>
					<?php endif; ?>
				    <td class="headers">.: <b><a class="menu" href="javascript:sortby('subject')"><?php echo $this->_config[0]['vars']['subject_hea']; ?>
<?php echo $this->_tpl_vars['umSubjectArrow']; ?>
</a></b> :.</td>
				    <td width="100" class="headers">.: <b><a class="menu" href="javascript:sortby('date')"><?php echo $this->_config[0]['vars']['date_hea']; ?>
<?php echo $this->_tpl_vars['umDateArrow']; ?>
</a></b> :.</td>
				    <td width="100" class="headers">.: <b><a class="menu" href="javascript:sortby('size')"><?php echo $this->_config[0]['vars']['size_hea']; ?>
<?php echo $this->_tpl_vars['umSizeArrow']; ?>
</a></b> :.</td>
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
					<td class="default"><?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['checkbox']; ?>
</td>
					<td class="default"><?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['priorimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['attachimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['statusimg']; ?>
</td>


					<?php if ($this->_tpl_vars['umFolder'] == "sent"): ?>
						<td class="default"><acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['to'], "html"), $this->_config[0]['vars']['no_recipient_text']); ?>
"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['composelinksent']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['to'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b><?php endif; ?></acronym></td>
					<?php else: ?>
						<td class="default"><acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], "html"), $this->_config[0]['vars']['no_recipient_text']); ?>
"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['composelink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a></acronym><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b><?php endif; ?></td>
					<?php endif; ?>
					<td class="default"><acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], "html"), $this->_config[0]['vars']['no_subject_text']); ?>
"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b><?php endif; ?></acronym></td>

					<td class="cent"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['date'], $this->_config[0]['vars']['date_format']); ?>
</td>
					<td class="right"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['size']; ?>
Kb &nbsp;</td>
				</tr>
					<tr>
					<td height="2" colspan="7" background="themes/hungi.mozilla/cellseparator.gif"></td>
					</tr>
				<?php endfor; endif; ?>
				<tr>
					<td colspan="7" class="default">&nbsp; 
					<a class="menu" href="javascript:delemsg()"><?php echo $this->_config[0]['vars']['delete_selected_mnu']; ?>
</a> :: 
					<a class="menu" href="javascript:movemsg()"><?php echo $this->_config[0]['vars']['move_selected_mnu']; ?>
</a> 
					<select name="aval_folders">
						<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAvalFolders']) ? count($this->_tpl_vars['umAvalFolders']) : max(0, (int)$this->_tpl_vars['umAvalFolders']);
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
							<option value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAvalFolders'][$this->_sections['i']['index']]['path'], "html"); ?>
"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAvalFolders'][$this->_sections['i']['index']]['display'], "html"); ?>

						<?php endfor; endif; ?>
					</select>
					</td>
				</tr>
				<tr>
					<td colspan="7" class="default"> &nbsp;&nbsp;<?php if ($this->_tpl_vars['umPreviousLink']): ?><a href="<?php echo $this->_tpl_vars['umPreviousLink']; ?>
" class="navigation"><?php echo $this->_config[0]['vars']['previous_text']; ?>
</a> &nbsp;<?php endif; ?><?php echo $this->_tpl_vars['umNavBar']; ?>
<?php if ($this->_tpl_vars['umNextLink']): ?> &nbsp;<a href="<?php echo $this->_tpl_vars['umNextLink']; ?>
" class="navigation"><?php echo $this->_config[0]['vars']['next_text']; ?>
</a><?php endif; ?></td>
				</tr>
			
			<?php else: ?>		
				<tr>
					<td colspan="7" class="cent"><br> &nbsp;&nbsp;<?php echo $this->_config[0]['vars']['no_messages']; ?>
 <b><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBoxName'], "html"); ?>
</b><br><br></td>
				</tr>
			<?php endif; ?>
			</form>
			<?php if ($this->_tpl_vars['umQuotaEnabled'] == 1): ?>
			<tr>
				<td background="themes/hungi.mozilla/usage-bg.gif" height="32" class="cent" colspan=7>&nbsp; <?php echo $this->_config[0]['vars']['quota_usage_info']; ?>
: <?php echo $this->_config[0]['vars']['quota_usage_used']; ?>
 <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_of']; ?>
 <b><?php echo $this->_tpl_vars['umQuotaLimit']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_avail']; ?>
<br><img src="themes/hungi.mozilla/usage-start.gif" border=0><?php echo $this->_tpl_vars['umUsageGraph']; ?>
<img src="themes/hungi.mozilla/usage-end.gif" border=0></td>
			</tr>
			<?php endif; ?>
		</table>
		</td>

	</tr>

</table>
</body>
</html>
