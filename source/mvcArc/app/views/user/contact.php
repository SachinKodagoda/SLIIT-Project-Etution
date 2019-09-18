<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/user.css" />
<style>
    * {
        border-radius: 6px;
        box-sizing: border-box;
        border: none;
    }

    .container {
        background-color: grey;
        padding: 20px;
        width: 45%;
    }

    img {
        width: 30px;
        height: 30px;
        margin: 4px 4px 4px 0;
    }


    .button {
        background-color: black;
        color: white;
        padding: 11px 19px;
        border: none;
        border-radius: 6px;
        margin: 8px;
        width: 40%;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    input[type=reset]:hover {
        background-color: #45a049;
    }

    input[type=text] {
        margin: 4px 4px 4px 0;
        height: 35px;
    }

    input[type=email] {
        margin: 4px 4px 4px 0;
        height: 35px;
    }

    input[type=tel] {
        margin: 4px 4px 4px 0;
        height: 35px;
    }

    input[type=textarea] {
        margin: 4px 4px 4px 0;
        height: 35px;
    }

    /* @media(max-width:768px) {
        float: none;
        width: 100%;
    } */
</style>
</head>

<body>

    <?php require APPROOT . '/views/_includes/_navbar.php'; ?>
    <div class="container">
        <form name="userform">
            <label for="Name">Name</label><br>
            <!-- <img src="img/user/username.png"> -->
            <input type="text" name="usernamefirst" id="unamef" placeholder="First name" required>
            <input type="text" name="usernamelast" id="unamel" placeholder="Last name" required><br>
            <label for="Email">Email</label><br>
            <!-- <img src="img/user/email.png"> -->
            <input type="email" name="useremail" id="uemail" placeholder="enter email" required><br>
            <label for="Telephone">Telephone</label><br>
            <!-- <img src="img/user/telephone.png"> -->
            <input type="tel" name="userphone" id="Usertelephone" placeholder="Enter valid 10 digit number
				"><br>
            <label for="Message">Message</label><br>
            <!-- <img src="img/user/message.png"> -->
            <input type="textarea" name="message" id="usermessage" placeholder="Enter your message" style="height:100px"><br>
            <input type="Submit" value="Submit" id="sub" class="button" onclick="validate()">
            <input type="Reset" value="Reset" id="reset" class="button">
        </form>
    </div>
    <script>
        function validate() {
            if(document.userform.usernamefirst.value=="") {
                alert("Please provide first name");
                document.userform.usernamefirst.focus();
                return false;
            }

            if(document.userform.usernamelast.value=="") {
                alert("Please provide last name");
                document.userform.usernamelast.focus();
                return false;
            }

            if(document.userform.usernamelast.value=="") {
                alert("Please provide last name");
                document.userform.usernamelast.focus();
                return false;
            }

            if(document.userform.userphone.length !=10 || document.userform.userphone.value < 0) {
                alert("Please insert a valid number");
                document.userform.userphone.focus();
                return false;
            }

            return(true);
        }
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>