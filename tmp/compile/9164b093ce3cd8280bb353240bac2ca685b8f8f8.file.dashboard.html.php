<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 15:26:51
         compiled from "/Library/WebServer/Documents/photo/Templates/admin/dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:14979526550dbafc3614d58-61620282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9164b093ce3cd8280bb353240bac2ca685b8f8f8' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/dashboard.html',
      1 => 1356574544,
      2 => 'file',
    ),
    'c083ede22f068d6517d266e9fd36f035efd72a60' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/admin/layout.html',
      1 => 1356589577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14979526550dbafc3614d58-61620282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50dbafc37743b2_62328676',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dbafc37743b2_62328676')) {function content_50dbafc37743b2_62328676($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
		<div class="box">
			<h2>Hello!</h2>
			<div class="utils">
			</div>
			<p><strong>IP Address : </strong> <?php echo getClienip();?>
</p>
		</div>
		<div class="box">
			<h2>空间信息</h2>
			<div class="utils"></div>
			<table>
				<tbody>
					<tr>
						<td>共有文件</td>
						<td>$fileCount</td>
					</tr>
					<tr>
						<td>共占用空间</td>
						<td>$fileSize</td>
					</tr>
					<tr>
						<td>Forester</td>
						<td>9.12/10</td>
					</tr>
					<tr>
						<td>Sabertooth</td>
						<td>8.9/10</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="box">
			<h2>Messages</h2>
			<div class="utils">
				<a href="#">Inbox</a>
			</div>
			<p class="center">Have have <a href="#">10</a> unread messages.</p>
		</div>
		<div class="box">
			<h2>CMS Updates</h2>
			<div class="utils">
				<a href="#">Check</a>
			</div>
			<p class="center">You are running the latest version.</p>
		</div>
	</div>
	<div class="grid_6">
		<div class="box">
			<h2>At a Glance</h2>
			<div class="utils">
				<a href="#">View More</a>
			</div>
			<table>
				<tbody>
					<tr>
						<td>$companyCount 公司</td>
						<td>$invitCount 申请</td>
					</tr>
					<tr>
						<td>$userCount 会员</td>
						<td>$needSendInvitCount 未发送邀请码申请</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="box">
			<h2>Quick Post</h2>
			<div class="utils">
				<a href="#">Advanced</a>
			</div>
			<form action="#" method="post">
				<p>
					<label for="title">Title <small>Alpha-numeric characters only.</small> </label>
					<input type="text" name="title" />
				</p>
				<p>
					<label for="post">Post <small>Parsed by Markdown.</small> </label>
					<textarea name="post"></textarea>
				</p>
				<p>
					<input type="submit" value="post" />
				</p>
			</form>
		</div>
	</div>
	<div class="grid_5">
		<div class="box">
			<h2>Statistics</h2>
			<div class="utils">
				<a href="#">View More</a>
			</div>
			<table>
				<tbody>
					<tr>
						<td>News</td>
						<td>+ 120%</td>
					</tr>
					<tr>
						<td>Downloads</td>
						<td>+ 220%</td>
					</tr>
					<tr>
						<td>Users</td>
						<td>- 10%</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="box">
			<h2>Schedule</h2>
			<div class="utils">
				<a href="#">View More</a>
			</div>
			<table class="date">
				<caption><a href="#">Prev</a> November 2009 <a href="#">Next</a> </caption>
				<thead>
					<tr>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
						<th>Sun</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#">1</a></td>
					</tr>
					<tr>
						<td><a href="#">2</a></td>
						<td><a href="#">3</a></td>
						<td><a href="#">4</a></td>
						<td><a href="#">5</a></td>
						<td><a href="#">6</a></td>
						<td><a href="#">7</a></td>
						<td><a href="#">8</a></td>
					</tr>
					<tr>
						<td><a href="#">9</a></td>
						<td><a href="#">10</a></td>
						<td><a href="#" class="active">11</a></td>
						<td><a href="#">12</a></td>
						<td><a href="#">13</a></td>
						<td><a href="#">14</a></td>
						<td><a href="#">15</a></td>
					</tr>
					<tr>
						<td><a href="#">16</a></td>
						<td><a href="#">17</a></td>
						<td><a href="#">18</a></td>
						<td><a href="#">19</a></td>
						<td><a href="#">20</a></td>
						<td><a href="#">21</a></td>
						<td><a href="#">22</a></td>
					</tr>
					<tr>
						<td><a href="#">23</a></td>
						<td><a href="#">24</a></td>
						<td><a href="#">25</a></td>
						<td><a href="#">26</a></td>
						<td><a href="#">27</a></td>
						<td><a href="#">28</a></td>
						<td><a href="#">29</a></td>
					</tr>
					<tr>
						<td><a href="#">30</a></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<ol>
				<li>Draft contract template.</li>
				<li>Draft invoice template.</li>
				<li>Draft business cards.</li>
			</ol>
		</div>
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
</html><?php }} ?>