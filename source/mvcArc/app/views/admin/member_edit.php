<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/member_edit.css" />
</head>

<body>

    <?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

    <div class="clearfix">
        <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

        <div class="rightBody">
            <div class="dashboardItem clearfix">
                <span class="dashboardItem_topic_dashboard">Members</span>
                <span class="dashboardItem_topic_version">Edit user details</span>
                <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                    <span class="dashboardItem_navigation_greater">&gt;</span><span>Members</span></span>
            </div>
            <div>
                <form action="<?php echo URLROOT; ?>/admin/member_edit/<?php echo $data['member_id'] ?>" method="post" class="form" id="form_user_edit" style="margin-top: 0">
                    <div class="form_group">
                        <label for="member_name" class="label">Name:</label>
                        <input type="text" autocomplete="off" name="name" class="form_control <?php echo (!empty($data['member_name_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['member_name']; ?>">
                        <span class="form_validation_error"><?php echo $data['member_name_err']; ?></span>
                    </div>
                    <div class="form_group">
                        <label for="email" class="label">Email:</label>
                        <input type="email" autocomplete="off" name="email" class="form_control <?php echo (!empty($data['member_email_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['member_email']; ?>">
                        <span class="form_validation_error"><?php echo $data['member_email_err']; ?></span>
                    </div>
                    <div class="form_group">
                        <label for="type" class="label">Type:</label>
                        <select class="form_control" name="type">
                            <option value="admin" <?php echo $data['member_userType'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="member" <?php echo $data['member_userType'] == 'member' ? 'selected' : '' ?>>Member</option>
                            <option value="advertiser_agent" <?php echo $data['member_userType'] == 'advertiser_agent' ? 'selected' : '' ?>>Advertiser Agent</option>
                            <option value="visitor" <?php echo $data['member_userType'] == 'visitor' ? 'selected' : '' ?>>Visitor</option>
                            <option value="developer" <?php echo $data['member_userType'] == 'developer' ? 'selected' : '' ?>>Developer</option>
                        </select>
                    </div>


                    <div class="form_group">
                        <label for="password" class="label">Password:</label>
                        <input type="text" autocomplete="off" name="password" class="form_control <?php echo (!empty($data['member_password_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['member_password']; ?>">
                        <span class="form_validation_error"><?php echo $data['member_password_err']; ?></span>
                    </div>


                    <!-- <div onclick="submitMe('form_user_edit')" class="form_submit_btn"> -->
                    <div>
                        <input type="submit" value="Update" class="form_submit_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#memberActive').addClass('active');
        });
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>