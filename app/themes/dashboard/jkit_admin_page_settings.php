
<div class="jkit-dashboard-settings">
    <form method="post">
    

    <!---
    <button class="reset">
        Reset to Defaults
    </button>
    --->

    <input type="text" name="jkit_settings_updated" value="true" hidden>

    <h1 class="title">[ JKit Settings ]</h1>
    <br>
    <button class="save">
        Save The New Changes
    </button>

    <?php

    var_dump(get_option(JKIT_STORE));

    ?>
    <hr>

    <div class="jkit-setting">
        <label for="jkit_setting_new_products_tag">Active new products tag</label>
        <input type="checkbox" name="jkit_setting_new_products_tag" id="jkit_setting_new_products_tag" <?php jkit_setting_status('jkit_setting_new_products_tag') ?>>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, aliquam doloremque deserunt minima eaque sapiente quam nobis laboriosam obcaecati perferendis amet ex eum quod facere ut tempore consequuntur enim dolorem.</p>

    </div>




    </form>
</div>