<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:41
         compiled from mydescription.tpl */ ?>

<div class="content2-pagetitle">
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/profile/32x32-profile.png" style="margin-right: 10px;" width="32" height="32" alt="" />
    My profile details
</div>

<form action="mydetails.php" method="post" enctype="application/x-www-form-urlencoded" name="editform" dir="ltr">
    <input type="hidden" name="action" value="changetext" />
    <input id="descMode" type="hidden" name="descMode" value="3" />
    <input id="oldDescMode" type="hidden" name="oldDescMode" value="3" />
    <input type="hidden" name="scrollposx" value="<?php echo $this->_tpl_vars['scrollposx']; ?>
" />
    <input type="hidden" name="scrollposy" value="<?php echo $this->_tpl_vars['scrollposy']; ?>
" />

<p>The following text is displayed in your <a href="viewprofile.php">public profile</a>:</p>

<table class="table">
    <tr>
        <td colspan="2">
            <div class="menuBar">
                <span id="descHtmlEdit" class="buttonNormal" onclick="btnSelect(3)" onmouseover="btnMouseOver(3)" onmouseout="btnMouseOut(3)">Editor</span>
                <span class="buttonSplitter">|</span>
                <span id="descHtml" class="buttonNormal" onclick="btnSelect(2)" onmouseover="btnMouseOver(2)" onmouseout="btnMouseOut(2)">&lt;html&gt;</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <span id="scriptwarning" class="errormsg">JavaScript is disabled in your browser, you can enter (HTML) text only. To use the editor, please enable JavaScript.</span>
        </td>
    </tr>
    <tr>
        <td>
            <textarea name="desctext" id="desctext" cols="68" rows="25" class="userdesc" ><?php echo $this->_tpl_vars['desctext']; ?>
</textarea>
    </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td colspan="2">
            By submitting I accept the <a href="articles.php?page=impressum#tos" target="_blank">Opencaching.de Terms of Service</a> and the <a href="articles.php?page=impressum#datalicense" target="_blank">Opencaching.de Data license</a>.
        </td>
    </tr>
    <tr><td class="spacer" colspan="2"></td></tr>
    <tr>
        <td class="header-small" colspan="2">
            <input type="submit" name="cancel" value="Cancel" class="formbutton" onclick="submitbutton('cancel')" />&nbsp;&nbsp;
            <input type="submit" name="save" value="Submit" class="formbutton" onclick="submitbutton('save')"(/>
        </td>
    </tr>
</table>

</form>

<script type="text/javascript">
<!--
    var descMode = 2;
    OcInitEditor();
//-->
</script>