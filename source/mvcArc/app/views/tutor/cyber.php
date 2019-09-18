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
            <img src="cyber.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px;text-align: center">Cyber Security</h1>
            <h3 style="padding: 0px 5%;margin-top: -10px;text-align: center;width: 90%"><b>Cybersecurity refers to a set
                    of techniques used to protect the integrity of networks, programs and data from attack, damage or
                    unauthorized access.</b></h3>
            <p style="padding: 0px 5%;margin-top: -10px;text-align:left;width: 90%">From a computing point of view,
                security comprises cybersecurity and physical security — both are used by enterprises to protect against
                unauthorized access to data centers and other computerized systems. Information security, which is
                designed to maintain the confidentiality, integrity, and availability of data, is a subset of
                cybersecurity. The use of cyber security can help prevent cyber attacks, data breaches, and identity
                theft and can aid in risk management.
                So when talking about cybersecurity, one might wonder “What are we trying to protect ourselves against?”
                Well, there are three main aspects we are trying to control, name:
                <ul style="text-align:left; padding:0px 10%; margin-top: -10px; width: 90%">
                    <li>Unauthorised Access</li>
                    <li>Unauthorised Deletion</li>
                    <li>Unauthorised Modification</li>
                </ul>
                <p style="padding: 0px 5%;margin-top: -10px;text-align:left;width: 90%">These three terms are synonymous
                    with the very commonly known CIA triad which stands for Confidentiality, Integrity, and
                    Availability. The CIA triad is also commonly referred to as the three pillars of security and most
                    of the security policies of an organization are built on these three principles.</p>
                <input type="button" value="Reserve" class="button" style="margin-left: calc(50% - 100px)" onclick="navFunction('<?php echo URLROOT ?>/tutor/reserve')">
        </div>
    </div>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>