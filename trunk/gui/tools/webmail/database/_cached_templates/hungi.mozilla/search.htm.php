<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:21
         compiled from hungi.mozilla/search.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'hungi.mozilla/search.htm', 58, false),
array('modifier', 'truncate', 'hungi.mozilla/search.htm', 94, false),
array('modifier', 'default', 'hungi.mozilla/search.htm', 94, false),
array('modifier', 'date_format', 'hungi.mozilla/search.htm', 96, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Search", 'local'); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>UebiMiau</title>

<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
<script language="JavaScript" src="themes/hungi.mozilla/webmail.js" type="text/javascript"></script>


<?php echo $this->_tpl_vars['umJS']; ?>


</head>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

<table cellspacing=0 cellpadding=0 border=0 align=center  bgcolor="#DDE3EB" width="100%">
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
				<td ><img src="themes/hungi.mozilla/refresh.gif" border=0><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:folderlist()"><img src="themes/hungi.mozilla/folders.gif" border=0></a><br>
				<a class="menu" href="javascript:folderlist()"><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a></td>
				<td ><img src="themes/hungi.mozilla/search.gif" border=0><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['search_mnu']; ?>
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
			<table cellspacing=0 cellpadding=2 width="100%" border=0 bgcolor="#DDE3EB">
			<tr>
				<td class="default" colspan="5"> <?php echo $this->_config[0]['vars']['sch_information_text']; ?>

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
					<table cellspacing=0 cellpadding=2 width="100%" border=0 >
						<tr>
							<td class="right" width="20%"><?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
: &nbsp;<td colspan="4" class="default"><input type=text name=srcFrom value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputFrom'], "html"); ?>
" class="textbox" size="40" maxlength="40"></td>
						<tr>
							<td class="right"><?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
: &nbsp;<td colspan="4" class="default"><input type=text name=srcSubject value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputSubject'], "html"); ?>
" class="textbox" size="40" maxlength="40"></td>
						<tr>
							<td class="right"><?php echo $this->_config[0]['vars']['sch_body_hea']; ?>
: &nbsp;<td colspan="4" class="default"><input type=text name=srcBody value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputBody'], "html"); ?>
" class="textbox" size="40" maxlength="40"></td>
						<tr>
							<td class="default">&nbsp;<td colspan="4" class="default">
							
							
							<table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:document.form1.submit()"><?php echo $this->_config[0]['vars']['sch_button_text']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
		</table>
							</td>
					</table>			
	
				</td>
				</form>
			<tr>
				<td colspan="5">&nbsp;</td>

			<?php if ($this->_tpl_vars['umDoSearch']): ?>

				<tr height="22">
				    <td width="35"  class="headers"><img src="./images/prior_high.gif" width=5 height=11 border=0 alt="">&nbsp;<img src="images/attach.gif" border="0" width="6" height="14" alt="">&nbsp;<img src="images/msg_read.gif" border="0" width="14" height="14" alt=""></td>
				    <td width="200" class="headers">.: <b><?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
</b> :.</td>
			    	<td  class="headers">.: <b><?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
</b> :.</td>
				    <td width="90" class="headers">.: <b><?php echo $this->_config[0]['vars']['sch_date_hea']; ?>
</b> :.</td>
				    <td width="140" class="headers">.: <b><?php echo $this->_config[0]['vars']['sch_folder_hea']; ?>
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
					<td class="default"><?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['priorimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['attachimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['statusimg']; ?>
</td>
					<td class="default"><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?><b><?php endif; ?><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a><?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b><?php endif; ?></td>
					<td class="default"><a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['composelink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], 30, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a></td>
					<td class="cent"><?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['date'], $this->_config[0]['vars']['date_format']); ?>
</td>
					<td class="default">&nbsp;<a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['folderlink']; ?>
"><?php echo $this->_tpl_vars['umBoxName']; ?>
</a></td>
				</tr>
				<tr><td height="2" colspan="5" background="themes/hungi.mozilla/cellseparator.gif"></td></tr>
				<?php endfor; else: ?>
				<tr>
				    <td width="100%"  class="default"  colspan="5"><center><br><?php echo $this->_config[0]['vars']['sch_no_results']; ?>
<br><br></center></td>
				</tr>
				<?php endif; ?>
			<?php endif; ?>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
