<?php

class Action extends AdminAbstract
{
	function index()
	{
		$this->smarty->display('admin/dashboard.html');
		
	}
}
