<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:42
         compiled from oconly81.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'oconly81.tpl', 23, false),)), $this); ?>
<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/misc/is_oconly_small.png" style="margin-right: 10px;" />
    OConly-81
</div>

<div class="content-txtbox-noshade" style="padding-right: 25px;">
    <p class="article">
        <b>OConly-81</b> is a new challenge about finding OConly caches under varying conditions, i.e. with different difficulty and terrain ratings. To participate, you can enable the OConly-81 statistics in your <a href="mydetails.php">user profile settings</a>.<br />
    </p>

    <div class="buffer" style="width: 500px;">&nbsp;</div>

    <div class="content2-container bg-blue02">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x22-profile.png" style="margin-right: 10px;" width="32" height="22"  />
            Participants
            <?php if (! $this->_tpl_vars['showall'] && ( count($this->_tpl_vars['users']) > $this->_tpl_vars['default_maxusers'] )): ?>
                &nbsp; <span class="content-title-link">[<a href="oconly81.php?showall=1">Show all</a>]</span>
            <?php endif; ?>
        </p>
    </div>

    <p>
        Users with OConly-81 statistics:
    </p>

    <ul class="col4">
        <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n'] => $this->_tpl_vars['user']):
?>
            <?php if ($this->_tpl_vars['showall'] || ( $this->_tpl_vars['n'] < $this->_tpl_vars['default_maxusers'] )): ?>
                <li>
                    <a href="viewprofile.php?userid=<?php echo $this->_tpl_vars['user']['user_id']; ?>
#oconly81"><?php echo $this->_tpl_vars['user']['username']; ?>
</a> (<?php echo $this->_tpl_vars['user']['count']; ?>
)
                </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </ul>

    <div class="buffer" style="width: 500px;">&nbsp;</div>

    <div class="content2-container bg-blue02">
        <p class="content-title-noshade-size2">
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cacheicon/22x20-traditional.png" style="margin-right: 10px;" width="22" height="20"  />
            Statistics
        </p>
    </div>

    <p>
        Overall terrain and difficulty distribution of active OConly caches:
    </p>

    <table class="table">
        <tr>
            <td width="1%">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_oconly81.tpl", 'smarty_include_vars' => array('userid' => $this->_tpl_vars['userid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <tr>
            <td class="spacer">&nbsp;</td>
        </tr>
    </table>

</div>