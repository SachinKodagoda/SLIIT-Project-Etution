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
            <img src="sys.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px;text-align: center">Information System Communication</h1>
            <p style="padding: 0px 5%;margin-top: -10px;text-align: center;width: 90%">A system is a group of procedures
                and different elements that work together in order to complete a task. Now we can add on to this to get
                information systems. Information systems are much the same. There are elements and procedures to work to
                complete a task. The difference is information systems are used to generate information for the users on
                a need basis. Information systems manage and process data as soon as they're created. They can also be
                used for long term planning or just the day to day work. While systems are great and can ease your life,
                they are static, which means someone will need to change the systems when new needs arise. This is
                called system development. While it could be costly, there really is a need for system development since
                things change constantly, such as any time there are new laws or a new policy within the company.

            </p>
            <input type="button" value="Reserve" class="button" style="margin-left: calc(50% - 100px)" onclick="navFunction('<?php echo URLROOT ?>/tutor/reserve',true)">
        </div>
    </div>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>