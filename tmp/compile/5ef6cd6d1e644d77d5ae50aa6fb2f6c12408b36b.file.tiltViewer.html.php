<?php /* Smarty version Smarty-3.1-DEV, created on 2012-12-27 17:06:27
         compiled from "/Library/WebServer/Documents/photo/Templates/tiltViewer.html" */ ?>
<?php /*%%SmartyHeaderCode:55826606050db0b649a39e6-90455049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef6cd6d1e644d77d5ae50aa6fb2f6c12408b36b' => 
    array (
      0 => '/Library/WebServer/Documents/photo/Templates/tiltViewer.html',
      1 => 1356599185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55826606050db0b649a39e6-90455049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50db0b64a639f3_75900075',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50db0b64a639f3_75900075')) {function content_50db0b64a639f3_75900075($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TiltViewer</title>
<script type="text/javascript" src="/js/swfobject.js"></script>
<link href="/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="flashcontent">TiltViewer requires JavaScript and the latest Flash player. <a href="http://www.macromedia.com/go/getflashplayer/">Get Flash here.</a></div>
	<script type="text/javascript">
		var fo = new SWFObject("/js/flash/TiltViewer.swf", "viewer", "100%", "100%", "9.0.28", "#000000");			
		
		// TILTVIEWER CONFIGURATION OPTIONS
		// To use an option, uncomment it by removing the "//" at the start of the line
		// For a description of config options, go to: 
		// http://www.airtightinteractive.com/projects/tiltviewer/config_options.html
															
		//FLICKR GALLERY OPTIONS
		// To use images from Flickr, uncomment this block
		//fo.addVariable("useFlickr", "true");
		//fo.addVariable("user_id", "48508968@N00");
		//fo.addVariable("tags", "jump,smile");
		//fo.addVariable("tag_mode", "all");
		//fo.addVariable("showTakenByText", "true");			
		
		// XML GALLERY OPTIONS
		// To use local images defined in an XML document, use this block		
		fo.addVariable("useFlickr", "false");
		//fo.addVariable("xmlURL", "gallery.xml");
		fo.addVariable("xmlURL", "/?url=xml/<?php echo _GET('album_id');?>
");
		fo.addVariable("maxJPGSize","640");
		
		//GENERAL OPTIONS		
		fo.addVariable("useReloadButton", "false");
		fo.addVariable("columns", "4");
		fo.addVariable("rows", "5");
		//fo.addVariable("showFullscreenOption", "true");
		//fo.addVariable("showFlipButton", "true");
		//fo.addVariable("showLinkButton", "true");		
		//fo.addVariable("linkLabel", "View image info");
		//fo.addVariable("frameColor", "0xFF0000");
		//fo.addVariable("backColor", "0xDDDDDD");
		//fo.addVariable("bkgndInnerColor", "0xFF00FF");
		//fo.addVariable("bkgndOuterColor", "0x0000FF");				
		//fo.addVariable("langAbout", "About");				
		
		// END TILTVIEWER CONFIGURATION OPTIONS
		
		fo.addParam("allowFullScreen","true");
		fo.write("flashcontent");			
	</script>	
</body>
</html><?php }} ?>