<?php

namespace JKit;

class JStarter {

    function __construct()
    {

        require_once(JKIT_DIR . '/app/dashboard/pages/dashboard.php');
        require_once(JKIT_DIR . '/app/includes/functions.php');

        

        $this->init();

    }

    public function init()
    {

        $this->define_jkit_store();
        load_jkit_theme_style("main");
        add_action('admin_menu', ['JKit\JStarter', 'jkit_add_menu_page']);

    }

    public function define_jkit_store()
    {
        //update_option(JKIT_STORE , null); // For reset to default data
        //update_option('jkit_install_time' , null); // For reset to default data


        
        if (
            empty(get_option('jkit_install_time')) 
        ) {
            update_option('jkit_install_time' , date('l jS \of F Y h:i:s A'));
        }


        if (
            empty(get_option(JKIT_STORE)) 
        ) {

            $default_data = [
                'installed' => true,
                'status' => 'Active',
            ];
            update_option(JKIT_STORE , $default_data);

            $options = get_option(JKIT_STORE);
        }
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