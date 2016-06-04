<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:49
         compiled from viewprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'viewprofile.tpl', 37, false),array('modifier', 'date_format', 'viewprofile.tpl', 43, false),array('modifier', 'nl2br', 'viewprofile.tpl', 74, false),array('modifier', 'count', 'viewprofile.tpl', 185, false),)), $this); ?>
<script type="text/javascript" src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/js/wz_tooltip.js"></script>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-home.png" style="margin-right: 10px;" width="32" height="32" />
    Profil de l'utilisateur de <?php echo $this->_tpl_vars['username']; ?>

</div>

<div class="default" style="text-align: right;padding-right: 22px;">
    <a href="mailto.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/16x16-email.png" width="16" height="16" border="0" alt="Envoyer un e-mail" align="middle" /></a>&nbsp;
    [<a href="mailto.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
">Envoyer un e-mail</a>]
</div>

<div class="buffer" style="width: 500px;">&nbsp;</div>

<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size2">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x22-profile.png" style="margin-right: 10px;" width="32" height="22"  />
        Les données de l'utilisateur
    </p>
</div>

<table class="table">
    <tr><td class="spacer" colspan="2"></td></tr>

    <?php if ($this->_tpl_vars['showcountry'] == true): ?>
        <tr>
            <td><b>Pays&nbsp;:</b></td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
        </tr>
    <?php endif; ?>

    <tr>
        <td><b>Enregistré&nbsp;depuis&nbsp;:</b></td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['registered'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['opt']['format']['date']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['opt']['format']['date'])); ?>
</td>
    </tr>
    <tr>
        <td style="vertical-align:top"><b>Dernière&nbsp;connexion&nbsp;:</b></td>
        <?php if ($this->_tpl_vars['lastlogin'] == 1): ?>
            <td>Dans le dernier mois</td>
        <?php elseif ($this->_tpl_vars['lastlogin'] == 2): ?>
            <td>Entre 1 et 6 mois</td>
        <?php elseif ($this->_tpl_vars['lastlogin'] == 3): ?>
            <td>Entre 6 et 12 mois</td>
        <?php elseif ($this->_tpl_vars['lastlogin'] == 4): ?>
            <td>Entre 1 et 2 ans</td>
        <?php elseif ($this->_tpl_vars['lastlogin'] == 5): ?>
            <td>Il y a plus de 2 ans</td>
        <?php elseif ($this->_tpl_vars['lastlogin'] == 7): ?>
            <?php if ($this->_tpl_vars['license_actively_declined']): ?>
                <td>Le compte d'utilisateur a été désactivé parce que l'utilisateur a refusé la <a href="articles.php?page=impressum#datalicense">licence de données</a>. Des descriptions de cache, des textes de journaux et des photos ont été supprimés.</td>
            <?php elseif ($this->_tpl_vars['license_passively_declined']): ?>
                <td>Le compte d'utilisateur a été désactivé. Des descriptions de cache, des textes de log et des images ont été supprimés parce que le compte a été désactivé avant la transition à la nouvelle <a href="articles.php?page=impressum#datalicense"> nouvelle licence de données</a>.</td>
            <?php else: ?>
                <td>Le compte d'utilisateur a été désactivé.</td>
            <?php endif; ?>
        <?php else: ?>
            <td>unknown</td>
        <?php endif; ?>
    </tr>

    <?php $_from = $this->_tpl_vars['useroptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['optionItem']):
?>
        <tr>
            <?php if ($this->_tpl_vars['optionItem']['option_id'] != 3): ?>
                <td style="vertical-align:top;"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['optionItem']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&nbsp;:</b></td>
                <td style="vertical-align:top;"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['optionItem']['option_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
            <?php endif; ?>
        </tr>
    <?php endforeach; endif; unset($_from); ?>

    <?php if ($this->_tpl_vars['pmr'] == 1): ?>
        <tr>
            <td style="vertical-align:top;"><b>Autres&nbsp;:</b></td>
            <td>
                Je prends une talkie-walkie PMR sur le canal 2 avec moi.<br />
            </td>
        </tr>
    <?php endif; ?>

    <tr><td><td class="spacer"></td></tr>
</table>

<?php if ($this->_tpl_vars['description'] != ""): ?>
    <div class="content2-container bg-blue02" style="height:0px"></div>
    <div class="content2-container table-like-font">
        <div style="margin-left:6px">
            <?php echo $this->_tpl_vars['description']; ?>

        </div>
    </div>
<?php endif; ?>
<div>&nbsp;</div>

<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size2">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/20x20-3.png" style="margin-right: 10px;" />
        Statistiques de l'utilisateur
    </p>
</div>

<table class="table">
    <tr><td class="spacer" colspan="2"></td></tr>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_userstats.tpl", 'smarty_include_vars' => array('oconly' => false,'hidden' => $this->_tpl_vars['hidden'],'hidden_active' => $this->_tpl_vars['active'],'hidden_by_cachetype' => $this->_tpl_vars['userstatshidden'],'found' => $this->_tpl_vars['founds'],'found_by_cachetype' => $this->_tpl_vars['userstatsfound'],'dnf' => $this->_tpl_vars['notfound'],'notes' => $this->_tpl_vars['note'],'maintainence' => $this->_tpl_vars['maintenance'],'recommended' => $this->_tpl_vars['recommended'],'maxrecommended' => $this->_tpl_vars['maxrecommended'],'logpics' => $this->_tpl_vars['logpics'],'regionstat' => $this->_tpl_vars['regionstat'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <tr><td class="spacer">&nbsp;</td></tr>
</table>

<div class="content2-container bg-blue02">
    <p class="content-title-noshade-size2">
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/40x22-oconly.png" style="margin-right: 10px;" />
        Statistiques OConly
    </p>
</div>

<table class="table">
    <tr><td class="spacer" colspan="2"></td></tr>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_userstats.tpl", 'smarty_include_vars' => array('oconly' => true,'hidden' => $this->_tpl_vars['oconly_hidden'],'hidden_active' => $this->_tpl_vars['oconly_hidden_active'],'hidden_by_cachetype' => $this->_tpl_vars['oconly_userstatshidden'],'found' => $this->_tpl_vars['oconly_found'],'found_by_cachetype' => $this->_tpl_vars['oconly_userstatsfound'],'dnf' => $this->_tpl_vars['oconly_dnf'],'notes' => $this->_tpl_vars['oconly_note'],'maintainence' => $this->_tpl_vars['oconly_maint'],'recommended' => $this->_tpl_vars['oconly_recommended'],'maxrecommended' => null,'logpics' => $this->_tpl_vars['oconly_logpics'],'regionstat' => $this->_tpl_vars['oconly_regionstat'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['show_oconly81']): ?>
        <tr><td class="spacer"></td></tr>
        <tr><td class="spacer"></td></tr>
        <tr id="oconly81">
            <td colspan="3">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly81.tpl", 'smarty_include_vars' => array('userid' => $this->_tpl_vars['userid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td valign="middle" class="header-small" style="white-space:nowrap" width="1%">
                <img src="resource2/ocstyle/images/log/16x16-found.png" style="padding-right:2px"  />
                &nbsp;<b>OConly-81 Statistiques&nbsp;:</b>
            </td>
            <td valign="middle">
                inactif (<a href="oconly81.php">Infos</a>)
            </td>
        </tr>
        <tr><td class="spacer"></td></tr>
        <tr><td class="spacer"></td></tr>
    <?php endif; ?>
    <tr><td class="spacer"></td></tr>
    <tr><td class="spacer"></td></tr>

</table>


<?php if (count($this->_tpl_vars['cachelists'])): ?>
    <div class="content2-container bg-blue02" id="cachelists">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/32x32-list.png" style="margin-right: 10px; height:22px" />
        Listes de cache
        </p>
    </div>
    <p>
        <ul class="default">
            <?php $_from = $this->_tpl_vars['cachelists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cachelist']):
?>
                <li>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_cachelist_link.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> &nbsp;
                    <?php if ($this->_tpl_vars['login']['userid']): ?>[<a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['userid']; ?>
&<?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>dont<?php endif; ?>watchlist=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
&dummy=<?php echo $this->_tpl_vars['tdummy']; ?>
#eocl"><?php if ($this->_tpl_vars['cachelist']['watched_by_me']): ?>ne regarde pas<?php else: ?>regarder<?php endif; ?></a>]<?php endif; ?>
                </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
        <br id="eocl" />
    </p>
<?php endif; ?>