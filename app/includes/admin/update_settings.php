<?php

if (isset($_POST['jkit_settings_updated'])) {
    $options = get_option(JKIT_STORE);
    $new_options = [];
    foreach ($_POST as $key => $value) {
            $new_options[$key] = $value;
    }
    update_option(JKIT_STORE , $new_options);
}