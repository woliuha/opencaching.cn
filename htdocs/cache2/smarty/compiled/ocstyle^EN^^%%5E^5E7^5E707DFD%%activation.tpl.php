<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:37
         compiled from activation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'activation.tpl', 38, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['sucess'] == true): ?><?php echo '<div class="content2-pagetitle"><img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />Activate account</div><div class="content-txtbox-noshade"><p style="line-height: 1.6em;">The activation of your account was successful. You may now login at the login page.<br /><br /> <a href="login.php">Go to the login page</a></p><div class="buffer" style="width: 500px;">&nbsp;</div></div>'; ?><?php else: ?><?php echo '<form action="activation.php" method="post" enctype="application/x-www-form-urlencoded" style="display: inline;"><input type="hidden" name="submit" value="1" /><div class="content2-pagetitle"><img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />Activate account</div><p style="line-height: 1.6em;"><img src="resource2/'; ?><?php echo $this->_tpl_vars['opt']['template']['style']; ?><?php echo '/images/misc/hint.gif" border="0" width="15" height="11" alt="Hint" align="middle" />To complete the registration, you have to enter your e-mail address and activation code.</p><table class="table"><tr><td>E-mail:</td><td><input type="text" name="email" maxlength="60" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" class="input200" />'; ?><?php if ($this->_tpl_vars['errorEMail'] == true): ?><?php echo ' &nbsp;<span class="errormsg">E-mail address is not valid.</span>'; ?><?php endif; ?><?php echo '</td></tr><tr><td>Activation code:</td><td><input type="text" name="code" maxlength="20" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['code'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '" class="input200" /></td></tr><tr><td class="spacer"></td></tr></table>'; ?><?php if ($this->_tpl_vars['errorCode'] == true): ?><?php echo '<p style="line-height: 1.6em;">The activation code or e-mail address was incorrect.<br /> The activation of your account was not successful.<br /> Please use the same e-mail address to which the registration mail was sent.<br /> <br /> Please check if you have mistyped. If you cannot solve the problem, contact us via <a href="mailto:'; ?><?php echo $this->_tpl_vars['opt']['mail']['contact']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['opt']['mail']['contact']; ?><?php echo '</a>.</p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['errorAlreadyActivated'] == true): ?><?php echo '<p style="line-height: 1.6em;">The account is already activated. Please try to <a href="login.php">login</a>.<br /> If you cannot login, please read the following page: <a href="'; ?><?php echo $this->_tpl_vars['opt']['cms']['login']; ?><?php echo '">Login problems</a></p>'; ?><?php endif; ?><?php echo '<p style="line-height: 1.6em;"><!-- <input type="reset" name="reset" value="Reset" class="formbutton" onclick="flashbutton(\'reset\')" />&nbsp;&nbsp; --><input type="submit" name="submit" value="Submit" class="formbutton" onclick="submitbutton(\'submit\')" /></p></form>'; ?><?php endif; ?><?php echo ''; ?>
