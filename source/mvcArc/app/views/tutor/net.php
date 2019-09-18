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
            <img src="ict.jpg" width="90%" style="padding: 10px 5%">
            <h1 style="padding: 0px 5%;margin-top: -10px;text-align: center">Network</h1>
            <p style="padding: 0px 5%;margin-top: -10px;text-align: left;width: 90%">Networking is the practice of
                linking two or more computing devices together for the purpose of sharing data. Networks are built with
                a mix of computer hardware and computer software.
                A network, is a collection of computers and other hardware components interconnected by communication
                channels that allow sharing of resources and information.<br>

                <p style="padding: 0px 5%;margin-top: -10px;text-align: left;width: 90%">The following topics are
                    included –
                    <ul style="text-align:left; padding:0px 10%; margin-top: -10px; width: 90%">
                        <li>What is Networking</li>
                        <li>Advantages and Disadvantages</li>
                        <li>Network Characteristics</li>
                        <li>Network Models Peer to Peer and Client and Server</li>
                        <li>Network Types LAN WAN MAN PAN</li>
                        <li>Network Topologies Bus Star Ring</li>
                        <li>Internet connection DSL Cable Serial Link</li>
                        <li>Network Media</li>
                    </ul>
                </p>
                <input type="button" value="Reserve" class="button" style="margin-left: calc(50% - 100px)" onclick="navFunction('<?php echo URLROOT ?>/tutor/reserve')">
        </div>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>