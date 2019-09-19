<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/member.css" />
</head>
<body>

<?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

<div class="clearfix">
    <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

    <div class="rightBody">
        <div class="dashboardItem clearfix">
            <span class="dashboardItem_topic_dashboard">Member</span>
            <span class="dashboardItem_topic_version">Details of the members</span>
            <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                <span class="dashboardItem_navigation_greater">&gt;</span><span>Member</span></span>
        </div>
        <div class="panel_responsive">
            <?php flash('delete_message'); ?>
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
                                <?php foreach ($data['test'] as $userData) : ?>
                                <tr class="odd gradeX">
                                    <td class="center"><?php echo $userData->id; ?></td>
                                    <td class="center"><?php echo $userData->name; ?></td>
                                    <td class="center"><?php echo $userData->email; ?></td>
                                    <td class="center"><?php echo $userData->userType; ?></td>
                                    <td class="center">


                                        <form id="editFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/member_edit/<?php echo $userData->id; ?>" method="post">
                                            <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                            <button class="table_btn btn_blue" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                <i class="fa fa-edit"></i>Edit
                                            </button>
                                        </form>
                                        <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/delete/<?php echo $userData->id; ?>" method="post">
                                            <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                            <button class="table_btn btn_red" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                <i class="fa fa-pencil"></i>Delete
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
            $('#memberActive').addClass('active');
        }
    );
</script>
<?php require APPROOT . '/views/_includes/_footer.php'; ?>