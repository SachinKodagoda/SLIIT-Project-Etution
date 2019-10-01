<div class="leftMenu">
    <div class="leftMenu_item_profile clearfix">
        <img src="<?php echo URLROOT ?>/img/uploads/<?php echo $_SESSION['user_img'] ?>" alt="profile" />
        <div class="leftMenu_item_profile_text">
            <span><?php echo $_SESSION['user_name'] ?></span><br />
            <?php
            $bg_red = "background: #DD4B39;";
            $bg_green = "background: #00A65A;";
            $bg_yellow = "background: #FABF31;";
            ?>
            <span class="leftMenu_item_profile_text_online">
                <span class="leftMenu_item_profile_text_online_bulb" style="<?php
                                                                            if ($_SESSION['online_status'] == 1) {
                                                                                echo $bg_green;
                                                                            } elseif ($_SESSION['online_status'] == 2) {
                                                                                echo $bg_red;
                                                                            } elseif ($_SESSION['online_status'] == 3) {
                                                                                echo $bg_yellow;
                                                                            }
                                                                            ?>"></span>
                <?php
                                                                            if ($_SESSION['online_status'] == 1) {
                                                                                echo "Online";
                                                                            } elseif ($_SESSION['online_status'] == 2) {
                                                                                echo "Offline";
                                                                            } elseif ($_SESSION['online_status'] == 3) {
                                                                                echo "Away";
                                                                            }
                ?>
            </span>
        </div>
    </div>

    <div class="form_search_padding">
        <form action="#" method="get" class="form_search">
            <div class="form_search_group clearfix">
                <input type="text" name="question" class="form_search_input" placeholder="Search..." />
                <button type="submit" name="search" class="form_search_btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="leftMenu_item_selected clearfix" id="adminActive" onclick="navFunction('<?php echo URLROOT ?>/admin',true)">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Admin</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="memberActive" onclick="navFunction('<?php echo URLROOT ?>/admin/member',true)">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Member</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="lecturerActive" onclick="navFunction('<?php echo URLROOT ?>/admin/lecturer',true)">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Lecturer</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="agentActive" onclick="navFunction('<?php echo URLROOT ?>/admin/agent',true)">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Customer Agent</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="reportActive" onclick="navFunction('<?php echo URLROOT ?>/admin/report',true)">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Report</div>
    </div>
</div>