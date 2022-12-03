<?php

namespace JKit;

class JStarter {

    function __construct()
    {

        require_once(JKIT_DIR . '/app/dashboard/pages/dashboard.php');

        $this->init();

    }

    public function init()
    {

        add_action('admin_menu', ['JKit\JStarter', 'jkit_add_menu_page']);

    }

    
    public static function jkit_add_menu_page()
    {
        add_menu_page(__('JKit', 'jkit'), __('JKit', 'jkit'),
        'manage_options', 'jkit_settings_handle', 'jkit_admin_page' , '' , 85);

        
        add_submenu_page('jkit_settings_handle', __('Settings', 'settings'), __('Settings', 'settings'),
        'manage_options', 'jkit-page-settings', 'jkit_admin_page_settings');

        add_submenu_page('jkit_settings_handle', __('About', 'about'), __('About', 'about'),
        'manage_options', 'jkit-page-about', 'jkit_admin_page_about');
    }

    

}