<style>
    .v4_3 {
        width: 300px;
        height: 150px;
        background: url("../images/v4_3.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 0px;
        overflow: hidden;
        margin: 1em 0;


    }

    .v2_14 {
        width: 100%;
        height: 119px;
        background: rgba(51, 51, 51, 1);
        opacity: 1;
        position: absolute;
        top: 0px;
        left: 0px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        overflow: hidden;
    }

    .v4_2 {
        width: 100%;
        color: rgba(255, 255, 255, 1);
        position: absolute;
        top: 10px;

        font-weight: Thin;
        font-size: 16px;
        opacity: 1;
        text-align: center;
    }

    .v4_4 {
        width: 100%;
        color: rgba(255, 255, 255, 1);
        position: absolute;
        top: 42px;

        font-weight: Bold;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v4_5 {
        width: 100%;
        height: 40px;
        background: rgba(34, 34, 34, 1);
        opacity: 1;
        position: absolute;
        top: 99px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        overflow: hidden;
        cursor: pointer;

    }

    .v4_6 {
        width: fit-content;
        color: rgba(255, 255, 255, 1);
        position: absolute;
        top: 107px;

        font-weight: Black;
        font-size: 20px;
        opacity: 1;
        text-align: center;
        margin: 0 auto;
        left: 0;
        right: 0;
        display: block;

    }
</style>

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