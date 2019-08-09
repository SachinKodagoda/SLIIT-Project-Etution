<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="main_header clearfix">
    <div class="topic_bar">ADMIN LOGIN</div>
    <div class="notification_bar clearfix">
        <div class="notification_bar_icon">
            <img src="<?php echo URLROOT ?>/img/settings.svg" class="notification_bar_icon_img" alt="icon" />
        </div>
        <div class="notification_bar_name">
            Sachin Kodagoda
        </div>
        <div class="notification_bar_icon">
            <img src="<?php echo URLROOT ?>/img/profile.jpg" class="notification_bar_profile_img" alt="icon" />
        </div>
        <div class="notification_bar_icon">
            <img src="<?php echo URLROOT ?>/img/message.svg" class="notification_bar_icon_img" alt="icon" />
            <span class="notification_count bg_green">4</span>
        </div>
        <div class="notification_bar_icon">
            <img src="<?php echo URLROOT ?>/img/notification.svg" class="notification_bar_icon_img" alt="icon" />
            <span class="notification_count bg_orange">10</span>
        </div>
        <div class="notification_bar_icon">
            <img src="<?php echo URLROOT ?>/img/task.svg" class="notification_bar_icon_img" alt="icon" />
            <span class="notification_count bg_red">9</span>
        </div>
        <div class="notification_bar_icon_left">
            <img src="<?php echo URLROOT ?>/img/menu.svg" class="notification_bar_icon_img" alt="icon" />
        </div>
    </div>
</div>
<div class="clearfix">
    <div class="leftMenu">
        <div class="leftMenu_item_profile clearfix">
            <img src="<?php echo URLROOT ?>/img/profile.jpg" alt="profile" />
            <div class="leftMenu_item_profile_text">
                <span>Sachin Kodagoda</span><br />
                <span class="leftMenu_item_profile_text_online"><span class="leftMenu_item_profile_text_online_bulb"></span>Online</span>
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

        <div class="leftMenu_item"> Main Navigation</div>
        <div class="leftMenu_item_selected clearfix">
            <div class="leftMenu_item_selected_icon"><img src="<?php echo URLROOT ?>/img/dashboard.svg" alt="icon" /></div>
            <div class="leftMenu_item_selected_text">Dashboard</div>
            <div class="leftMenu_item_selected_dropdown"><img src="<?php echo URLROOT ?>/img/dropdown.svg" alt="drop" /></div>
        </div>
        <div class="leftMenu_item_not_selected clearfix">
            <div class="leftMenu_item_not_selected_icon"><img src="<?php echo URLROOT ?>/img/user.svg" alt="icon" /></div>
            <div class="leftMenu_item_not_selected_text">Dashboard</div>
            <div class="leftMenu_item_not_selected_dropdown"><img src="<?php echo URLROOT ?>/img/dropdown_shadow.svg" alt="drop" /></div>
        </div>
    </div>
    <div class="rightBody">
        <div class="dashboardItem clearfix">
            <span class="dashboardItem_topic_dashboard">DashBoard</span>
            <span class="dashboardItem_topic_version">Version 1.0</span>
            <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/dashboard_black.svg" alt="icon" /><span>Home</span>
                <span class="dashboardItem_navigation_greater">&gt;</span><span>Dashboard</span></span>
        </div>
        <div class="items row">
            <div class="items_infoBox col s12 m6 l3 clearfix">
                <div class="items_infoBox_inner flex">
                    <div class="items_infoBox_inner_left">hi</div>
                    <div class="items_infoBox_inner_right">hidfdfdf</div>
                </div>
            </div>
            <div class="items_infoBox col s12 m6 l3 clearfix">
                <div class="items_infoBox_inner">
                    hi
                </div>
            </div>
            <div class="items_infoBox col s12 m6 l3 clearfix">
                <div class="items_infoBox_inner">
                    hi
                </div>
            </div>
            <div class="items_infoBox col s12 m6 l3 clearfix">
                <div class="items_infoBox_inner">
                    hi
                </div>
            </div>
        </div>
        <div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-examplexx">
                        <thead>
                            <tr>
                                <th>Book Name</th>
                                <th>ISBN </th>
                                <th>Issued Date</th>
                                <th>Return Date</th>
                                <th>Fine in (USD)</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <tr class="odd gradeX">
                                        <td class="center">dfdfdf</td>
                                        <td class="center">dfdfdf</td>
                                        <td class="center">dfdf</td>
                                        <td class="center">dfdsgdgds</td>
                                        <td class="center">fdfdfdfdf</td>

                                    </tr>
                                    <tr class="odd gradeX">
                                        <td class="center">dfdfdf</td>
                                        <td class="center">dfdfdf</td>
                                        <td class="center">dfdf</td>
                                        <td class="center">dfdsgdgds</td>
                                        <td class="center">fdfdfdfdf</td>

                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>