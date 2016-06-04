<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from newpw.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'newpw.tpl', 33, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    Passwort ändern
</div>

<?php if ($this->_tpl_vars['passwordChanged'] == true): ?>
    <br /><p>&nbsp;<span class="okmsg">Das Passwort wurde geändert.</span></p>
    <p>&nbsp;Du kannst dich nun mit dem neuen Passwort <a href="login.php">anmelden</a>.</p>
<?php else: ?>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <tr>
            <td class="boldtext">Schritt 1</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Um ein neues Passwort einzugeben, musst du zunächst einen Sicherheits-Code anfordern. Dieser wird per E-Mail an dich gesendet.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <tr>
            <td>E-Mail-Adresse:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailrq'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <tr>
            <td width="150px">&nbsp;</td>
            <td>
        <input type="submit" name="rqcode" value="Anfordern" class="formbutton" onclick="submitbutton('rqcode')" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Die E-Mail-Adresse gehört zu keinem gültigen Benutzer.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailRequested'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="successmsg">Dir wurde eine E-Mail mit dem Sicherheits-Code zugesandt.<br />Falls du keine E-Mail sehen solltest, prüfe bitte ob sie im Spam-Ordner deines Postfachs einsortiert wurde.</span></td></tr>
        <?php elseif ($this->_tpl_vars['emailErrorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Der Sicherheitscode konnte wegen eines Fehlers nicht gesendet werden.</span></td></tr>
        <?php endif; ?>
        <tr><td class="spacer" colspan="2"></td></tr>
    </table>
</form>

<form action="newpw.php" method="post" style="display: inline;">
    <table class="table">
        <colgroup>
            <col width="150">
            <col>
        </colgroup>
        <tr>
            <td class="boldtext">Schritt 2</td>
        </tr>
        <tr>
            <td class="help" colspan="2">
                <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/hint.gif" border="0" width="15" height="11" align="middle" />
                Gib bitte deine E-Mail-Adresse, den Sicherheitscode und das neue Passwort ein. Der Sicherheitscode bleibt drei Tage gültig; danach musst du ihn ggf. erneut anfordern.
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>

        <?php if ($this->_tpl_vars['errorUnknown'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Ein unbekannter Fehler ist aufgetreten.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>E-Mail-Adresse:</td>
            <td>
                <input name="email" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['emailch'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input200" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['emailRqErrorNotFound'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Die E-Mail-Adresse gehört zu keinem gültigen Benutzer.</span></td></tr>
        <?php elseif ($this->_tpl_vars['notActiveError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Der angegebene Benutzer ist noch nicht aktiviert.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td>Sicherheitscode:</td>
            <td>
          <input name="code" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maglength="60" class="input100" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['codeErrorDate'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Der Sicherheitscode ist abgelaufen. Fordere bitte einen neuen an.</span></td></tr>
        <?php elseif ($this->_tpl_vars['codeError'] == true): ?>
            <tr><td width="150px">&nbsp;</td><td><span class="errormsg">Der Sicherheitscode stimmt nicht.</span></td></tr>
        <?php endif; ?>
        <tr>
            <td style="vertical-align:top">Neues Passwort:</td>
            <td>
                <input name="password1" type="password" value="" maxlength="60" class="input120" />
            </td>
        </tr>
        <?php if ($this->_tpl_vars['passwordError'] == true): ?>
            <tr><td></td><td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_passworderror.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
        <?php endif; ?>
        <tr>
            <td>Passwort&nbsp;wiederholen:</td>
            <td>
                <input name="password2" type="password" value="" maxlength="60" class="input120" />
                <?php if ($this->_tpl_vars['passwordNotMatch'] == true): ?>
                    &nbsp;<span class="errormsg">Die beiden Passwörter sind nicht identisch.</span>
                <?php endif; ?>
            </td>
        </tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr><td class="spacer" colspan="2"></td></tr>
        <tr>
            <td>&nbsp;</td>
            <td class="header-small" colspan="2">
                <!-- <input type="reset" name="cancel" value="Zurücksetzen" class="formbutton" onclick="flashbutton('cancel')" />&nbsp;&nbsp; -->
                <input type="submit" name="changepw" value="Ändern" class="formbutton" onclick="submitbutton('changepw')" />
            </td>
        </tr>
    </table>
</form>

<?php endif; ?>