<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
</head>

<body>

    <?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

    <div class="clearfix">
        <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

        <div class="rightBody">
            <div class="dashboardItem clearfix">
                <span class="dashboardItem_topic_dashboard">Report</span>
                <span class="dashboardItem_topic_version">Details of the System</span>
                <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                    <span class="dashboardItem_navigation_greater">&gt;</span><span>Report</span></span>
            </div>
            <canvas id="myChart" style="height:100px; width: 400px"></canvas>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#reportActive').addClass('active');
        });
    </script>
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
        foreach ($data['data'] as $userData) {
            $mydate = $userData->created_at;
            $month = date("n", strtotime($mydate));
            switch ($month) {
                case 1:
                    $m1++;
                    break;
                case 2:
                    $m2++;
                    break;
                case 3:
                    $m3++;
                    break;
                case 4:
                    $m4++;
                    break;
                case 5:
                    $m5++;
                    break;
                case 6:
                    $m6++;
                    break;
                case 7:
                    $m7++;
                    break;
                case 8:
                    $m8++;
                    break;
                case 9:
                    $m9++;
                    break;
                case 10:
                    $m10++;
                    break;
                case 11:
                    $m11++;
                    break;
                case 12:
                    $m12++;
                    break;
                default:
                    break;
            };
        }
        $fruits = array($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12);
        ?>

            var dataArr = <?php echo '["' . implode('", "', $fruits) . '"]' ?>;
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Number of users',
                        data: dataArr,
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
                    }]
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
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>