<?php

class Action extends ActionAbstract
{
    function index($album_id = 0)
    {
		$this->smarty->display('tiltViewer.html');
    }

	function test($album_id = 0){
		if(!$album = _model('album')->read(array('id'=>$album_id))){
			echo 'error';
			exit;
		}
		$imgs = _model('images')->getList("WHERE album_id = $album_id");
		$html = '';
		foreach($imgs as $img) {
			$html .= "<a href='/?url=image&file=600/". $img['id'] ."'>
                <img data-title=''
                     data-description=''
                     src='/?url=image&file=600/". $img['id'] ."'>
            </a>";
			
		}
		$this->smarty->assign('html',$html);
		$this->smarty->display('galleria.html');
	}
}