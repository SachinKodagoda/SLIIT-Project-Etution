<?php require APPROOT . '/views/_includes/_header.php'; ?>
<style>
    body {
        background: #F1F1F1;
    }

    .lecturer_leftMenu {
        background: #fff;
        width: 360px;
        height: calc(100vh - 40px);
        float: left;
        margin: 20px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
    }

    .lecturer_rightMenu {
        background: #fff;
        width: calc(100% - 440px);
        height: calc(100vh - 40px);
        float: left;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
        margin: 20px;
        border-radius: 10px;
        padding: 10px;
        overflow: auto;
    }

    .lecturer_input {
        display: block;
        width: 100%;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        padding: .5rem;
    }

    .lecturer_input:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }

    .lecturer_form {
        max-width: 300px;
        height: auto;
        display: block;
        margin: auto;
        margin-top: 30px;
    }

    .leturer_input_group {
        margin-bottom: 10px
    }

    .lecturer_submit {
        display: inline-block;
        width: 100%;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        color: #fff;
        background-color: #007bff;
        border: 1px solid #007bff;
        margin-bottom: .5rem;
        margin-top: 1rem;
    }

    .lecturer_submit:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .lecturer_submit:active {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, .5);
        background-color: #0062cc;
        border-color: #005cbf;
    }

    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }


    table#t01 tr:nth-child(even) {
        background-color: #eee;
    }

    table#t01 tr:nth-child(odd) {
        background-color: #fff;
    }

    table#t01 th {
        background-color: black;
        color: white;
    }

    @media only screen and (max-width: 720px) {
        .lecturer_leftMenu {
            width: calc(100% - 40px);
        }

        .lecturer_rightMenu {
            width: calc(100% - 40px);
        }
    }
</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMsg = '';
if (isset($_POST["lecturer_submit_upload"])) {
    if ($_POST["lec_subject"] != "" && $_POST["lec_desc"] != "") {
        if ($_FILES["videoToUpload"]["name"] != "") {
            if (isset($_FILES["videoToUpload"]["name"])) {
                $target_dir = PUBROOT . "\\public\\img\\uploads\\video\\";
                $target_file = $target_dir . basename($_FILES["videoToUpload"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $uploadOk = 1;
                $errorMsg = '';

                if (
                    $imageFileType != "mp4"
                ) {
                    $errorMsg = $errorMsg . "mp4 only can be uploaded." . "<br/> ";
                    $uploadOk = 0;
                }

                if (file_exists($target_file)) {
                    $errorMsg = $errorMsg . "file already exists." . "<br/> ";
                    $uploadOk = 0;
                }

                if ($uploadOk != 0) {
                    if (move_uploaded_file($_FILES["videoToUpload"]["tmp_name"], $target_file)) {
                        // if ($this->adminModel->update_a_user_img_path($_SESSION['user_id'], basename($_FILES["videoToUpload"]["name"]))) {
                        //     $_SESSION['user_img'] = basename($_FILES["videoToUpload"]["name"]);
                        // } else {
                        //     $errorMsg = $errorMsg . "Sorry, Something went wrong" . "<br/> ";
                        // }
                        // if($_FILES["imgToUpload"]["name"] != ""){
                        //     $target_dir = PUBROOT . "\\public\\img\\uploads\\";
                        //     $target_file = $target_dir . basename($_FILES["imgToUpload"]["name"]);
                        //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        //     $uploadOk = 1;
                        //     $errorMsg = '';
                        // }
                        $sql = "insert into video_data(subject,description,video_path,dummy_path) values("
                            . "\"" . $_POST["lec_subject"] . "\"" . ","
                            . "\"" . $_POST["lec_desc"] . "\"" . ","
                            . "\"" . basename($_FILES["videoToUpload"]["name"]) . "\"" . ","
                            . "\"" . "player.jpg" . "\"" . ");";
                        $result2 = $conn->query($sql);
                        $errorMsg = $errorMsg . "The file " . basename($_FILES["videoToUpload"]["name"]) . " has been uploaded." . "<br/> ";
                    } else {
                        $errorMsg = $errorMsg . "Sorry, Something went wrong" . "<br/> ";
                    }
                } else {
                    $errorMsg = $errorMsg . "Sorry, file is not uploaded." . "<br/> ";
                }
            }
        }else{
            $errorMsg = "Sorry, file is not uploaded." . "<br/> ";
        }
    }else{
        $errorMsg = "Sorry, file is not uploaded." . "<br/> ";
    }
} else {
    $errorMsg = '';
}

$sql = "SELECT video_id,subject,description,video_path,dummy_path FROM video_data;";
$result1 = $conn->query($sql);



$conn->close();
// header("Location: http://www.redirect.to.url.com/");
?>

<body>

    <div class="clearfix">

        <div class="lecturer_leftMenu">
            <form class="lecturer_form" action="<?php echo URLROOT; ?>/tutor" method="post" enctype="multipart/form-data">
                <div class="leturer_input_group">
                    <label for="lec_subject">Subject</label>
                    <input type="text" class="lecturer_input" name="lec_subject">
                </div>
                <div class="leturer_input_group">
                    <label for="lec_desc ">Description</label>
                    <input type="text" class="lecturer_input" name="lec_desc">
                </div>
                <div class="leturer_input_group">
                    <label for="videoToUpload">Video upload</label>
                    <input type="file" class="lecturer_input" name="videoToUpload">
                </div>
                <!-- <div class="leturer_input_group">
                    <label for="imgToUpload">Image upload</label>
                    <input type="file" class="lecturer_input" name="imgToUpload">
                </div> -->
                <input type="submit" value="Upload Image" name="lecturer_submit_upload" class="lecturer_submit">
                <?php echo $errorMsg ?>
            </form>

        </div>
        <div class="lecturer_rightMenu">
            <table id="t01">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>SUBJECT</th>
                        <th>DESC</th>
                        <th>LINK</th>
                        <th>IMG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result1->num_rows > 0) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr class='odd gradeX'>";
                            echo "<td class='center'>" . $row["video_id"] . "</td>";
                            echo "<td class='center'>" . $row["subject"] . "</td>";
                            echo "<td class='center'>" . $row["description"] . "</td>";
                            echo "<td class='center'>" . $row["video_path"] . "</td>";
                            echo "<td class='center'>" . $row["dummy_path"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <?php require APPROOT . '/views/_includes/_footer.php'; ?>