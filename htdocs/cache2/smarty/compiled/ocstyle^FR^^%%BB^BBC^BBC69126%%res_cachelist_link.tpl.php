<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachelist_link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'res_cachelist_link.tpl', 7, false),array('modifier', 'stripcrlf', 'res_cachelist_link.tpl', 7, false),array('modifier', 'escapejs', 'res_cachelist_link.tpl', 7, false),)), $this); ?>

<a href="cachelist.php?id=<?php echo $this->_tpl_vars['cachelist']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['cachelist']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['cachelist']['description_for_display']): ?><span onmouseover="Tip('<div class=\'cachelist-tooltip\'><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['cachelist']['description'])) ? $this->_run_mod_handler('stripcrlf', true, $_tmp) : smarty_modifier_stripcrlf($_tmp)))) ? $this->_run_mod_handler('escapejs', true, $_tmp) : smarty_modifier_escapejs($_tmp)); ?>
</div>', BGCOLOR, '#FFFFFF', BORDERCOLOR, '#707070', CLICKCLOSE, true, DELAY, 0, FADEIN, false, FADEOUT, false)" onmouseout="UnTip()"> <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-info.png" /></span><?php endif; ?><?php if ($this->_tpl_vars['show_bookmarks'] && $this->_tpl_vars['cachelist']['bookmarked']): ?><a href="mylists.php#bookmarks"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/cache-rate.png" title="Je l'ai signet cette liste." style="padding-left:<?php if ($this->_tpl_vars['cachelist']['description_for_display']): ?>2px<?php else: ?>4px<?php endif; ?>" /></a><?php endif; ?><?php if (! $this->_tpl_vars['disable_listwatchicon'] && $this->_tpl_vars['cachelist']['watched_by_me']): ?><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/viewcache/16x16-watch.png" title="Je regarde cette liste." style="padding-left:<?php if ($this->_tpl_vars['cachelist']['description_for_display'] || ( $this->_tpl_vars['markprivlists'] && $this->_tpl_vars['cachelist']['visibility'] == 2 )): ?>3px<?php else: ?>0.4em<?php endif; ?>; padding-right:2px" /><?php endif; ?>