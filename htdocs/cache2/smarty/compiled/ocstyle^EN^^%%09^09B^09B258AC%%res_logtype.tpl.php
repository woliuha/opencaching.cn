<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logtype.tpl */ ?>
<?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['type'] == 1): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-found.png" alt="Found" title="Found"  />'; ?><?php elseif ($this->_tpl_vars['type'] == 2): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-dnf.png" alt="Not found" title="Not found" />'; ?><?php elseif ($this->_tpl_vars['type'] == 3): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-note.png" alt="Note" title="Note" />'; ?><?php elseif ($this->_tpl_vars['type'] == 7): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-attended.png" alt="Attended" title="Attended" />'; ?><?php elseif ($this->_tpl_vars['type'] == 8): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-will_attend.png" alt="Will attend" title="Will attend" />'; ?><?php elseif ($this->_tpl_vars['type'] == 9): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-archived.png" alt="Archived" title="Archived" />'; ?><?php elseif ($this->_tpl_vars['type'] == 10): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-active.png" alt="Available" title="Available" />'; ?><?php elseif ($this->_tpl_vars['type'] == 11): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-disabled.png" alt="Temporarily not available" title="Temporarily not available" />'; ?><?php elseif ($this->_tpl_vars['type'] == 13): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-locked.png" alt="Locked" title="Locked" />'; ?><?php elseif ($this->_tpl_vars['type'] == 14): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-locked-invisible.png" alt="Locked, invisible" title="Locked, invisible" />'; ?><?php else: ?><?php echo '&nbsp;'; ?><?php endif; ?><?php echo ''; ?>
