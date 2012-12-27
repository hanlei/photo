<?php

class Action extends ActionAbstract
{
    function index($album_id = 0)
    {

		$this->smarty->display('tiltViewer.html');
    }
}