<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logtype.tpl */ ?>
<?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['type'] == 1): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-found.png" alt="trovata" title="trovata"  />'; ?><?php elseif ($this->_tpl_vars['type'] == 2): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-dnf.png" alt="non trovata" title="non trovata" />'; ?><?php elseif ($this->_tpl_vars['type'] == 3): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-note.png" alt="Nota" title="Nota" />'; ?><?php elseif ($this->_tpl_vars['type'] == 7): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-attended.png" alt="partecipato" title="partecipato" />'; ?><?php elseif ($this->_tpl_vars['type'] == 8): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-will_attend.png" alt="parteciperò" title="parteciperò" />'; ?><?php elseif ($this->_tpl_vars['type'] == 9): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-archived.png" alt="archiviata" title="archiviata" />'; ?><?php elseif ($this->_tpl_vars['type'] == 10): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-active.png" alt="disponibile" title="disponibile" />'; ?><?php elseif ($this->_tpl_vars['type'] == 11): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-disabled.png" alt="temporaneamente non disponibile" title="temporaneamente non disponibile" />'; ?><?php elseif ($this->_tpl_vars['type'] == 13): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-locked.png" alt="bloccata" title="bloccata" />'; ?><?php elseif ($this->_tpl_vars['type'] == 14): ?><?php echo '<img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/log/16x16-locked-invisible.png" alt="chiusa, invisibile" title="chiusa, invisibile" />'; ?><?php else: ?><?php echo '&nbsp;'; ?><?php endif; ?><?php echo ''; ?>
