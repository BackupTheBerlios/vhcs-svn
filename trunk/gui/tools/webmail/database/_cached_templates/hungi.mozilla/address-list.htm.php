<?php /* Smarty version 2.3.1, created on 2005-10-13 02:31:24
         compiled from hungi.mozilla/address-list.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "AddressBook", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title>UebiMiau - <?php echo $this->_config[0]['vars']['adr_title']; ?>
</title>
</head>
<link rel="stylesheet" href="themes/hungi.mozilla/webmail.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
<script language="JavaScript" src="themes/hungi.mozilla/webmail.js" type="text/javascript"></script>

<?php echo $this->_tpl_vars['umJS']; ?>


<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 bgcolor="#778899" text="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">


<table cellspacing=0 cellpadding=0 border=0 align=center width="100%" bgcolor="#DDE3EB">
        <tr>
		<td valign=top width="100%" align=center>

			<table background="themes/hungi.mozilla/menu-bg.gif" cellspacing=0 cellpadding=0 width="100%" border=0 >
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
                        <table width="100%" border="0" cellspacing="0" cellpadding="2" bgcolor="#DDE3EB">
                                <tr height="22">
                                        <td width="40%" class="headers"><?php echo $this->_config[0]['vars']['adr_name_hea']; ?>
</td>
                                        <td width="40%" class="headers"><?php echo $this->_config[0]['vars']['adr_email_hea']; ?>
</td>
                                        <td width="10%" class="headers"><?php echo $this->_config[0]['vars']['adr_edit_hea']; ?>
</td>
<!---
                                         <td width="10%" class="headers"><?php echo $this->_config[0]['vars']['adr_expo_hea']; ?>
</td>
--->
                                        <td width="10%" class="headers"><?php echo $this->_config[0]['vars']['adr_dele_hea']; ?>
</td>
                                </tr>
                                <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAddressList']) ? count($this->_tpl_vars['umAddressList']) : max(0, (int)$this->_tpl_vars['umAddressList']);
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
                                        <td class="default"> &nbsp;<a class="menu" href="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['viewlink']; ?>
"><?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['name']; ?>
</a></td>
                                        <td class="default"> &nbsp;<a class="menu" href="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['composelink']; ?>
"><?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['email']; ?>
</a></td>
                                        <td class="default"> &nbsp;<a class="menu" href="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['editlink']; ?>
">OK</a></td>
<!---
                                        <td class="default"> &nbsp;<a class="menu" href="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['exportlink']; ?>
">OK</a></td>
--->
                                        <td class="default"> &nbsp;<a class="menu" href="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['dellink']; ?>
">OK</a></td>
                                </tr>
                                <tr><td height="2" colspan="4" background="themes/hungi.mozilla/cellseparator.gif"></td></tr>
                                <?php endfor; endif; ?>
                                <tr><td colspan="4" height="54" background="themes/hungi.mozilla/menu-bg.gif" valign="middle" align="center"><form>
                <table height="22" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    		<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-left.gif" >&nbsp;</td>
	  	<td valign="middle" height="22"  background="themes/hungi.mozilla/loginbutton-mid.gif"><a class="login" href="javascript:location = '<?php echo $this->_tpl_vars['umNew']; ?>
'"><?php echo $this->_config[0]['vars']['adr_new_entry']; ?>
</A></td>
	  	<td valign="middle" width="9" height="22"  background="themes/hungi.mozilla/loginbutton-right.gif" >&nbsp;</td>
    		</tr>
		</table></td></form></tr>
                        </table>

                </td>
        </tr>
</table>



</body>
</html>