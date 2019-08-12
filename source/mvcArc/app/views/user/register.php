<?php require APPROOT . '/views/_includes/_header.php'; ?>
<div>
    <form action="<?php echo URLROOT; ?>/user/register" method="post" class="form">
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

        <div>
            <input type="submit" value="Register" class="form_submit_btn"><br />
            <div class="form_login_btn_cover">Do you have an account? <span onclick="navFunction('<?php echo URLROOT ?>/user/login')" class="form_login_btn">Login</span></div>
        </div>
    </form>
</div>
<?php require APPROOT . '/views/_includes/_footer.php'; ?>