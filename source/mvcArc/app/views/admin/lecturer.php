<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/lecturer.css" />
</head>

<body>

    <?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

    <div class="clearfix">
        <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

        <div class="rightBody">
            <div class="dashboardItem clearfix">
                <span class="dashboardItem_topic_dashboard">Lecturer</span>
                <span class="dashboardItem_topic_version">Details of the Lecturers</span>
                <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                    <span class="dashboardItem_navigation_greater">&gt;</span><span>Lecturer</span></span>
            </div>
            <div class="panel_responsive">
                <?php flash('delete_message'); ?>
                <?php flash('update_success'); ?>
                <!-- Advanced Tables -->
                <div class="panel">
                    <div class="panel-head">
                        Authors Listing
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>USER TYPE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['lecturers'] as $userData) : ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $userData->id; ?></td>
                                            <td class="center"><?php echo $userData->name; ?></td>
                                            <td class="center"><?php echo $userData->email; ?></td>
                                            <td class="center"><?php echo $userData->userType; ?></td>
                                            <td class="center">


                                                <form id="editFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/lecturer_edit/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_blue" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-edit icon_margin"></i>Edit
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/lecturer_delete/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-pencil icon_margin"></i>Delete
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/lecturer_change_state/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red <?php echo $userData->status == 1 ? 'status_active' : 'status_disabled' ?>" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')" style="width:100px;">
                                                        <?php
                                                            if ($userData->status == 1) {
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
            $('#lecturerActive').addClass('active');
        });
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>