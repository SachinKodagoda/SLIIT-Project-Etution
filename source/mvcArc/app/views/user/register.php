<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
</head>

<body>

    <div>
        <form action="<?php echo URLROOT; ?>/user/register" method="post" class="form" style="margin-top: 10px;">
            <div class="form_group">
                <label for="name" class="label">Name: <span class="important">*</span></label>
                <input type="text" autocomplete="off" name="name" class="form_control <?php echo (!empty($data['name_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['name']; ?>">
                <span class="form_validation_error"><?php echo $data['name_err']; ?></span>
            </div>
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

            <div class="form_group">
                <label for="confirm_password" class="label">Confirm Password: <span class="important">*</span></label>
                <input type="password" autocomplete="new-password" name="confirm_password" class="form_control <?php echo (!empty($data['confirm_password_err'])) ? 'error_input' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                <span class="form_validation_error"><?php echo $data['confirm_password_err']; ?></span>
            </div>

            <div class="form_group">
                <label for="country" class="label">Country:</label>
                <select name="country" id="subname" class="form_control">
                    <option value="Not Selected" selected>Not Selected </option>
                </select>
            </div>

            <div>
                <input type="submit" value="Register" class="form_submit_btn"><br />
                <div class="form_login_btn_cover">Do you have an account? <span onclick="navFunction('<?php echo URLROOT ?>/user/login')" class="form_login_btn" style="cursor:pointer;">Login</span></div>
            </div>
        </form>
    </div>
    <script src="<?php echo URLROOT ?>/vendor/js/testCountries.js"></script>
    <script>
        var xtr = document.getElementById("subname");
        for (var i = 0; i < items.length; i++) {
            var opt = document.createElement('option');
            opt.value = items[i].name;
            opt.innerHTML = items[i].name;
            xtr.appendChild(opt);
        }
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>