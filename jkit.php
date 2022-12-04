<?php

/*
Plugin Name: [ Jaryan KIT ] - آچار هر مدیر وردپرسی
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

        require_once(JKIT_DIR . '/app/starter.php');

        new JStarter;
    }
}

new JInit;
