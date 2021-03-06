<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from query.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'query.tpl', 22, false),array('modifier', 'escape', 'query.tpl', 24, false),array('modifier', 'count', 'query.tpl', 38, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] == 'view'): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-search.png" style="margin-right: 10px;" width="32" height="32" />
        Stored queries
    </div>

    <table class="null" border="0" cellspacing="0" width="98%">
        <tr>
            <td>
                <table class="table" style="width:100%">
                    <tr>
                        <th class="header-small" width="30%">Name</th>
                        <th class="header-small" width="20%" colspan="2">Download</th>
                    </tr>
                    <?php $_from = $this->_tpl_vars['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['queriesItem']):
?>
                        <?php echo smarty_function_cycle(array('assign' => 'listcolor','values' => "listcolor1,listcolor2"), $this);?>

                        <tr>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['queriesItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><nobr>
                                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&output=gpx&count=max&zip=1">GPX</a>
                                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&output=loc&count=max&zip=1">LOC</a>
                                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&output=kml&count=max&zip=1">KML</a>
                                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&output=ov2&count=max&zip=1">OV2</a>
                                <a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&output=ovl&count=max&zip=1">OVL</a>
                                </nobr>
                            </td>
                            <td class="<?php echo $this->_tpl_vars['listcolor']; ?>
"><span style="float: right;"><nobr>[<a href="search.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&showresult=0">edit</a>] [<a href="javascript:if(confirm('Do you really want to delete the saved search?'))location.href='query.php?queryid=<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
&action=delete'">delete</a>]</span></nobr></td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr><td colspan="2"><br />No stored queries found</td></tr>
                    <?php endif; unset($_from); ?>
                    <?php if (count($this->_tpl_vars['queries']) > 0): ?>
                        <tr><td class="spacer">&nbsp;</td></tr>
                        <tr>
                            <td class="help" colspan=3">By downloading you accept the Opencaching.de <a href="articles.php?page=impressum#tos">terms of use</a>.</td>
                        </tr>
                    <?php endif; ?>
                </table>
            </td>
        </tr>
    </table>

<?php elseif ($this->_tpl_vars['action'] == 'save'): ?>

    <form action="query.php" method="post">
        <input type="hidden" name="action" value="save" />
        <input type="hidden" name="queryid" value="<?php echo $this->_tpl_vars['queryid']; ?>
" />
        <input type="hidden" name="sortby" value="<?php echo $this->_tpl_vars['sortby']; ?>
" />
        <input type="hidden" name="sortorder" value="<?php echo $this->_tpl_vars['sortorder']; ?>
" />
        <input type="hidden" name="creationdate" value="<?php echo $this->_tpl_vars['creationdate']; ?>
" />
        <input type="hidden" name="submit" value="1" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-search.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Store query
        </div>

        <table class="table">
            <tr>
                <td class="header-small" colspan="2">Store options as a new search</td>
            </tr>
            <tr>
                <td>Name of the search:</td>
                <td>
                    <input type="text" name="queryname" class="input300" maxlength="60" value="<?php echo $this->_tpl_vars['queryname']; ?>
" />
                </td>
            </tr>
            <?php if ($this->_tpl_vars['errorEmptyName'] == true): ?>
                <tr><td colspan="2"><span class="errormsg">You have to enter a name for this search.</span></td></tr>
            <?php elseif ($this->_tpl_vars['errorNameExists'] == true): ?>
                <tr><td colspan="2" class="errormsg">A search with this name already exists.</td></tr>
            <?php endif; ?>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="savenew" value="Store" class="formbutton" onclick="submitbutton('savenew')" />
                </td>
            </tr>
        </table>
    </form>

    <p>&nbsp;</p>

    <form action="query.php" method="post">
        <input type="hidden" name="action" value="saveas" />
        <input type="hidden" name="queryid" value="<?php echo $this->_tpl_vars['queryid']; ?>
" />
        <input type="hidden" name="sortby" value="<?php echo $this->_tpl_vars['sortby']; ?>
" />
        <input type="hidden" name="sortorder" value="<?php echo $this->_tpl_vars['sortorder']; ?>
" />
        <input type="hidden" name="creationdate" value="<?php echo $this->_tpl_vars['creationdate']; ?>
" />
        <input type="hidden" name="submit" value="1" />
        <table class="table">
            <tr>
                <td class="header-small" colspan="2">Overwrite old search options</td>
            </tr>
            <tr>
                <td>Name of the search:</td>
                <td>
                    <select name="oldqueryid" class="input350">
                        <?php $_from = $this->_tpl_vars['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['queries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['queries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['queriesItem']):
        $this->_foreach['queries']['iteration']++;
?>
                            <?php if (($this->_foreach['queries']['iteration'] <= 1)): ?>
                                <option value="0" selected="selected">-- Select search to overwrite --</option>
                            <?php endif; ?>
                            <option value="<?php echo $this->_tpl_vars['queriesItem']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['queriesItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; else: ?>
                            <option value="0">-- no stored search found --</option>
                        <?php endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['errorMustSelectQuery'] == true): ?>
                <tr><td colspan="2" class="errormsg">You must select a search to overwrite.</td></tr>
            <?php endif; ?>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="overwrite" value="Store" class="formbutton" onclick="submitbutton('overwrite')" />
                </td>
            </tr>
        </table>
    </form>
<?php endif; ?>