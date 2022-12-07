<?php

function load_jkit_theme($file)
{
    $file_path = JKIT_DIR . "app/themes/$file.php";

    if (file_exists($file_path)) {
        require_once($file_path);
    } else {
        require_once(JKIT_DIR . "app/themes/default/404.php");
    }
}

function load_jkit_theme_style($file)
{
    // Lol i did this !
    add_action('admin_enqueue_scripts', function () use ($file) {

        $file_path = plugins_url(JKIT_PLUGIN_NAME . "/app/themes/styles/$file.css");
        wp_enqueue_style('jkit-admin-theme', $file_path);
    });
}



function load_jkit_inc($file)
{
    $file_path = JKIT_DIR . "app/includes/$file.php";

    if (file_exists($file_path)) {
        require_once($file_path);
    }
}


function jkit_setting_status($name)
{
    $options = get_option(JKIT_STORE);
    if (isset($options[$name]) && !empty($options[$name])) {
        echo 'checked="checked"';
    }
}
