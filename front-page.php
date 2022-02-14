<?php 
    get_header();
?>

<div id="landing-top-slide">
    <?php
    //if ( function_exists( 'soliloquy' ) ) { soliloquy( 'front-page', 'slug' ); };
    ?>
    <?php 
        echo do_shortcode('[smartslider3 slider=2]');
    ?>
</div>

<?php
 $the_query = new WP_Query( array('posts_per_page'=>6,
                                 'post_type'=>'landing-item',
                                 'meta_key' => 'position',
                                 'orderby' => 'meta_value_num',
                                 'order' => 'ASC',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
    $postCount = 0; //variable to push sections left or right
    while ($the_query -> have_posts()) : $the_query -> the_post(); 
    ?>
    <article  class="<?php if($postCount % 2 == 1) {
                            echo 'card-right section-right ';
                            } else {
                                echo 'card-left section-left ';
                            }
        ?>landing-section">
            <div class="landing-card">
                <div class="landing-card-title">
                        <h2><?php the_title(); ?></h2>
                    <div>
                        <p>
                           <?php echo wp_trim_words(get_the_excerpt(), 50);?>
                        </p>
                    </div>
                <div class="desktop-read-more-btn">
                        <a href="<?php echo the_permalink();?>" target="_blank"><h3>Read More</h3></a>  
                </div>
                </div>
                <div class="landing-image-div">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image showing example bfec project" class="desktop-img side-load">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image showing example bfec project" class="mobile-img side-load">
                </div>
                <div class="read-more-btn">
                        <a href="<?php echo the_permalink();?>" target="_blank"><h3>Read More</h3></a>  
                </div>
            </div>
        </article>

<?php
$postCount = $postCount + 1;
endwhile;
?>
<div class="landing-divider">
    <img src= "<?php echo get_template_directory_uri();?>/img/logo.png" alt="News article relavant to BFEC">
    <h2>BFEC News</h2>
</div>

<section>
<?php
 $the_query = new WP_Query( array('posts_per_page'=>2,
                                 'post_type'=>'post',
                                //  'meta_key' => 'position',
                                //  'orderby' => 'meta_value_num',
                                //  'order' => 'ASC',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
    while ($the_query -> have_posts()) : $the_query -> the_post(); 
    ?>
<!-- news / posts go here -->
        <article class="<?php if($postCount % 2 == 1) {
                            echo 'card-right section-right ';
                            } else {
                                echo 'card-left section-left ';
                            }
        ?>landing-section">
            <div class="landing-card">
                <div class="landing-card-title">
                        <h2><?php the_title(); ?></h2>
                    <div>
                        <p>
                           <?php echo wp_trim_words(get_the_excerpt(), 50);?>
                        </p>
                    </div>
                    <div class="desktop-read-more-btn">
                        <a href="<?php echo the_permalink();?>"><h3>Read More</h3></a>  
                    </div>
                </div>
                <div class="landing-image-div">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="news for BFEC" class="desktop-img side-load">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="news for BFEC" class="mobile-img side-load">
                </div>
                <div class="read-more-btn">
                        <a href="<?php echo the_permalink();?>" ><h3>Read More</h3></a>
                </div>
            </div>
        </article>         
<!-- end news / posts -->
<?php
        $postCount = $postCount + 1;
    endwhile;
?>
</section>
<?php 
    get_footer();
?>