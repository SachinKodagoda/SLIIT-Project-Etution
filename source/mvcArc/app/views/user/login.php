<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
<!-- <script src="https://www.google.com/recaptcha/api.js?render=6Lcq97kUAAAAAG2LomeCOl1J9b4hDrUKKP24Dq6c"></script> -->
<script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('check_cap', {
            'sitekey': '6LfqX7sUAAAAALkKgElycEMaJ2MZY5xA19GzN67b',
            'callback': verifyCallback,
            'theme': 'light'
        });
    };


</script>
</head>

<body>

    <div>
        <?php flash('register_success'); ?>
        <?php flash('access_denied'); ?>
        <?php flash('please_login'); ?>
        <form action="<?php echo URLROOT; ?>/user/login" method="post" class="form" id="login_form_submit">
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
            <div class="g-recaptcha" data-sitekey="6LfqX7sUAAAAALkKgElycEMaJ2MZY5xA19GzN67b" id="check_cap"></div>
            <div>
                <!-- <input type="submit" value="Login" class="form_submit_btn"><br /> -->
                <div class="form_submit_btn" onclick="submitForm()">Login</div>
                <div class="form_login_btn_cover">Don't you have an account? <span onclick="navFunction('<?php echo URLROOT ?>/user/register',false)" class="form_login_btn" style="cursor:pointer;">Register</span></div>
            </div>
        </form>
    </div>
    <!-- <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lcq97kUAAAAAG2LomeCOl1J9b4hDrUKKP24Dq6c', {
                action: 'homepage'
            }).then(function(token) {
                console.log("dammed");
            });
        });
    </script> -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script>
        var forword = false;

        var verifyCallback = function (){
            forword = true;
        }
        var submitForm = function (){
            if(forword){
                login_form_submit.submit();
            }
        }
    </script>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>