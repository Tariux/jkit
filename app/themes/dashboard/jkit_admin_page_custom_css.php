<div class="jkit-dashboard-settings">
    <h1 class="title">[ Custom CSS ]</h1>
    <hr>

    <form method="post">
        <input type="text" value="true" name="jkit_custom_css_updated" hidden>
        <div class="jkit-dashboard-custom-css">
            <h2 style="text-align: center;">Add your custom css here</h2>
            <textarea name="jkit_custom_css" id="jkit_custom_css" cols="30" rows="10"><?php echo (!empty(get_option('jkit_custom_css'))) ? get_option('jkit_custom_css') : ''; ?></textarea>

        </div>
        <button style="margin: 2em auto; width:100%;padding:1em" class="save">
            Save The New Changes
        </button>
    </form>

</div>

