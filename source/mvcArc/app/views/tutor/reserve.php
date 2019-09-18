<?php require APPROOT . '/views/_includes/_header.php'; ?>
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.5);
        }

        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px auto;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form{
            width: 400px
        }
    </style>

</head>

<body>
    <!-- Reservation session form -->
    <div class="row">
        <div style="padding: 10px calc(50% - 175px);max-width: 600px;width: 350px">
            <h1 style="text-align: center; width: 400px;">Reserve Session</h1>
            <form method="post" action="#">
                <p>Meeting Date:</p>
                <input type="date" style="width: 350px">
                <p>Meeting Time:</p>
                <input type="time" style="width: 350px">
                <p>Session:</p>
                <input type="text" style="width: 350px" placeholder="Type here..">
                <p>Criteria:</p>
                <input type="radio" value="1" name="criteria" checked> Group
                <input type="radio" name="criteria" value="0"> Single
                <p>If you choose single please enter your email:</p>
                <input type="email" style="width: 350px" placeholder="Email.."><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>