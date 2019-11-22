<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/admin_index.css" />
</head>

<body>

    <?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

    <div class="clearfix">
        <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>


        <div class="rightBody">
            <div class="dashboardItem clearfix">
                <span class="dashboardItem_topic_dashboard">Admin</span>
                <span class="dashboardItem_topic_version">Details of the admin</span>
                <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                    <span class="dashboardItem_navigation_greater">&gt;</span><span>Admin</span></span>
            </div>
            <?php flash('delete_message'); ?>
            <?php flash('update_success'); ?>

            <div class="admin_profile">
                <form action="<?php echo URLROOT; ?>/admin/index_file" method="post" enctype="multipart/form-data" class="admin_profile_img_cover" onclick="uploadFunction()" id="fileUploaderx">
                    <img src="<?php echo URLROOT ?>/img/uploads/<?php echo $data['admin']->img_name ?>" alt="icon" class="admin_profile_img" id="imgOfUploader" />
                    <input type="file" name="fileToUpload" id="fileToUpload" class="admin_profile_uploadbtn">
                </form>
                <div class="admin_profile_name"><?php echo $data['admin']->name; ?></div>
                <div class="admin_profile_subname">Admin of the E-tution System</div>
                <hr class="profile_table_top_hr" />
                <table class="profile_table">
                    <tr class="profile_row">
                        <td class="profile_column">Email :</td>
                        <td class="profile_column"><?php echo $data['admin']->email; ?></td>
                    </tr>
                    <tr class="profile_row">
                        <td class="profile_column">Joined Date :</td>
                        <td class="profile_column"><?php echo $data['admin']->created_at; ?></td>
                    </tr>
                    <tr class="profile_row">
                        <td class="profile_column">Country :</td>
                        <td class="profile_column"><?php echo $data['admin']->country; ?></td>
                    </tr>
                </table>
                <form class="online_status_form" method="post" action="<?php echo URLROOT; ?>/admin/status_change" id="onlineStatusForm">
                    <input type="radio" name="onlineStatus" value="1" checked class="online_status_form_input" onclick="radioClick()" <?php echo $data['admin']->online_status == 1 ? "checked" : ""; ?>> Online
                    <input type="radio" name="onlineStatus" value="2" class="online_status_form_input" onclick="radioClick()" <?php echo $data['admin']->online_status == 2 ? "checked" : ""; ?>> Offline
                    <input type="radio" name="onlineStatus" value="3" class="online_status_form_input" onclick="radioClick()" <?php echo $data['admin']->online_status == 3 ? "checked" : ""; ?>> Away
                </form>
            </div>
            <div class="panel_responsive">

                <!-- Advanced Tables -->
                <div class="panel">
                    <div class="panel-head">
                        Member List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>CREATE</th>
                                        <th>COUNTRY</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                    <?php foreach ($data['admins'] as $userData) : ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $userData->id; ?></td>
                                            <td class="center"><?php echo $userData->name; ?></td>
                                            <td class="center"><?php echo $userData->email; ?></td>
                                            <td class="center"><?php echo date("Y-M", strtotime($userData->created_at)); ?></td>
                                            <td class="center"><?php echo $userData->country; ?></td>
                                            <td class="center">
                                                <form id="editFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/admin_edit/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_blue" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-edit icon_margin"></i>Edit
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/admin_delete/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-pencil icon_margin"></i>Delete
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/admin_change_state/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red <?php echo $userData->active_status == 1 ? 'status_active' : 'status_disabled' ?>" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')" style="width:100px;">
                                                        <?php
                                                            if ($userData->active_status == 1) {
                                                                echo "Actived";
                                                            } else {
                                                                echo "Disabled";
                                                            };
                                                            ?>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#adminActive').addClass('active');
        });
        var filebtn = document.getElementById('fileToUpload');
        var fileUploaderx = document.getElementById('fileUploaderx');
        var onlineStatusForm = document.getElementById('onlineStatusForm');

        function uploadFunction() {
            filebtn.value = "";
            filebtn.click();
        }

        filebtn.onchange = function() {
            var fileName = filebtn.value.split('\\')[filebtn.value.split('\\').length - 1];
            fileUploaderx.submit();
        }

        function radioClick() {
            onlineStatusForm.submit();
            // this.blur();
            // this.focus();
        }
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>