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
            <h1 style="padding: 0px 5%;margin-top: -10px;text-align: center">Introduction Programming</h1>
            <p style="padding: 0px 5%;margin-top: -10px;text-align: left;width: 90%">Programming is the process of
                creating a set of instructions that tell a computer how to perform a task. Programming can be done using
                a variety of computer "languages," such as SQL, Java,<br>
                Python, and C++. Created by Pamela Fox.</p>
            <p style="padding: 0px 5%;margin-top: -10px;text-align: left;width: 90%">Programs are commonly referred to
                as software. Software is essential to a computer because
                it controls everything the computer does. All of the software that we use to make our computers useful
                is created by individuals working as programmers or software developers. A
                programmer, or software developer, is a person with the training and skills necessary to
                design, create, and test computer programs. Computer programming is an exciting and
                rewarding career. Today, you will find programmers’ work used in business, medicine, government, law
                enforcement, agriculture, academics, entertainment, and many other fields.</p>

            <input type="button" value="Reserve" class="button" style="margin-left: calc(50% - 100px)" onclick="navFunction('<?php echo URLROOT ?>/tutor/reserve',true)">
        </div>
    </div>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>