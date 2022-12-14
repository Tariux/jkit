<?php

/*
Plugin Name: JKIT
Plugin URI: http://thejaryan.ir/
Description: در حال توسعه...
Version: 1.0
Author: Jaryan
Author URI: http://thejaryan.ir/
*/

namespace JKit;



class JInit
{
    function __construct()
    {
        $this->init();
    }

    public function init()
    {
        define('JKIT_DIR', dirname(__FILE__) . '/');
        define('JKIT_STORE', 'jkit_store_system');
        define('JKIT_PLUGIN_NAME', 'jkit');

        
        require_once(JKIT_DIR . '/app/starter.php');

        new JStarter;
    }
}

new JInit;
