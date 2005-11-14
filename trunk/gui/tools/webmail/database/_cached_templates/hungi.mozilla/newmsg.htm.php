<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:01
         compiled from hungi.mozilla/newmsg.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'hungi.mozilla/newmsg.htm', 19, false),
array('modifier', 'truncate', 'hungi.mozilla/newmsg.htm', 93, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Newmessage", 'local'); ?>

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

<?php if ($this->_tpl_vars['umAdvancedEditor'] == 1): ?>
	<div id="hiddenCompose" style="position: absolute; left: 3; top: -100; visibility: hidden; z-index: 3">	      
	<form name="hiddencomposeForm">
	<textarea cols=76 rows=10 name="hiddencomposeFormTextArea"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
	</form>
	</div>
<?php endif; ?>

<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">

<table cellspacing=0 cellpadding=0 border=0 align=center  bgcolor="#DDE3EB" width="100%">
	<tr>
		<form name=composeForm method=post action="newmsg.php" onSubmit="return false;">
		<?php echo $this->_tpl_vars['umForms']; ?>


		<td valign=top width="100%" align=center>
		
			<table background="themes/hungi.mozilla/menu-bg.gif" cellspacing=1 cellpadding=3 width="100%" border=0>
			<tr align="center" height="54">
				<td > <a class="menu" href="javascript:goinbox()"><img src="themes/hungi.mozilla/inbox.gif" border=0></a><br>
				<a class="menu" href="javascript:goinbox()"><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a></td>
				<td ><img src="themes/hungi.mozilla/compose.gif" border=0><br>
				<a class="menu"><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
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
				<td > <a class="menu" href="javascript:prefs()"><img src="themes/hungi.mozilla/preferences.gif" border=0></a><br>
				<a class="menu" href="javascript:prefs()"><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a></td>
				<td > <a class="menu" href="javascript:goend()"><img src="themes/hungi.mozilla/logout.gif" border=0></a><br>
				<a class="menu" href="javascript:goend()"><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a></td>
			</tr></table>		
		</td></tr>

		<td valign=top>
			<table width="100%" border=0 cellspacing=0 cellpadding=0 bgcolor="#DDE3EB">
				<tr bgcolor="#DDE3EB">
					<td width="26%" height="18" class="headerright"><?php echo $this->_config[0]['vars']['to_hea']; ?>
 &nbsp;<a href="javascript:addrpopup()"><img src="images/bookmark_it.gif" width="15" height="12" border="0" alt="<!--%address_tip%-->"></a> &nbsp;</td>
					<td class="default">&nbsp;<?php echo $this->_tpl_vars['umTo']; ?>
</td>
				</tr>	
				<tr><td height="2"  colspan="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr bgcolor="#DDE3EB">
					<td height="18" class="headerright"><?php echo $this->_config[0]['vars']['cc_hea']; ?>
 &nbsp;<a href="javascript:addrpopup()"><img src="images/bookmark_it.gif" width="15" height="12" border="0" alt="<!--%address_tip%-->"></a> &nbsp;</td>
					<td class="default">&nbsp;<?php echo $this->_tpl_vars['umCc']; ?>
</td>
				</tr>
				<tr><td height="2"  colspan="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>	
				<tr bgcolor="#DDE3EB">
					<td height="18" class="headerright"><?php echo $this->_config[0]['vars']['bcc_hea']; ?>
 &nbsp;<a href="javascript:addrpopup()"><img src="images/bookmark_it.gif" width="15" height="12" border="0" alt="<!--%address_tip%-->"></a> &nbsp;</td>
					<td class="default">&nbsp;<?php echo $this->_tpl_vars['umBcc']; ?>
</td>
				</tr>	
				<tr><td height="2"  colspan="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr bgcolor="#DDE3EB">
					<td height="18" class="headerright"><?php echo $this->_config[0]['vars']['subject_hea']; ?>
 &nbsp;</td>
					<td class="default">&nbsp;<?php echo $this->_tpl_vars['umSubject']; ?>
</td>
				</tr>	
				<tr><td height="2"  colspan="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr bgcolor="#DDE3EB">
					<td height="18" class="headerright"><?php echo $this->_config[0]['vars']['attach_hea']; ?>
 &nbsp;</td>
					<td><table width="100%" border=0 cellspacing=0 cellpadding=0>
							<?php if ($this->_tpl_vars['umHaveAttachs'] == 1): ?>
								<tr>
									<td  height="22"  width="45%" class="headers"><?php echo $this->_config[0]['vars']['attch_name_hea']; ?>
</td>
									<td width="15%" class="headerright2"><?php echo $this->_config[0]['vars']['attch_size']; ?>
 &nbsp;</td>
									<td width="30%" class="headers"><?php echo $this->_config[0]['vars']['attch_type_hea']; ?>
</td>
									<td width="10%" class="headers"><?php echo $this->_config[0]['vars']['attch_dele_hea']; ?>
</td>
								</tr>
	
								<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAttachList']) ? count($this->_tpl_vars['umAttachList']) : max(0, (int)$this->_tpl_vars['umAttachList']);
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
										<td width="50%" class="default"> &nbsp;<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['name'], "html"); ?>
</td>
										<td width="10%" class="right"><?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['size']; ?>
Kb&nbsp;</td>
										<td width="30%" class="default"> &nbsp;<?php echo $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['type'], 23, "...", true); ?>
</td>
										<td width="10%" class="default"> &nbsp;<a href="<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['link']; ?>
">OK</a></td>
									</tr>
								<?php endfor; endif; ?>
							<?php else: ?>							
								<tr>
									<td><img src="themes/hungi.mozilla/header-bg-left.gif" border="0"></td><td  height="22" width="100%" class="headers"> &nbsp;<?php echo $this->_config[0]['vars']['attch_no_hea']; ?>
</td><td><img src="themes/hungi.mozilla/header-bg-right.gif" border="0"></td>
								</tr>
							<?php endif; ?>
							<tr><td height="2" colspan="4" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
						</table>
						<table width="100%" border=0 cellspacing=1 cellpadding=0>
						
				
							<tr>
								<td width="100%" class="default"> &nbsp;<a href="javascript:upwin()" class="navigation"><?php echo $this->_config[0]['vars']['attch_add_new']; ?>
</a></td>
							</tr>
							
				
						</table>
					</td>
				</tr>	
				<tr><td colspan="2" height="2" background="themes/hungi.mozilla/cellseparator.gif" ></td></tr>
				<tr>
					<td class="headerright">&nbsp;</td>
					<td class="default">
					<?php if ($this->_tpl_vars['umAdvancedEditor'] == 1): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include("uebimiau/advanced-editor.htm", array());
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<div id="hiddenCompose2" style="position: absolute; left: 3; top: -100; visibility: hidden; z-index: 3">	      
							<textarea cols=76 rows=10 name=body><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
						</div>
					<?php else: ?>
						<textarea cols=76 rows=10 name=body><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
					<?php endif; ?>

					</td>
				</tr>

				

				<?php if (!$umAddSignature && $this->_tpl_vars['umHaveSignature']): ?>
				<tr>
					<td  class="headerright"><?php echo $this->_config[0]['vars']['add_signature']; ?>
 &nbsp;</td>
					<td class="default"><input type=checkbox name=cksig onClick="return addsig()"<?php if ($this->_tpl_vars['umAddSignature'] == 1): ?> checked disabled<?php endif; ?>></td>
				</tr>
				<?php endif; ?>

				<tr>
					<td  class="headerright"><?php echo $this->_config[0]['vars']['priority_text']; ?>
 &nbsp;</td>
					<td class="default">
						<select name="priority">
							<option value="1"<?php if ($this->_tpl_vars['umPriority'] == 1): ?> selected<?php endif; ?>><?php echo $this->_config[0]['vars']['priority_high']; ?>

							<option value="3"<?php if ($this->_tpl_vars['umPriority'] == 3): ?> selected<?php endif; ?>><?php echo $this->_config[0]['vars']['priority_normal']; ?>

							<option value="5"<?php if ($this->_tpl_vars['umPriority'] == 5): ?> selected<?php endif; ?>><?php echo $this->_config[0]['vars']['priority_low']; ?>

						</select>
					</td>
				</tr>

				<tr>
					
					<td colspan="2" height="33" background="themes/hungi.mozilla/usage-bg.gif" class="default"><center>
					<center>
		<table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:enviar()" ><?php echo $this->_config[0]['vars']['send_text']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
		</table></center>
					
					</td>
				</tr>	
			</table>
		</td>
		</form>
	</tr>
</table>

</body>
</html> 