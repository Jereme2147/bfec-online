<?php
    get_header();
?>
<!-- <h1>single</h1> -->
<?php
      while(have_posts()) {
            the_post();
?>
    <div class="no-banner-spacer">
    </div>
    <section class="single-section">
        <div>
        <?php 
            ?><h2><?php the_title();?></h2><?php
            echo the_content();
        ?>
        </div>

    </section>


<?php
      }
    get_footer();
?>