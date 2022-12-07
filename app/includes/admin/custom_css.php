<?php

if (isset($_POST['jkit_custom_css_updated'])) {
    $options = get_option('jkit_custom_css');
    update_option('jkit_custom_css', $_POST['jkit_custom_css']);
}

?>

<style>
    <?php echo (get_option('jkit_custom_css') !== null) ? get_option('jkit_custom_css') : '' ?>
</style>

