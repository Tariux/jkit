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
    $file_path = JKIT_DIR . "app/themes/styles/$file.css";

    if (file_exists($file_path)) {
        echo '<style>';
        require_once($file_path);
        echo '</style>';
    }
}