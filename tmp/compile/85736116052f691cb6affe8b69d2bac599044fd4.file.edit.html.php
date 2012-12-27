<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 15:27:53
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/album/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:166333529950dbb87b3f9879-85183210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85736116052f691cb6affe8b69d2bac599044fd4' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/album/edit.html',
      1 => 1356583523,
      2 => 'file',
    ),
    'c083ede22f068d6517d266e9fd36f035efd72a60' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/layout.html',
      1 => 1356589577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166333529950dbb87b3f9879-85183210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50dbb87b543ee7_81026064',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dbb87b543ee7_81026064')) {function content_50dbb87b543ee7_81026064($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
        
<form action="?url=admin/album/do_save&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&page_no=<?php echo _GET('page_no',1);?>
" method="post" accept-charset="utf-8">
<div id="content" class="container_16 clearfix">
    <div class="grid_16">
        <h2>相册ID : <?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['id']!='0'){?>
			<a href="?url=admin/album/upload&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&page_no=<?php echo _GET('page_no',1);?>
">[添加照片]</a>
		<?php }?>
		</h2>
        <p class="error"><?php if (isset($_GET['error'])){?><?php echo $_GET['error'];?>
<?php }else{ ?>请仔细填写<?php }?>.</p>
    </div>

    <div class="grid_6">
        <p>
            <label for="title">相册名称 <small>name.</small></label>
            <input type="text" name="info[name]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"/>
        </p>
    </div>

    <div class="grid_6">
        <p>
            <label for="title">相册描述 <small>description.</small></label>
            <input type="text" name="info[description]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
"/>
        </p>
    </div>

    <div class="grid_6">
        <p>
            <label for="title">创建时间 <small>created.</small></label>
            <input type="text" name="info[created]" value="<?php echo date('Y-m-d h:m:s',$_smarty_tpl->tpl_vars['info']->value['created']);?>
" readonly="readonly" style="color:#999;" />
        </p>
    </div>

    <div class="grid_6">
        <p>
            <label for="title">修改时间 <small>updated.</small></label>
            <input type="text" name="info[updated]" value="<?php echo date('Y-m-d h:m:s',$_smarty_tpl->tpl_vars['info']->value['updated']);?>
" readonly="readonly" style="color:#999;" />
        </p>
    </div>
    <div class="grid_16">
        <p class="submit">
            <input type="reset" value="Reset" />
            <input type="submit" value="Post" />
        </p>
    </div>
</div>
</form>

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
</html><?php }} ?>