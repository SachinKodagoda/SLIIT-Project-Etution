<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
<style>
    body {
        min-height: 100vh;
        background-image: linear-gradient(135deg, #01143f 0, #014a7e 60%, #052c58 100%);
        font-family: 'Quicksand', sans-serif;
    }

    .flex-container {
        display: flex;
        flex-wrap: wrap;
        width: 82%;
        margin: auto;
        justify-content: center;
        background: rgba(255, 255, 255, .1);
        border-radius: 20px;
        box-shadow: 0px 0px 4px #333;
        min-height: 500px;
        padding: 30px
    }

    .item_x {
        height: auto;
        width: 200px;
        margin: 20px;
    }

    .item_x>img {
        width: 200px;
        height: 200px;
        border: 4px solid #fff;
        cursor: pointer;
    }

    .topic1 {
        color: #fff;
        font-weight: 900;
        text-align: center;
        font-size: 30px;
        margin: 20px;
    }

    .item_x_description_x {
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        margin: 10px 0;
        cursor: default;
        background-color: transparent !important;
    }

    .input_search {
        width: 70%;
        background: transparent;
        margin: 20px auto;
        font-size: 16px;
        border: 1px solid #fff;
        border-radius: 50px;
        display: block;
        outline: none;
        padding: 1em 2em;
        color: #fff;
    }

    .topic2 {
        color: #fff;
        text-align: center;
        margin: 10px 0;
        width: 100%;
        font-weight: 500;
        font-size: 30px;
    }

    .topnav_item_x.active {
        background-color: #242939;
        color: white;
    }
</style>
<link rel="stylesheet" href="<?php echo URLROOT ?>/vendor/css/grt-youtube-popup.css">
</head>

<body>
    <?php require APPROOT . '/views/_includes/_navbar.php'; ?>
    <div class="topic1"> Tutorials </div>
    <div>
        <form action="" method="POST">
            <input type="text" class="input_search" />
        </form>
    </div>

    <div class="flex-container">
        <div class="topic2">C++ tutorials</div>
        <div class="item_x youtube-link" youtubeid="OTroAxvRNbw">
            <img src="http://img.youtube.com/vi/OTroAxvRNbw/0.jpg">
            <div class="item_x_description_x">1) C++ Introduction</div>
        </div>
        <div class="item_x youtube-link" youtubeid="h4kUiFOb_v0">
            <img src="http://img.youtube.com/vi/h4kUiFOb_v0/0.jpg">
            <div class="item_x_description_x">2) OOP Introduction</div>
        </div>
        <div class="item_x youtube-link" youtubeid="UOB7-B2MfwA">
            <img src="http://img.youtube.com/vi/UOB7-B2MfwA/0.jpg">
            <div class="item_x_description_x">3) Smart Pointers</div>
        </div>
        <div class="item_x youtube-link" youtubeid="HqnVgvBR4pA">
            <img src="http://img.youtube.com/vi/HqnVgvBR4pA/0.jpg">
            <div class="item_x_description_x">4) Friend function</div>
        </div>
        <div class="item_x youtube-link" youtubeid="hAA8FBq2bA4">
            <img src="http://img.youtube.com/vi/hAA8FBq2bA4/0.jpg" youtubeid="hAA8FBq2bA4">
            <div class="item_x_description_x">5) Constructors</div>
        </div>
        <div class="item_x youtube-link" youtubeid="w35ObkSRq48">
            <img src="http://img.youtube.com/vi/w35ObkSRq48/0.jpg">
            <div class="item_x_description_x">6) Pointer to object</div>
        </div>
        <div class="item_x youtube-link" youtubeid="08QSylWv6jM">
            <img src="http://img.youtube.com/vi/08QSylWv6jM/0.jpg">
            <div class="item_x_description_x">7) Stack data structure</div>
        </div>
        <div class="item_x youtube-link" youtubeid="yKATaptz3Dc">
            <img src="http://img.youtube.com/vi/yKATaptz3Dc/0.jpg">
            <div class="item_x_description_x">7) C++ Hello world</div>
        </div>
        <div class="topic2">JAVA Tutorials</div>
        <div class="item_x youtube-link" youtubeid="IsLyduxZ9sc">
            <img src="http://img.youtube.com/vi/IsLyduxZ9sc/0.jpg">
            <div class="item_x_description_x">1) Introduction to JAVA</div>
        </div>
        <div class="item_x youtube-link" youtubeid="-HafzawNlUo">
            <img src="http://img.youtube.com/vi/-HafzawNlUo/0.jpg">
            <div class="item_x_description_x">2) OOC Concepts JAVA</div>
        </div>
        <div class="item_x youtube-link" youtubeid="YEzX3l6PXCk">
            <img src="http://img.youtube.com/vi/YEzX3l6PXCk/0.jpg">
            <div class="item_x_description_x">3) Introduction to applets</div>
        </div>
        <div class="item_x youtube-link" youtubeid="t1-YZ6bF-g0">
            <img src="http://img.youtube.com/vi/t1-YZ6bF-g0/0.jpg">
            <div class="item_x_description_x">4) JAVA 8 Streams</div>
        </div>
        <div class="item_x youtube-link" youtubeid="3YoKVswJsKI">
            <img src="http://img.youtube.com/vi/3YoKVswJsKI/0.jpg">
            <div class="item_x_description_x">5) Sockect programming </div>
        </div>
        <div class="item_x youtube-link" youtubeid="d3QbptJRln4">
            <img src="http://img.youtube.com/vi/d3QbptJRln4/0.jpg">
            <div class="item_x_description_x">6) Java List</div>
        </div>
        <div class="item_x youtube-link" youtubeid="x-fp3DZRZGA">
            <img src="http://img.youtube.com/vi/x-fp3DZRZGA/0.jpg">
            <div class="item_x_description_x">7) Thread priority in JAVA</div>
        </div>
        <div class="item_x youtube-link" youtubeid="t67UVzc3y6U">
            <img src="http://img.youtube.com/vi/t67UVzc3y6U/0.jpg" youtubeid="t67UVzc3y6U">
            <div class="item_x_description_x">8) Format Strings</div>
        </div>
        <div class="topic2">JavaScript Tutorials</div>
        <div class="item_x youtube-link" youtubeid="vEROU2XtPR8">
            <img src="http://img.youtube.com/vi/vEROU2XtPR8/0.jpg">
            <div class="item_x_description_x">1) Javascript Fundamentals</div>
        </div>
        <div class="item_x youtube-link" youtubeid="wc5k2AMPED0">
            <img src="http://img.youtube.com/vi/wc5k2AMPED0/0.jpg">
            <div class="item_x_description_x">2) Simple form animation in JavaScript</div>
        </div>
        <div class="item_x youtube-link" youtubeid="hdI2bqOjy3c">
            <img src="http://img.youtube.com/vi/hdI2bqOjy3c/0.jpg">
            <div class="item_x_description_x">3) Simple form animation in JavaScript</div>
        </div>
        <div class="item_x youtube-link" youtubeid="0ik6X4DJKCc">
            <img src="http://img.youtube.com/vi/0ik6X4DJKCc/0.jpg">
            <div class="item_x_description_x">4)JavaScript DOM</div>
        </div>
        <div class="item_x youtube-link" youtubeid="Q6bY3FvBxMk">
            <img src="http://img.youtube.com/vi/Q6bY3FvBxMk/0.jpg">
            <div class="item_x_description_x">5)Why learn JavaScript</div>
        </div>
        <div class="item_x youtube-link" youtubeid="mgrAmgejz8A">
            <img src="http://img.youtube.com/vi/mgrAmgejz8A/0.jpg">
            <div class="item_x_description_x">6) Encription in JavaScript</div>
        </div>
        <div class="item_x youtube-link" youtubeid="Z6O_XdfCBEo">
            <img src="http://img.youtube.com/vi/Z6O_XdfCBEo/0.jpg">
            <div class="item_x_description_x">7) Switch statements</div>
        </div>
        <div class="item_x youtube-link" youtubeid="rjVzGpSxgZQ">
            <img src="http://img.youtube.com/vi/rjVzGpSxgZQ/0.jpg">
            <div class="item_x_description_x">8) Java Script Functions</div>
        </div>
    </div>



    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="grt-youtube-popup.js"></script>
    <script src="<?php echo URLROOT ?>/vendor/js/grt-youtube-popup.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(".youtube-link").grtyoutube({
            autoPlay: true,
            theme: "dark"
        });
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>