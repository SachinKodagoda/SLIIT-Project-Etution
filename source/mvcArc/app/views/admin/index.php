<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/admin/admin.css" />
</head>
<body>

<?php require APPROOT . '/views/admin/common/_adminTopMenu.php'; ?>

<div class="clearfix">
    <?php require APPROOT . '/views/admin/common/_adminLeftMenu.php'; ?>

    <div class="rightBody">
        <div class="dashboardItem clearfix">
            <span class="dashboardItem_topic_dashboard">Admin</span>
            <span class="dashboardItem_topic_version">Details of the admin</span>
            <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/admin/dashboard_black.svg" alt="icon" /><span>Home</span>
                <span class="dashboardItem_navigation_greater">&gt;</span><span>Admin</span></span>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
            $('#adminActive').addClass('active');
        }
    );
</script>
<?php require APPROOT . '/views/_includes/_footer.php'; ?>