<?php

/*
Plugin Name: TheJaryan -    
Plugin URI: http://thejaryan.ir/
Description: افزونه سفارشی
Version: 1.0
Author: Jaryan
Author URI: http://thejaryan.ir/
*/


function user_has_role($user_ID, $role_name)
{
    $user_meta = get_userdata($user_ID);
    if ($user_meta) {
        $user_roles = $user_meta->roles;
        return in_array($role_name, $user_roles);
    } else {
        return false;
    }
}

function get_name()
{
    global $user_ID;
    $user = wp_get_current_user($user_ID);
    $fname = $user->user_firstname ;
    $lname = $user->user_lastname  ;
    $full_name = '';

    if (empty($fname)) {
        $full_name = $lname;
    } elseif (empty($lname)) {
        $full_name = $fname;
    } else {
        //both first name and last name are present
        $full_name = "{$fname} {$lname}";
    }

    return $full_name;
}

function writer_select_category_button_func($atts)
{
    $default = [
        'category' => $atts['slug'],
    ];

    if (!isset($default['category']) || $default['category'] == false) {
        return "Please select a category";
    }

    $category = get_category_by_slug($default['category']);

    if ($category == NULL) {
        $category = get_category($default['category']);
    }

    if ($category == NULL) {
        return false;
    }

    global $user_ID;


    if (
        $user_ID == false ||
        user_has_role($user_ID, 'subscriber')
    ) {

        $jmsg = 'شما دسترسی به این مورد را ندارید؛ لطفا وارد شوید';
        if (!isset($_GET['jmsg'])) {
            wp_redirect(get_permalink().'?jmsg=' . $jmsg);
        }

        $available_to_write = false;
    } else {

        $available_to_write = true;
    }

    $category_in_meta = get_user_meta($user_ID , 'writer_selected_category', true);


    if (isset($_POST['selected_category']) && !empty($_POST['selected_category']) && $available_to_write) {

        if (empty($category_in_meta) || !isset($category_in_meta)) {

            update_user_meta(
                $user_ID,
                'writer_selected_category',
                $_POST['selected_category']
            );
            $category_in_meta = get_user_meta($user_ID , 'writer_selected_category', true);

        }

        if ($_POST['selected_category'] == get_cat_ID($category_in_meta)) {

            $full_name = get_name();
            $new_post = array(
                'post_title' => $category->name . ' ' . $full_name . ' - ' . rand(1000,9999),
                'post_status' => 'draft',
                'post_date' => date('Y-m-d H:i:s'),
                'post_author' => $user_ID,
                'post_type' => 'post',
                'post_category' => array(get_cat_ID($category_in_meta)),
                'tags_input' => array($category_in_meta),
            );
            $post_id = wp_insert_post($new_post);
            wp_redirect( admin_url( '/post.php?post=' . $post_id . '&action=edit' ) ); exit;
    
        } else {
            $jmsg = 'نمی توانید چند دسته بندی انتخاب کنید';

            if (!isset($_GET['jmsg'])) {
                wp_redirect(get_permalink().'?jmsg=' . $jmsg);
            }

            return false;
        }

    }

    if ($category->cat_ID !== get_cat_ID($category_in_meta) && !empty($category_in_meta)) {
        $button_attr = 'j-deactive';
    } else {
        $button_attr = '';
    }

    return "
    <form action='./' method='POST'>
        <div class='jkit-writer-form col-xs-12 col-sm-6 col-lg-3 $button_attr'>
            <h4>$category->name</h4>
            <p>$category->description</p>
            <p>تعداد مطالب: $category->count</p>

            <input type='text' value='$category->cat_ID' name='selected_category' hidden />
            <input type='submit' value='ایجاد' />

        </div>
    </form>
    ";
}
add_shortcode('writer_select_category', 'writer_select_category_button_func');


function j_writer_widget_enqueue(){
    wp_enqueue_script( 'mainj', plugin_dir_url( __FILE__ ) . 'js/mainj.js' );
    wp_enqueue_style( 'mainj', plugins_url('/css/mainj.css', __FILE__), false, '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', "j_writer_widget_enqueue");