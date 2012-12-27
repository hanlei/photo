<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 15:26:54
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/album/list.html" */ ?>
<?php /*%%SmartyHeaderCode:102469584850dbcce7d669e6-39089097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d22d2feaa275263d78d89bc41f4f9200a8ccc8' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/album/list.html',
      1 => 1356588825,
      2 => 'file',
    ),
    'c083ede22f068d6517d266e9fd36f035efd72a60' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/layout.html',
      1 => 1356589577,
      2 => 'file',
    ),
    '18c680323633bbee6f906cccadc8c43aacd33310' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/page.html',
      1 => 1356576066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102469584850dbcce7d669e6-39089097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50dbcce7e1c5a6_89911394',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dbcce7e1c5a6_89911394')) {function content_50dbcce7e1c5a6_89911394($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Atom Admin</title>
		<link rel="stylesheet" href="style/css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="style/css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="style/css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script>!window.jQuery && document.write('<script src="http://code.jquery.com/jquery-1.4.2.min.js"><\/script>');</script>
		<?php if ($_smarty_tpl->tpl_vars['controller']->value->controller=='album'&&$_smarty_tpl->tpl_vars['controller']->value->action=='upload'){?>
			<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.gears.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.silverlight.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.flash.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.browserplus.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.html4.js"></script>
			<script type="text/javascript" src="/js/plupload/plupload.html5.js"></script>

			<!-- <script type="text/javascript"  src="http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js"></script> -->
		<?php }?>
	</head>
	<body>
		<h1 id="head">愤毛阿青thumbs</h1>
		<ul id="navigation">
			<li><a href="?url=admin/index">Dashboard</a></li>
			<li><a href="?url=admin/album/getList">相册列表</a></li>
		</ul>
        

<div id="content" class="container_16 clearfix">
	<div class="grid_5">
		<p>
			<label>相册搜索 <a href="?url=admin/album/edit">[添加]</a></label>
			<input type="text" name="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"/>
		</p>
	</div>

	<div class="grid_2">
		<p>
			<label>&nbsp;</label>
			<input type="submit" value="Search" />
		</p>
	</div>
    <script type="text/javascript" charset="utf-8">
    $('div.grid_2 input').click(function(){
        var search = $('input[name=search]').val();
        location.href = '?url=admin/album/getList&search='+search;
        return false;
    });
    </script>
	<div class="grid_16">
		<table>
			<thead>
				<tr>
					<th>相册名称</th> 
					<th>相册描述</th>               
					<th>修改时间</th>
					<th colspan="3" width="20%">操作</th>
				</tr>
			</thead>
            <?php /*  Call merged included template "admin/page.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('admin/page.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '102469584850dbcce7d669e6-39089097');
content_50dbf83e5dc844_86435279($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/page.html" */?>
			<tbody>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</td>
					<td><?php echo date('Y-m-d h:m:s',$_smarty_tpl->tpl_vars['val']->value['updated']);?>
</td>
					<td>
                        <a href="?url=admin/album/edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
&page_no=<?php echo _GET('page_no',1);?>
" class="edit">Edit</a>
                    </td>
					<td>
                        <a href="?url=admin/album/upload&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
&page_no=<?php echo _GET('page_no',1);?>
" class="edit">upload</a>
                    </td>
					<td>
                        <a href="?url=admin/album/delete&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="delete">Delete</a>
                    </td>
				</tr>
                <?php } ?>
			</tbody>
		</table>
	</div>
</div>


		<div id="foot">
			<div class="container_16 clearfix">
				<div class="grid_16">
					<a href="#">Contact Me</a>
				</div>
			</div>
		</div>
        <script type="text/javascript" charset="utf-8">
        var c = '<?php echo $_smarty_tpl->tpl_vars['controller']->value->controller;?>
';
        $('#navigation a').removeClass('active');
        $('#navigation a').each(function(){
            if (this.href.indexOf(c) != -1) {
                $(this).addClass('active');
            }
        });
        $('a.delete').click(function(){
            return confirm('确定删除?该操作不能恢复');
        });
        </script>
	</body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 15:26:54
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/page.html" */ ?>
<?php if ($_valid && !is_callable('content_50dbf83e5dc844_86435279')) {function content_50dbf83e5dc844_86435279($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['pager']->value)&&$_smarty_tpl->tpl_vars['pager']->value->getPages()>1){?>
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