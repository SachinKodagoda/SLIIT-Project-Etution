<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
</head>

<body>

    <div>
        <?php flash('register_success'); ?>
        <?php flash('access_denied'); ?>
        <?php flash('please_login'); ?>
        <form action="<?php echo URLROOT; ?>/user/login" method="post" class="form">
            <div class="form_group">
                <label for="email" class="label">Email: <span class="important">*</span></label>
                <input type="email" autocomplete="off" name="email" class="form_control <?php echo (!empty($data['email_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['email']; ?>">
                <span class="form_validation_error"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form_group">
                <label for="password" class="label">Password: <span class="important">*</span></label>
                <input type="password" autocomplete="new-password" name="password" class="form_control <?php echo (!empty($data['password_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['password']; ?>">
                <span class="form_validation_error"><?php echo $data['password_err']; ?></span>
            </div>

            <div>
                <input type="submit" value="Login" class="form_submit_btn"><br />
                <div class="form_login_btn_cover">Don't you have an account? <span onclick="navFunction('<?php echo URLROOT ?>/user/register')" class="form_login_btn" style="cursor:pointer;">Register</span></div>
            </div>
        </form>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>