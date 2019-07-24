<?php 
    get_header();
?>
<div class="banner-div">
    <!-- dynamic should be loaded from WP -->
    <!-- <img src="<?php// echo get_template_directory_uri()?>/img/contact-banner-1900.jpg" class="desktop-img"alt="">
    <img src="<?php //echo get_template_directory_uri()?>/img/contact-banner-900.jpg"class="mobile-img" alt=""> -->
    <img src="<?php echo get_template_directory_uri()?>/img/contact-1700x956.jpg" class="desktop-img"alt="image of a restored stream">
    <img src="<?php echo get_template_directory_uri()?>/img/contact-1700x956-mobile.jpg" class="mobile-img"alt="image of a restored stream">
</div>
<div id="contact-social">
    <a href="https://www.facebook.com/Brushy-Fork-Environmental-Consulting-Inc-111236192315890/" target="_BLANK">
        <img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt="link to facebook page">
    </a>
    <a href="https://www.linkedin.com/in/adamwilliamsbfec/" target="_BLANK">
        <img src="<?php echo get_template_directory_uri()?>/img/linkedin.svg" alt="linkedin page">
    </a>
    <a href="mailto:info@bfec.org?Subject=info" target="_top">
        <img src="<?php echo get_template_directory_uri()?>/img/mail.svg" alt="direct email">
    </a>
    <a href="tel:1-423-727-4476" target="_BLANK">
        <img src="<?php echo get_template_directory_uri()?>/img/phone.svg" alt="call">
    </a>
    <a href="https://www.instagram.com/brushyforkenvt/" target="_BLANK">
        <img src="<?php echo get_template_directory_uri()?>/img/instagram.svg" alt="instagram">
    </a>
</div>
<div id=contact-section-divs> 
<section class="contact-section">
    <div id="contact-address">
        <!-- <h2>Get in touch</h2> -->
        <h3>Brushy Fork Environmental Consulting, Inc</h3>
        <p>10565 Hwy 421</p>
        <p>Trade, TN 37691</p>
        <p><a href="mailto:info@bfec.org?Subject=info">info@bfec</a></p>
        <p>Connect with us on any of the provided social networks or a quick message.</p>
    </div>
</section>
<?php 
     while(have_posts()) {
        the_post();
        ?>
            <section class="contact-section-form">
            <div>
            <?php the_content();?>
            </div>
            <?php 
     }
?>
            </section>
            <section>
                <div>

                </div>
            </section>
    </div>
<?php 
    get_footer();
?>