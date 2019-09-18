<div class="leftMenu">
    <div class="leftMenu_item_profile clearfix">
        <img src="<?php echo URLROOT ?>/img/admin/profile.jpg" alt="profile" />
        <div class="leftMenu_item_profile_text">
            <span><?php echo $_SESSION['user_name'] ?></span><br />
            <span class="leftMenu_item_profile_text_online"><span class="leftMenu_item_profile_text_online_bulb"></span>Profile</span>
            <!-- <img src="<?php echo URLROOT ?>/img/admin/settings.svg" alt="profile" style="width:16px; height:16px;" /> -->
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
    <div class="leftMenu_item_selected clearfix" id="adminActive" onclick="navFunction('<?php echo URLROOT ?>/admin')">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Admin</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="memberActive" onclick="navFunction('<?php echo URLROOT ?>/admin/member')">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Member</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="lecturerActive" onclick="navFunction('<?php echo URLROOT ?>/admin/lecturer')">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Lecturer</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="agentActive" onclick="navFunction('<?php echo URLROOT ?>/admin/agent')">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Customer Agent</div>
    </div>
    <div class="leftMenu_item_selected clearfix" id="reportActive" onclick="navFunction('<?php echo URLROOT ?>/admin/report')">
        <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/admin/dashboard.svg" alt="icon" /></div>
        <div class="leftMenu_item_selected_text">Report</div>
    </div>
</div>