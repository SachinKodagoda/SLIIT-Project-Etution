<?php require APPROOT . '/views/includes/header.php'; ?>
<div>
    <form action="<?php echo URLROOT; ?>/users/login" method="post" class="form">
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
            <div class="form_login_btn_cover">Don't you have an account? <a href="<?php echo URLROOT; ?>/users/register" class="form_login_btn">Register</a></div>
        </div>
    </form>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>