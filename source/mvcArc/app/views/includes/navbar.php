<div class="topnav clearfix" id="myTopnav">
    <div class="topnav_item active" onclick="navFunction('<?php echo URLROOT ?>')">Home</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/tutorials')">Tutorials</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/faq')">FAQ</div>
    <div class="topnav_item " onclick="navFunction('<?php echo URLROOT ?>/pages/contact')">Contact</div>
    
    <?php if (isset($_SESSION['user_id'])) : ?>
        <div class="topnav_item float-right" onclick="navFunction('<?php echo URLROOT ?>/users/logout')">Logout</div>
        <div class="loggedUserName">Hi, <span id="greeting"></span>  <?php echo $_SESSION['user_name'] ?></div>
    <?php else : ?>
        <div class="topnav_item float-right" onclick="navFunction('<?php echo URLROOT ?>/users/login')">Login</div>
    <?php endif; ?>
    <div class="topnav_item_humIcon " onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </div>
</div>