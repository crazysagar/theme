<?php get_header(); ?>

<!-- HERO -->
<section style="background:url('https://picsum.photos/1600/600') center/cover; color:#fff; padding:100px 20px; text-align:center;">
    <h1>Welcome to NovaCraft</h1>
    <p>Build your website step by step</p>
    <a href="#" class="btn">Get Started</a>
</section>

<!-- ABOUT -->
<section class="section">
    <div class="container">
        <h2>About Us</h2>
        <p>This is about section. Later you will replace this with dynamic WordPress content.</p>
    </div>
</section>

<!-- GALLERY -->
<section class="section" style="background:#f4f4f4;">
    <div class="container">
        <h2>Gallery</h2>

        <div style="display:flex; gap:10px;">
            <img src="https://picsum.photos/300/200" alt="">
            <img src="https://picsum.photos/301/200" alt="">
            <img src="https://picsum.photos/302/200" alt="">
        </div>

    </div>
</section>

<!-- COURSES -->
<section class="section">
    <div class="container">
        <h2>Courses</h2>

        <div style="display:flex; gap:20px;">

            <div style="border:1px solid #ccc; padding:10px;">
                <img src="https://picsum.photos/300/200" alt="">
                <h3>Web Development</h3>
                <p>Learn HTML, CSS, JS</p>
            </div>

            <div style="border:1px solid #ccc; padding:10px;">
                <img src="https://picsum.photos/301/200" alt="">
                <h3>WordPress</h3>
                <p>Build themes and plugins</p>
            </div>

            <div style="border:1px solid #ccc; padding:10px;">
                <img src="https://picsum.photos/302/200" alt="">
                <h3>Design</h3>
                <p>UI/UX basics</p>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>