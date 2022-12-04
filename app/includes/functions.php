<?php

function load_jkit_theme($theme_name)
{
    $file_path = JKIT_DIR . "app/themes/$theme_name.php";

    if (file_exists($file_path)) {
        require_once($file_path);
    } else {
        require_once(JKIT_DIR . "app/themes/default/404.php");
    }
}