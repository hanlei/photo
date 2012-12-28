<?php

class Action extends ActionAbstract
{
	function __call($album_id, $param = array()){
		if(!$album = _model('album')->read(array('id'=>$album_id))){
			echo 'error';
			exit;
		}
		header('Content-Type: application/xml');
		header('Accept-Ranges: bytes');		
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		$imgs = _model('images')->getList("WHERE album_id = $album_id");
		$xml = '';
		$xml .= '<tiltviewergallery>'."\n";
		$xml .= '<photos>'."\n";
		foreach($imgs as $img) {
			$xml .= "<photo imageurl='/?url=image&file=600/". $img['id']."' linkurl=''>"."\n";
			$xml .= "<title>".$img['mime']."</title>"."\n";
			$xml .= "<description>" . date('Y-m-d h:m:s', $img['date']) . "</description>"."\n";
			$xml .= '</photo>'."\n";
		}
		$xml .= '</photos>'."\n";
		$xml .= '</tiltviewergallery>'."\n";
		echo $xml;
	}
}