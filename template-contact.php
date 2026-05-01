<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="contact-container">

    <!-- LEFT SIDE (INFO) -->
    <div class="contact-left">

        <!-- MAP SECTION -->
        <div class="contact-box">
            <h2>Find Us on Map</h2>

            <iframe 
                src="https://www.google.com/maps?q=Kathmandu&output=embed" 
                width="100%" 
                height="250" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>

            <div class="map-info">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" class="icon">
                <p>We are located in the heart of Kathmandu. Visit us anytime during working hours.</p>
            </div>
        </div>

        <!-- ADDRESS SECTION -->
        <div class="contact-box">
            <h2>Our Address</h2>

            <div class="address-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/images/location.jpg" class="address-img">

                <div class="address-text">
                    <p>
                        NovaCraft Pvt. Ltd.<br>
                        New Baneshwor, Kathmandu<br>
                        Nepal
                    </p>

                    <p>
                        We provide web development and design services. Feel free to visit or contact us anytime.
                    </p>
                </div>
            </div>
        </div>

    </div>


    <!-- RIGHT SIDE (CONTACT FORM / EXTRA) -->
    <div class="contact-right">

        <h2>Contact Us</h2>

        <p>Email: info@novacraft.com</p>
        <p>Phone: +977-9800000000</p>

        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>

    </div>

</div>

<?php get_footer(); ?>