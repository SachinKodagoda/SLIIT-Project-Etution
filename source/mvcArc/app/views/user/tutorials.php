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

    .tuto_modal {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0);
    }

    .video_cover {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .modal_close {
        color: white;
        cursor: pointer;
        position: absolute;
        right: -20px;
        top: -20px
    }
</style>
<link rel="stylesheet" href="<?php echo URLROOT ?>/vendor/css/grt-youtube-popup.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT video_id,subject,description,video_path,dummy_path FROM video_data;";
$result1 = $conn->query($sql);
$rows = [];
while ($row = mysqli_fetch_assoc($result1)) {
    $rows[] = $row;
}
?>
<script>
    var js_data = '<?php echo json_encode($rows); ?>';
    var js_obj_data = JSON.parse(js_data);
    var bySubject = js_obj_data.slice(0);
    bySubject.sort((a, b) => (a.subject > b.subject) ? 1 : -1);
</script>
</head>

<?php

$conn->close();
?>

<body>
    <?php require APPROOT . '/views/_includes/_navbar.php'; ?>
    <div class="topic1"> Tutorials </div>
    <div>
        <input type="text" class="input_search" onkeyup="myFunction()" id="input_search" autocomplete="off" />
    </div>
    <div class="tuto_modal" id="tuto_modal">

        <div class="video_cover">
            <div class="modal_close" onclick="modalClose()">X</div>
            <video width="400" id="tuto_video" controls>
                <!-- <source src="<?php echo URLROOT . "/public/img/uploads/video/" ?>mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video. -->
            </video>
        </div>


    </div>



    <div class="flex-container" id="video_container"></div>
    </div>
    <script>
        var video_container = document.getElementById('video_container');
        var input_search = document.getElementById('input_search');
        var tuto_modal = document.getElementById('tuto_modal');
        tuto_modal.style.display = "none";
        bySubject.forEach(addItem);

        var topic = '';
        var counterx;

        function addItem(item, index) {
            if (item['subject'] != topic) {
                topic = item['subject'];
                video_container.innerHTML += "<div class='topic2'>" + item['subject'] + "</div>";
                counterx = 0;
            };
            counterx++;
            video_container.innerHTML += "<div class='item_x youtube-link'><img src='<?php echo URLROOT . "/public/img/uploads/"?>"+item['dummy_path'] +"' onclick=\'loadVideo(" + "\"" + item['video_path'] + "\"" + ")\'><div class='item_x_description_x'>" + counterx + ") " + item['description'] + "</div></div>";
        }

        function myFunction() {
            video_container.innerHTML = '';

            if (input_search.value == '') {
                counterx = 0;
                topic = ''
                bySubject.forEach(addItem);
            } else {
                var flycount = 1;
                for (var i = 0; i < bySubject.length; i++) {
                    if (input_search.value.toLowerCase() == bySubject[i]['subject']) {
                        video_container.innerHTML += "<div class='item_x youtube-link'><img src='<?php echo URLROOT . "/public/img/uploads/"?>"+bySubject[i]['dummy_path'] +"' onclick=\'loadVideo(" + "\"" + bySubject[i]['video_path'] + "\"" + ")\'><div class='item_x_description_x'>" + flycount + ") " + bySubject[i]['description'] + "</div></div>";
                        flycount++;
                    }
                }
            }

        }

        function loadVideo(link) {
            var video = document.getElementById('tuto_video');
            video.innerHTML = "";
            var source = document.createElement('source');
            var linkx = "<?php echo URLROOT . "/public/img/uploads/video/" ?>" + link;
            source.setAttribute('src', linkx);
            video.appendChild(source);
            video.load();
            // video.play();
            modalOpen();
        }

        function modalClose() {
            tuto_modal.style.display = "none";
        }

        function modalOpen() {
            tuto_modal.style.display = "block";
        }
    </script>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>