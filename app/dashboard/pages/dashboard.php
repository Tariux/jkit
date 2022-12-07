<?php


function jkit_admin_page()
{
    load_jkit_theme('dashboard/jkit_admin_page');
    
}

function jkit_admin_page_settings()
{

    load_jkit_inc('admin/update_settings');
    load_jkit_theme('dashboard/jkit_admin_page_settings');
}

function jkit_admin_page_about()
{
    load_jkit_theme('dashboard/jkit_admin_page_about');

}


function jkit_admin_page_custom_css()
{
    load_jkit_inc('admin/custom_css');
    load_jkit_theme('dashboard/jkit_admin_page_custom_css');

}
