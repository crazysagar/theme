<?php get_header(); ?>

<main>

    <!-- HERO / INTRO SECTION -->
    <section id="hero" style="padding:40px; background:#f5f5f5;">
        <h1>Welcome to My Website</h1>
        <p>This is a reusable hero section (can be moved to home.php later)</p>
    </section>


    <!-- ABOUT PREVIEW SECTION -->
    <section id="about-preview" style="padding:30px;">
        <h2>About Us</h2>
        <p>
            Short intro about your website or company. This can later go into about.php.
        </p>
    </section>


    <!-- COURSES SECTION -->
    


    <!-- BLOG SECTION (YOUR EXISTING LOOP) -->
    <section id="blog" style="padding:30px;">
        <h2>Latest Blog Posts</h2>

        <?php
        if (have_posts()):
            while (have_posts()): the_post();
        ?>

            <article style="margin-bottom:20px;">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </article>

        <?php
            endwhile;
        else:
            echo "<p>No posts found</p>";
        endif;
        ?>
    </section>


    <!-- CONTACT SECTION -->
    <section id="contact" style="padding:30px; background:#eee;">
        <h2>Contact Us</h2>
        <p>Email: example@email.com</p>
        <p>Phone: +977-98XXXXXXXX</p>
    </section>

</main>

<?php get_footer(); ?>