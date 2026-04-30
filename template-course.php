<?php
/*
Template Name: Course
*/
get_header();
?>

<div class="middle-container">

    <!-- LEFT SIDEBAR -->
    <div class="middle-left">
        <div class="menu-item-left">
            <a href="<?php echo home_url(); ?>">Home</a>
        </div>

        <div class="menu-item-left">
            <a href="<?php echo home_url('/about'); ?>">About Us</a>
        </div>

        <div class="menu-item-left">
            <a href="<?php echo home_url('/courses'); ?>">Courses</a>
        </div>

        <div class="menu-item-left">
            <a href="<?php echo home_url('/gallery'); ?>">Gallery</a>
        </div>
    </div>


    <!-- RIGHT CONTENT -->
    <div class="middle-right" style="padding:20px;">

        <section id="courses">
            <h2>Our Courses</h2>

            <ul>
                <li>Web Development</li>
                <li>WordPress Theme Development</li>
                <li>JavaScript Basics</li>
            </ul>
        </section>

    </div>

</div>

<?php get_footer(); ?>