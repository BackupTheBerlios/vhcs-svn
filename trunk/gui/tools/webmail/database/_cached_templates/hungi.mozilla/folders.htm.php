<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:27
         compiled from hungi.mozilla/folders.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'hungi.mozilla/folders.htm', 56, false),)); ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Folders", 'local'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>UebiMiau - <?php echo $this->_config[0]['vars']['folders_to']; ?>
 <?php echo $this->_tpl_vars['umUserEmail']; ?>
</title>
	<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
	<script language="JavaScript" src="themes/hungi.mozilla/webmail.js" type="text/javascript"></script>
	<?php echo $this->_tpl_vars['umJS']; ?>

</head>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

<table cellspacing=0 cellpadding=0 border=0 align=center width="100%" bgcolor="#DDE3EB">
	<tr>
		<td valign=top width="100%" align=center>
		
			<table  background="themes/hungi.mozilla/menu-bg.gif" cellspacing=1 cellpadding=3 width="100%" border=0>
			<tr height="54" align="center">
				<td > <a class="menu" href="javascript:goinbox()"><img src="themes/hungi.mozilla/inbox.gif" border=0></a><br>
				<a class="menu" href="javascript:goinbox()"><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:newmsg()"><img src="themes/hungi.mozilla/compose.gif" border=0></a><br>
				<a class="menu" href="javascript:newmsg()"><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:refreshlist()"><img src="themes/hungi.mozilla/refresh.gif" border=0></a><br>
				<a class="menu" href="javascript:refreshlist()"><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a></td>
				<td ><img src="themes/hungi.mozilla/folders.gif" border=0><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
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
				<td > <a class="menu" href="javascript:prefs()"><img src="themes/hungi.mozilla/preferences.gif" border=0></a><br>
				<a class="menu" href="javascript:prefs()"><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:goend()"><img src="themes/hungi.mozilla/logout.gif" border=0></a><br>
				<a class="menu" href="javascript:goend()"><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a></td>
			</tr></table>		
		</td></tr>
		<td valign=top>

			<table cellspacing=0 cellpadding=2 width="100%" border=0>
			<tr height="22">
			    <td width="30%" class="headers">.: <?php echo $this->_config[0]['vars']['fld_name_hea']; ?>
 :.</td>
			    <td width="20%" class="headers">.: <?php echo $this->_config[0]['vars']['fld_messages_hea']; ?>
 :.</td>
			    <td width="15%" class="headers">.: <?php echo $this->_config[0]['vars']['fld_size_hea']; ?>
 :.</td>
			    <td width="15%" class="headers">.: <?php echo $this->_config[0]['vars']['fld_empty_hea']; ?>
 :.</td>
			    <td width="20%" class="headers">.: <?php echo $this->_config[0]['vars']['fld_delete_hea']; ?>
 :.</td>
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
					<td class="default"><a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['chlink']; ?>
"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['name'], "html"); ?>
</a></td>
					<td class="cent"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['msgs']; ?>
</td>
					<td class="right"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['boxsize']; ?>
Kb &nbsp;</td>
					<td class="cent"><a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['emptylink']; ?>
">OK</a></td>
					<td class="cent"><?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['del']; ?>
</td>
				</tr>
				 <tr><td height="2" colspan="5" background="themes/hungi.mozilla/cellseparator.gif"></td></tr>
			<?php endfor; endif; ?>

			<tr>
				<td class="default">&nbsp;</td>
				<td class="right"><b><?php echo $this->_config[0]['vars']['fld_total']; ?>
</b> &nbsp;</td>
				<td class="right"><b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>Kb &nbsp;</td>
				<td class="cent">&nbsp;</td>
				<td class="cent">&nbsp;</td>
			</tr>

			<?php if ($this->_tpl_vars['umQuotaEnabled'] == 1): ?>
			<tr>
				<td class="cent" colspan=5>&nbsp; <?php echo $this->_config[0]['vars']['quota_usage_info']; ?>
: <?php echo $this->_config[0]['vars']['quota_usage_used']; ?>
 <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_of']; ?>
 <b><?php echo $this->_tpl_vars['umQuotaLimit']; ?>
</b>Kb <?php echo $this->_config[0]['vars']['quota_usage_avail']; ?>
<br> <img src="themes/hungi.mozilla/usage-start.gif" border=0><?php echo $this->_tpl_vars['umUsageGraph']; ?>
<img src="themes/hungi.mozilla/usage-end.gif" border=0></td>
			</tr>
			<?php endif; ?>
			<tr>
				<form name="form1" action="folders.php" method="POST" onsubmit="return create();">
				<input type=hidden name=sid value="<?php echo $this->_tpl_vars['umSid']; ?>
">
				<input type=hidden name=lid value="<?php echo $this->_tpl_vars['umLid']; ?>
">
				<input type=hidden name=tid value="<?php echo $this->_tpl_vars['umTid']; ?>
">
				<td class="default" colspan="5">

		<table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr><td><input type=Text name=newfolder value="" class="textbox"> &nbsp;</td>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:create()"><?php echo $this->_config[0]['vars']['fld_make_new']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
		</table><br>
				</td>
				</form>
			</tr>
			<tr><td colspan=5 class="headers" height="22">&nbsp;</td></tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
