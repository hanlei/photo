<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 10:41:09
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/page.html" */ ?>
<?php /*%%SmartyHeaderCode:189491704850dbb545b98de8-87821965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c680323633bbee6f906cccadc8c43aacd33310' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/page.html',
      1 => 1356576066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189491704850dbb545b98de8-87821965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50dbb545c21d48_85213229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dbb545c21d48_85213229')) {function content_50dbb545c21d48_85213229($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['pager']->value)&&$_smarty_tpl->tpl_vars['pager']->value->getPages()>1){?>
<tfoot>
	<tr>
		<td colspan="5" class="pagination">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pager']->value->getPagesArray(4); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['pager']->value->getPage()==$_smarty_tpl->tpl_vars['val']->value){?>
				<span class="active curved"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</span>
                <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value->link($_smarty_tpl->tpl_vars['val']->value);?>
" class="curved"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</a>
                <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value<$_smarty_tpl->tpl_vars['pager']->value->getPages()){?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value+1<$_smarty_tpl->tpl_vars['pager']->value->getPages()){?> ... <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value->link($_smarty_tpl->tpl_vars['pager']->value->getPages());?>
" class="curved"><?php echo $_smarty_tpl->tpl_vars['pager']->value->getPages();?>
</a>
            <?php }?>
		</td>
	</tr>
</tfoot>
<?php }?><?php }} ?>