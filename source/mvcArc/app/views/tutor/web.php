<?php require APPROOT . '/views/_includes/_header.php'; ?>
<style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        background-color: #e7e7e7;
        color: black;
        width: 200px;
    }

    body {
        background-color: rgba(0, 0, 0, 0.5);
    }
</style>

</head>

<body>

    <div class="row">
        <div style="word-wrap: break-word;">
            <img src="std.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px;text-align: center">Web Technology</h1>
            <p style="padding: 0px 5%;margin-top: -10px;text-align: left;width: 90%">
                You probably know that computers don't communicate with each other the way that people do. Instead, computers require codes, or directions. These binary codes and commands allow computers to process needed information. Every second, billions upon billions of ones and zeros are processed in order to provide you with the information you need.

                So what does that have to do with your ability to post your latest pictures online? Everything.

                The methods by which computers communicate with each other through the use of markup languages and multimedia packages is known as web technology. In the past few decades, web technology has undergone a dramatic transition, from a few marked up web pages to the ability to do very specific work on a network without interruption. Let's look at some examples of web technology.
            </p>
            <input type="button" value="Reserve" class="button" style="margin-left: calc(50% - 100px)" onclick="navFunction('<?php echo URLROOT ?>/tutor/reserve')">
        </div>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>