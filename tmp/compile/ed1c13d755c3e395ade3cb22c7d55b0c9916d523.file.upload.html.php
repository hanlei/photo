<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 15:06:57
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/album/upload.html" */ ?>
<?php /*%%SmartyHeaderCode:172227726550dbcec43edcf4-63561513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed1c13d755c3e395ade3cb22c7d55b0c9916d523' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/album/upload.html',
      1 => 1356591802,
      2 => 'file',
    ),
    'c083ede22f068d6517d266e9fd36f035efd72a60' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/layout.html',
      1 => 1356589577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172227726550dbcec43edcf4-63561513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50dbcec443d3d3_63677796',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dbcec443d3d3_63677796')) {function content_50dbcec443d3d3_63677796($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
    <div class="grid_16">
        <h2>相册ID : <?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</h2>
        <?php if (isset($_GET['error'])){?><p class="error"><?php echo $_GET['error'];?>
</p><?php }?>
    </div>

   

	<div class="grid_8">
        <p>
            <label for="title">相册名称 <small>name.</small></label>
			<input type="text" name="info[name]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" readonly="readonly" style="color:#999;" />
        </p>
    </div>

	<div class="grid_8">
        <p>
            <label for="title">相册描述 <small>description.</small></label>
			<input type="text" name="info[description]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" readonly="readonly" style="color:#999;" />
        </p>
    </div>

 	<div class="grid_16">
        <p>
            <label for="title">上传图片 <small>upload.</small></label>
        </p>
    </div>

	<div id="container" class="grid_16">
	    <div id="filelist">No runtime found.</div>
	    <br />
	    <a id="pickfiles" href="javascript:;">[Select files]</a> 
	    <a id="uploadfiles" href="javascript:;">[Upload files]</a>
	</div>


	<script type="text/javascript">

	function $(id) {
		return document.getElementById(id);	
	}

	var uploader = new plupload.Uploader({
		runtimes : 'gears,html5,flash,silverlight,browserplus',
		browse_button : 'pickfiles',
		container: 'container',
		max_file_size : '10mb',
		url : '/?url=admin/image/upload.php&album_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
',
		resize : { width : 320, height : 240, quality : 90 },
		flash_swf_url : '/js/plupload/plupload.flash.swf',
		silverlight_xap_url : '/js/plupload/plupload.silverlight.xap',
		filters : [
			{ title : "Image files", extensions : "jpg,gif,png" },
			{ title : "Zip files", extensions : "zip" }
		]

	});

	uploader.bind('Init', function(up, params) {
		$('filelist').innerHTML = "<div>Current runtime: " + params.runtime + "</div>";
	});

	uploader.bind('FilesAdded', function(up, files) {
		for (var i in files) {
			$('filelist').innerHTML += '<div id="' + files[i].id + '">' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ') <b></b></div>';
		}
	});

	uploader.bind('UploadProgress', function(up, file) {
		$(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
	});

	$('uploadfiles').onclick = function() {
		uploader.start();
		return false;
	};

	uploader.init();

	</script>


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
</html><?php }} ?>