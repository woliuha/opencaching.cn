<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from reportcache.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'reportcache.tpl', 8, false),array('modifier', 'nl2br', 'reportcache.tpl', 28, false),)), $this); ?>
<?php ob_start(); ?>
    <a href="viewcache.php?cacheid=<?php echo $this->_tpl_vars['cacheid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachename'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
<?php $this->_smarty_vars['capture']['cachelink'] = ob_get_contents(); ob_end_clean(); ?>

<?php if ($this->_tpl_vars['success'] == true): ?>
    <div class="content2-pagetitle">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />
        Meldebericht für <?php echo $this->_smarty_vars['capture']['cachelink']; ?>
 eingetragen
    </div>

    <table class="table">
        <tr>
            <td colspan="2">
                Grund: <?php echo ((is_array($_tmp=$this->_tpl_vars['reasontext'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>

        <tr><td colspan="2">Kommentar:</td></tr>
        <tr>
            <td colspan="2">
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['note'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </td>
        </tr>
    </table>
<?php else: ?>
    <form action="reportcache.php" method="post">
        <input type="hidden" name="cacheid" value="<?php echo $this->_tpl_vars['cacheid']; ?>
"/>

      <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/22x22-email.png" style="margin-right: 10px;" width="22" height="22" alt="" />
            <?php echo $this->_smarty_vars['capture']['cachelink']; ?>
 melden
        </div>

        <table class="table">
            <tr>
                <td colspan="2" class="info">
                    Bevor du einen Cache an das Opencaching-Team meldest, solltest du versuchen, Kontakt mit dem Owner aufzunehmen, um mögliche Probleme direkt untereinander zu klären. Davon ausgenommen sind Caches, die durch ihre Beschreibung oder das Versteck eine sofortige Archivierung notwendig machen.
                </td>
            </tr>
            <?php if ($this->_tpl_vars['help_reportreasons']): ?>
                <tr>
                    <td colspan="2" class="info">
                    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" class="icon16" alt="Info" />
                    <?php echo $this->_tpl_vars['help_reportreasons']; ?>
Gute und unpassende Gründe für eine Cachemeldung</a>
                </tr>
            <?php endif; ?>
            <tr>
                <td class="spacer" colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" class="info">
                    <?php echo $this->_tpl_vars['processing_reports']; ?>
 Meldungen sind in Bearbeitung, <?php echo $this->_tpl_vars['open_reports']; ?>
 Meldungen sind offen<?php if ($this->_tpl_vars['waitdays_min']): ?>;
                        Wartezeit für neue Meldungen: ca. <?php echo $this->_tpl_vars['waitdays_min']; ?>
&ndash;<?php echo $this->_tpl_vars['waitdays_max']; ?>
 Tage
                    <?php endif; ?>
                </td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2">Grund:&nbsp;
                    <select name="reason">
                        <option value="0" <?php if ($this->_tpl_vars['reason'] == 0): ?>selected="selected"<?php endif; ?>>-- Bitte auswählen --</option>
                        <?php $_from = $this->_tpl_vars['reasons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reasonItem']):
?>
                            <option value="<?php echo $this->_tpl_vars['reasonItem']['id']; ?>
" <?php if ($this->_tpl_vars['reason'] == $this->_tpl_vars['reasonItem']['id']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['reasonItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
                        <?php endforeach; else: ?>
                            <option value="1" class="input400">Standard</option>
                        <?php endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorReasonEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Es muss ein Grund angegeben werden!</td></tr>
            <?php endif; ?>

            <tr>
                <td colspan="2">Kommentar: (muss eingetragen werden)</td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea class="reports" name="note" cols="68" rows="15"><?php echo ((is_array($_tmp=$this->_tpl_vars['note'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
            <?php if ($this->_tpl_vars['errorNoteEmpty'] == true): ?>
                <tr><td colspan="2" class="errormsg">Es muss ein Kommentar eingetragen werden, um einen Geocache zu melden.</td></tr>
            <?php endif; ?>

            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['errorUnkown'] == true): ?>
                <tr><td colspan="2" class="errormsg">Ein Fehler ist aufgetreten und der Meldebericht konnte nicht erstellt werden.</td></tr>
            <?php endif; ?>

            <tr>
                <td class="header-small" colspan="2">
                    <!-- <input type="reset" name="cancel" value="Zurücksetzen" class="formbutton" onclick="flashbutton('cancel')" >&nbsp;&nbsp; -->
                    <input type="submit" name="ok" value="Senden" class="formbutton" onclick="submitbutton('ok')" />
                </td>
            </tr>
            <tr><td class="spacer" colspan="2"></td></tr>
        </table>
    </form>
<?php endif; ?>