<?php require APPROOT . '/views/_includes/_header.php'; ?>
<?php require APPROOT . '/views/_includes/_navbar.php'; ?>
<div class="topic">
    WELCOME TO E-TUTION.COM
</div>
<div class="top_corses_cover">
    <div class="top_corses">
        <div class="top_courses_desc">TOP COURSES</div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                1
            </div>
            <div class="item">
                2
            </div>
            <div class="item">
                3
            </div>
            <div class="item">
                4
            </div>
            <div class="item">
                5
            </div>
            <div class="item">
                6
            </div>
        </div>
    </div>
</div>

<div>
    <div class="our_services">
        WHAT WE PROVIDE AS A SERVICE
    </div>
    <div class="our_services_description">
        Learn the best way to use your E-Tution classes with our best lecturers around the world
    </div>
    <div class="flex_cover">
        <div class="flex_container">
            <div class="flex_item">
                <div class="flex_item_topic"></div>
                <div class="flex_item_body">Can Ask Questions</div>
                <div class="flex_item_desc">We have 24/7 customer care support. with highly qualified customer agents</div>
            </div>
            <div class="flex_item">
                <div class="flex_item_topic"></div>
                <div class="flex_item_body">Step-by-step Guide with Video Tutorials</div>
                <div class="flex_item_desc">We have a massive video Library</div>
            </div>
            <div class="flex_item">
                <div class="flex_item_topic"></div>
                <div class="flex_item_body">Reserve Private Lectures</div>
                <div class="flex_item_desc">You can reserve online tuition sessions </div>
            </div>

        </div>
    </div>
</div>

<div class="members">

</div>
<div class="about_us">

</div>
<div class="advertice_here">

</div>
<div class="footer_contact">

</div>
<div class="right_reserved">

</div>
<script src="<?php echo URLROOT ?>/vendor/js/owl.carousel.min.js" type="text/javascript" charset="utf-8"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            // 1000: {
            //     items: 5
            // }
        }
    })
</script>
<?php require APPROOT . '/views/_includes/_footer.php'; ?>