<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from search_selectlocid.tpl */ ?>

<div class="content2-pagetitle"><img src="resource2/ocstyle/images/cacheicon/traditional.gif" style="margin-right: 10px;" width="32" height="32" alt="" />Ortsauswahl - Insgesamt <?php echo $this->_tpl_vars['resultscount']; ?>
 Ortschaften gefunden</div>


<p>Für das Suchkriterium wurde kein eindeutiges Ergebnis gefunden. Bitte wähle die gewünschte Ortschaft aus:</p>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr><td colspan="2" style="height:4px"></td></tr>
    <tr><td colspan="2"><p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p></td></tr>
    <tr><td>&nbsp;</td></td></tr>
    <?php echo $this->_tpl_vars['locations']; ?>

    <tr><td colspan="2" style="height:8px"></td></tr>
    <tr><td colspan="2"><p><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></p></td></tr>
    <tr><td>&nbsp;</td></td></tr>
</table>