<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/vendor/css/vectormap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/member.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


<script src="<?php echo URLROOT ?>/vendor/js/vectormap.js"></script>
<script src="<?php echo URLROOT ?>/vendor/js/worldmill.js"></script>

</head>

<body>

    <?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

    <div class="clearfix">
        <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

        <div class="rightBody">
            <div class="dashboardItem clearfix">
                <span class="dashboardItem_topic_dashboard">Member</span>
                <span class="dashboardItem_topic_version">Details of the members</span>
                <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                    <span class="dashboardItem_navigation_greater">&gt;</span><span>Member</span></span>
            </div>
            <?php flash('delete_message'); ?>
            <?php flash('update_success'); ?>
            <div id="vmap" style="width: 600px; height: 400px;" class="customVmap"></div>
            <canvas id="myChart" style="height:100px; width: 400px"></canvas>
            <div class="panel_responsive">

                <!-- Advanced Tables -->
                <div class="panel">
                    <div class="panel-head">
                        Member List
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>CREATE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data['members'] as $userData) : ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $userData->id; ?></td>
                                            <td class="center"><?php echo $userData->name; ?></td>
                                            <td class="center"><?php echo $userData->email; ?></td>
                                            <td class="center"><?php echo date("Y-M", strtotime($userData->created_at)) ?></td>
                                            <td class="center">
                                                <form id="editFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/member_edit/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_blue" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-edit icon_margin"></i>Edit
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/member_delete/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')">
                                                        <i class="fa fa-pencil icon_margin"></i>Delete
                                                    </button>
                                                </form>
                                                <form id="deleteFormID_<?php echo $userData->id; ?>" class="delete_button_form" action="<?php echo URLROOT; ?>/admin/member_change_state/<?php echo $userData->id; ?>" method="post">
                                                    <!-- <input type="submit" class="table_btn btn_red" value="Delete"> -->
                                                    <button class="table_btn btn_red <?php echo $userData->status == 1 ? 'status_active' : 'status_disabled' ?>" onclick="submitMe('deleteFormID_<?php echo $userData->id; ?>')" style="width:100px;">
                                                        <?php
                                                            if ($userData->status == 1) {
                                                                echo "Actived";
                                                            } else {
                                                                echo "Disabled";
                                                            };
                                                            ?>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#memberActive').addClass('active');
        });
    </script>
    <!-- Grpah Data -->
    <script type="text/javascript">
        <?php
        $m1 = 0;
        $m2 = 0;
        $m3 = 0;
        $m4 = 0;
        $m5 = 0;
        $m6 = 0;
        $m7 = 0;
        $m8 = 0;
        $m9 = 0;
        $m10 = 0;
        $m11 = 0;
        $m12 = 0;
        $a1 = 0;
        $a2 = 0;
        $a3 = 0;
        $a4 = 0;
        $a5 = 0;
        $a6 = 0;
        $a7 = 0;
        $a8 = 0;
        $a9 = 0;
        $a10 = 0;
        $a11 = 0;
        $a12 = 0;
        foreach ($data['members'] as $userData) {
            $mydate = $userData->created_at;
            $month = date("n", strtotime($mydate));
            switch ($month) {
                case 1:
                    $m1++;
                    if ($userData->status == 1) {
                        $a1++;
                    }

                    break;
                case 2:
                    $m2++;
                    if ($userData->status == 1) {
                        $a2++;
                    }
                    break;
                case 3:
                    $m3++;
                    if ($userData->status == 1) {
                        $a3++;
                    }
                    break;
                case 4:
                    $m4++;
                    if ($userData->status == 1) {
                        $a4++;
                    }
                    break;
                case 5:
                    $m5++;
                    if ($userData->status == 1) {
                        $a5++;
                    }
                    break;
                case 6:
                    $m6++;
                    if ($userData->status == 1) {
                        $a6++;
                    }
                    break;
                case 7:
                    $m7++;
                    if ($userData->status == 1) {
                        $a7++;
                    }
                    break;
                case 8:
                    $m8++;
                    if ($userData->status == 1) {
                        $a8++;
                    }
                    break;
                case 9:
                    $m9++;
                    if ($userData->status == 1) {
                        $a9++;
                    }
                    break;
                case 10:
                    $m10++;
                    if ($userData->status == 1) {
                        $a10++;
                    }
                    break;
                case 11:
                    $m11++;
                    if ($userData->status == 1) {
                        $a11++;
                    }
                    break;
                case 12:
                    $m12++;
                    if ($userData->status == 1) {
                        $a12++;
                    }
                    break;
                default:
                    break;
            };
        }
        $allUsers = array($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12);
        $activeUsers = array($a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12);
        ?>

            var dataArr1 = <?php echo '["' . implode('", "', $allUsers) . '"]' ?>;
            var dataArr2 = <?php echo '["' . implode('", "', $activeUsers) . '"]' ?>;
            var totalUsers = 0;
            var totalActiveUsers = 0;
            // JS for each loop
            dataArr1.forEach(calcActiveUsers);
            dataArr2.forEach(calcTotalUsers);

            function calcActiveUsers(item, index) {
                totalUsers += parseInt(item, 10);
            }

            function calcTotalUsers(item, index) {
                totalActiveUsers += parseInt(item, 10);
            }

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                            label: 'Users : ' + totalUsers,
                            data: dataArr1,
                            // fill: false,
                            lineTension: 0,
                            borderDash: [5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        },
                        {
                            label: 'Activated users : ' + totalActiveUsers,
                            data: dataArr2,
                            // fill: false,
                            lineTension: 0,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 2
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
    </script>

    <script>
        $("#vmap").width($(".rightBody").width());
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            // backgroundColor: '#a5bfdd',
            selectedRegions: ['lk'],
            backgroundColor: '#006491',
            borderColor: '#000',
            borderOpacity: .15,
            borderWidth: 1,
            multiSelectRegion: true,
            color: '#F5F5F5',
            enableZoom: true,
            hoverColor: '#b6d6ff',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            // selectedColor: '#f00',
            // selectedRegions: null,
            selectedColor: null,
            showTooltip: true,
            colors: {
                lk: '#f00',
            },
            onRegionClick: function(element, code, region) {
                event.preventDefault();
                // var message = 'You clicked "' +
                //     region +
                //     '" which has the code: ' +
                //     code.toUpperCase();

                // alert(message);
            },
            onResize: function(event, width, height) {
                $("#vmap").width($(".rightBody").width());
                // console.log($(".rightBody").width());
                // console.log($("#vmap").width());
            }
        });
    </script>

    <?php require APPROOT . '/views/_includes/_footer.php'; ?>