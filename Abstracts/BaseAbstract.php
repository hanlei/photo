<?php

abstract class BaseAbstract
{
    function __get($name)
    {
        return Component::get($name);
    }

    function __construct()
    {
        Component::init(array(
            'smarty' => array(
                '__init__' => array(
                    'class' => 'Smarty'
                ),
                array('setTemplateDir', ROOT_PATH . '/Templates'),
                'compile_dir' => ROOT_PATH . '/tmp/compile',
                'error_reporting' => E_ALL ^ E_NOTICE
            )
        ));
    }
}
