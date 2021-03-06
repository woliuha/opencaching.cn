<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:38
         compiled from adminuser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'adminuser.tpl', 14, false),array('modifier', 'date_format', 'adminuser.tpl', 52, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Visualizza i dettagli dell'utente
</div>

<form method="post" action="adminuser.php">
    <input type="hidden" name="action" value="searchuser" />
        <p style="line-height: 1.6em;"><strong>Nome utento o indirizzo email:</strong> &nbsp;<input type="text" name="username" size="30" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></p>

        <?php if ($this->_tpl_vars['error'] == 'userunknown'): ?>
            <p style="line-height: 1.6em; color: red; font-weight: bold;">Nome utente sconosciuto</p>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['success'] == '1'): ?>
            <p style="line-height: 1.6em; color: green; font-weight: bold;">Lo stato dell\'utente è stato cambiato.</p>
        <?php endif; ?>

        <p style="line-height: 1.6em;"><input type="submit" name="find" value="Invia" class="formbutton" onclick="submitbutton('find')" /></p>

</form>

<?php if ($this->_tpl_vars['showdetails'] == true): ?>
    <form method="post" action="adminuser.php">
        <input type="hidden" name="action" value="formaction" />
        <input type="hidden" name="userid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

        <div class="content2-pagetitle">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />
            Dettagli utente
        </div>

        <table class="narrowtable">
            <tr>
                <td>Nome utente:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>Identificativo utente:</td>
                <td><a href="viewprofile.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><?php if ($this->_tpl_vars['user']['email_problems'] > 0): ?><span class="errormsg"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></td>
            </tr>
            <tr>
                <td>Data di creazione:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['date_created'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>Ultima modifica<span></span>:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_modified'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
            </tr>
            <tr>
                <td>Utenti attivi:</td>
                <td><?php if ($this->_tpl_vars['user']['is_active_flag']): ?>Si<?php else: ?>No<?php endif; ?>
                        <?php if ($this->_tpl_vars['user']['license_declined']): ?>&nbsp;(licenza dati rifiutata)<?php endif; ?></td>
            </tr>
            <tr>
                <td>Codice di attivazione:</td>
                <td>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['user']['activation_code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

                    <?php if ($this->_tpl_vars['user']['activation_code'] != ''): ?>
                        <a href="adminuser.php?action=sendcode&userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Code erneut senden</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['msg'] == 'sendcodecommit'): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><span class="errormsg">E' stata inviata una nuova email di attivazione.</class></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td>Nome:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['first_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Cognome:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Numero di log:</td>
                <td><?php echo $this->_tpl_vars['user']['logentries']; ?>

                    <?php if ($this->_tpl_vars['user']['deleted_logentries'] > 0): ?>&nbsp;(+ <?php echo $this->_tpl_vars['user']['deleted_logentries']; ?>
 cancellata / archiviata)<?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Totale nascoste:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Geocache attive:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['hidden_active'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &nbsp; &ndash; &nbsp; <a href="ownerlogs.php?userid=<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['user_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">Vedi log storico</a></td>
            </tr>
            <tr>
                <td>Segnalazioni cache<span></span>:</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['reports'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
            </tr>
            <tr>
                <td>Ultima autenticazione nota:</td>
                <td><?php if ($this->_tpl_vars['user']['last_known_login']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['last_known_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
<?php else: ?>sconosciuto<?php endif; ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>

            <tr><td class="spacer" colspan="2"></td></tr>

            <?php if ($this->_tpl_vars['licensefunctions'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisduelicense" value="1" /> Disabilita (e blocca tutte le geocache possedute) e rimuovi tutti i contenuti con licenza straniera</td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['candisable'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdisable" value="1" /> Disabilita (e chiudi tutte le cache possedute)</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['candelete'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkdelete" value="1" /> Cancella</td>
                </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="chkemail" value="1" /> Segna l\'indirizzo email come non valido<?php if ($this->_tpl_vars['licensefunctions']): ?>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="chkdl" value="1" /> mail di licenza dati non consegnata<?php endif; ?></td>
                </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['licensefunctions'] == true || $this->_tpl_vars['candelete'] == true || $this->_tpl_vars['candisable'] == true || $this->_tpl_vars['cansetemail'] == true): ?>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="checkbox" name="chkcommit" value="1" /> Sicuro?</td>
                </tr>
                <tr><td class="spacer" colspan="2"></td></tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="execute" value="Invia" class="formbutton" onclick="submitbutton('execute')" /></td>
                </tr>
            <?php endif; ?>
        </table>
    </form>
<?php endif; ?>