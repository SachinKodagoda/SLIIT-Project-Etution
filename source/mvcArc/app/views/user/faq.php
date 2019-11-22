<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/vendor/css/styles.css" />
<script src="<?php echo URLROOT ?>/vendor/js/js.js"></script>
</head>

<body>

    <?php require APPROOT . '/views/_includes/_navbar.php'; ?>
    <!-- <div class="topnav">
        <a href=""> Home </a>
        <a href=""> News</a>
        <a href=""> FAQ's </a>
        <a href=""> About Us</a>
    </div> -->

    <br>

    <img id="img1" class="img" src="<?php echo URLROOT ?>/img/user/help1.jpg">

    <button id="btn1" class="btn1" onclick="loadData1()"></button>
    <button id="btn2" class="btn2" onclick="loadData2()"></button>

    <br>



    <h3 class="edit1"> Frequently Asked Questions</h3>

    <div class="column middle">
        <a href="" class="question"> How to Register? </a>
        <br>
        In home page right corner there is a sign up button. Click on it and then You shold enter your detalis in the form you get. after fliinig all detais submit then you get an email. in email contain your username and password. Using this username and password you can login.
        <br> <br>
        <a href="" class="question"> What are the benifits gain by students from e-tuition </a>
        <br>
        once you registered to the e-tution you can,
        <ul class="active" type="square">
            <li> registered member can reserve tuition sessions according to their desires. </li>
            <li> You can get help from well qualified lectures to solve your subject related questions. </li>
            <li> deliver online video sessions without any lag.</li>
            <li>rich library which contains videos,Articles,Books belongs to various subjects. </li>
            <li>can ask questions from the customer care agents who are available 24/7.</li>
            <li>can pre-reserve video session time slots using the system. </li>
        </ul>
        <br>

        <a href="" class="question"> For what levels of students e-tuition provide their service? </a>
        <br>
        Students who studied and interested in IT realated matters.
        <br> <br>
        <a href="" class="question"> How much does it cost to get tuitions online? </a>
        <br>
        We don't charge any payments for viodoes and paper downloads but we charge for online vedio sessions. The amount depend on the subject and time of vedio session.
        <br> <br>
        <a href="" class="question"> What are the payments methods. </a>
        <br>
        You can pay by using credit or debit cards.
        <br> <br>
        <a href="" class="question"> Is it possible to enroll multiple courses at same time. </a>
        <br>
        Yes,It's possible.
        <br> <br>
        <a href="" class="question"> If anyone is not satisfied with the online vedio session, will the fees be repaid? </a>
        <br>
        We have well qualified lectures so it's very unlikely. in the rarest situation students has to be informed to the lectures then they will find alternative sloution for it.
        <br> <br>
        <a href="" class="question"> How to reserve online vedio sessions? </a>
        <br>
        First of all you must need to register. Then you can reserve according to your preferance.
        <br> <br>
        <a href="" class="question"> How to Download vedioes from your site? </a>
        <br>
        First of all it is must to become a registered member. After you can download vedios.
        <br> <br>
        <a href="" class="question"> Is it possible to conduct group vedio sessions with lectures? </a>
        <br>
        Yes,During your reservation you can select group vedio session or individual session according to your choise .
        <br> <br>
        <a href="" class="question"> What is more cost? group vedio session or Individual vedio session </a>
        <br>
        It's dependent but most of the time individual vedio session is more cost than Group sessions.
    </div>

    <br>

    <div>
        <img src="<?php echo URLROOT ?>/img/user/pic.png" class="img22" </div> <div class="form-all">
        <form method="get" action="action_submit.php">

            Name:<br>
            <img class="form-img" src="<?php echo URLROOT ?>/img/user/name.jpg">
            <input class="form-input" type="text" placeholder="First" name="fname"> &nbsp;
            <input class="form-input" type="text" placeholder="Last" name="lname">
            <br><br>

            Email:<br>
            <img class="form-img" src="<?php echo URLROOT ?>/img/user/email.jpg">
            <input class="form-email" type="email" name="email">
            <br><br>

            Telephone:<br>
            <img class="form-img" src="<?php echo URLROOT ?>/img/user/tel.jpg">
            <input class="form-code" type="tel" placeholder="Country-code" name="phone1">
            <input class="form-tel" type="text" placeholder="Phone Number" name="phone2">
            <br><br>

            Message:<br>
            <img class="form-img" src="<?php echo URLROOT ?>/img/user/message.jpg">
            <input class="form-message" type="text" name="msg">
            <br><br>

            <input class="form-submit" type="submit" value="Submit">
        </form>
    </div>



    </span>

    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>