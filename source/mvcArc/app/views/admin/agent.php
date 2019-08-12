<?php require APPROOT . '/views/_includes/_header.php'; ?>
<?php require APPROOT . '/views/_includes/_adminTopMenu.php'; ?>

<div class="clearfix">
    <?php require APPROOT . '/views/_includes/_adminLeftMenu.php'; ?>

    <div class="rightBody">
        <div class="dashboardItem clearfix">
            <span class="dashboardItem_topic_dashboard">Agent</span>
            <span class="dashboardItem_topic_version">Details of the agents</span>
            <span class="dashboardItem_navigation"><img src="<?php echo URLROOT ?>/img/dashboard_black.svg" alt="icon" /><span>Home</span>
                <span class="dashboardItem_navigation_greater">&gt;</span><span>Agent</span></span>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
            $('#agentActive').addClass('active');
        }
    );
</script>
<?php require APPROOT . '/views/_includes/_footer.php'; ?>