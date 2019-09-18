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
    }

    body {
        background-color: rgba(0, 0, 0, 0.5);
    }

    input[type=button] {
        width: 10%;
        background-color: #4CAF50;
        color: white;
        padding: 0.5px 0.5px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>

<body>

    <div class="row">
        <div>
            <img src="img/tutor/web.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px">Web Technology</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px">Web development is the work involved in developing a web site for the Internet or an intranet.<br>
                Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, <br>
                and social network services.</h3>
            <input type="button" value="View" class="button" style="float: right;margin-right: 5%;margin-top: -50px" onclick="navFunction('<?php echo URLROOT ?>/tutor/web')">
            <a href="web.html"></a>
        </div>
    </div>
    <div class="row">
        <div>
            <img src="img/tutor/sys.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px">Information System Communication</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px">Communication and Information System, Master. Communication and Information System focuses on information processing and communication system,<br>
                using mathematical method and computer technology as the main tool, studies a variety of information processing, modern digital communication and <br>
                broadband network technologies.</h3>
            <input type="button" value="View" class="button" style="float: right;margin-right: 5%;margin-top: -50px" onclick="navFunction('<?php echo URLROOT ?>/tutor/sys')">
        </div>
    </div>
    <div class="row">
        <div>
            <img src="img/tutor/ict.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px">Network</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px">A computer network is a digital telecommunications network which allows nodes to share resources. In computer networks, computing devices exchange<br>
                data with each other using connections between nodes. </h3>
            <input type="button" value="View" class="button" style="float: right;margin-right: 5%;margin-top: -50px" onclick="navFunction('<?php echo URLROOT ?>/tutor/net')">
        </div>
    </div>
    <div class="row">
        <div>
            <img src="img/tutor/std.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px">Introduction Programming Languages</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px">Introduction to Programming Languages. A computer is a computational device which is used to process the data under the control of a computer program.<br>
                Program is a sequence of instruction along with data. ... Between high-level language and machine language there are assembly language also called <br>
                olic machine code.</h3>
            <input type="button" value="View" class="button" style="float: right;margin-right: 5%;margin-top: -50px" onclick="navFunction('<?php echo URLROOT ?>/tutor/ip')">
        </div>
    </div>
    <div class="row">
        <div>
            <img src="img/tutor/cyber.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px">Cyber Security</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px">Cybersecurity refers to a set of techniques used to protect the integrity of networks, programs and data from attack, damage or unauthorized access.<br>
                The use of cyber security can help prevent cyber attacks, data breaches, and identity theft and can aid in risk management.</h3>
            <input type="button" value="View" class="button" style="float: right;margin-right: 5%;margin-top: -30px" onclick="navFunction('<?php echo URLROOT ?>/tutor/cyber')">
        </div>
    </div>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>