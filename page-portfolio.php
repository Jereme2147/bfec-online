<?php
   class Tile {
      /* Member variables */
      var $price;
      var $title;
      var $image;
      var $link;
        function __construct($tit, $ima, $lin) {
            $this->title = $tit;
            $this->image = $ima;
            $this->link = $lin;
        }
      function getImage(){
          echo $this->image;
      }
      function getLink(){
          echo $this->link;
      }
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
   $portfolioItems = array(
       0 => new Tile(
            "Environmental Permitting",
            get_template_directory_uri() . "/img/portfolio/ENVIRONMENTALPERMIT1-325x183.jpg",
            site_url() . "/portfolio-items/environmental-permitting/"
       ),
       1 => new Tile(
           "Environmental Site Assessments",
           get_template_directory_uri() . "/img/portfolio/ESA1-325x183.jpg",
           site_url() . "/portfolio-items/environmental-site-assessments/"
       ),
       2 => new Tile(
           "Innovative Stormwater Solutions",
           get_template_directory_uri() . "/img/portfolio/INNOVATIVESTORMWATER1-325x183.jpg",
           site_url() . "/portfolio-items/innovative-stormwater/"
       ),
       3 => new Tile(
           "Mitigation",
           get_template_directory_uri() . "/img/portfolio/MITIGATION1-325x183.jpg",
           site_url() . "/portfolio-items/portfolio-category-mitigation/"
       ),
       4 => new Tile(
           "Stream and Wetland Delineations",
           get_template_directory_uri() . "/img/portfolio/STREAM_WETLANDDELIN1-325x183.jpg",
           site_url() . "/portfolio-items/stream-and-wetland-delineations/"
       ),
        5 => new Tile(
           "Stream and Wetland Restoration",
           get_template_directory_uri() . "/img/portfolio/STREAMANDWETLANDREST2-325x183.jpg",
           site_url() . "/portfolio-category-stream-wetland/"
       ),
        6 => new Tile(
            "Environmental Permitting",
            get_template_directory_uri() . "/img/portfolio/ENVIRONMENTALPERMIT2-325x183.jpg",
            site_url() . "/portfolio-items/environmental-permitting/"
       ),
        7 => new Tile(
           "Environmental Site Assessments",
           get_template_directory_uri() . "/img/portfolio/ESA2-325x183.jpg",
           site_url() . "/portfolio-items/environmental-site-assessments/"
       ),
        8 => new Tile(
           "Innovative Stormwater Solutions",
           get_template_directory_uri() . "/img/portfolio/innovative stormwater2-325x183.jpg",
           site_url() . "/portfolio-items/innovative-stormwater/"
       ),
        9 => new Tile(
           "Mitigation",
           get_template_directory_uri() . "/img/portfolio/MITIGATION2-325x183.jpg",
           site_url() . "/portfolio-items/portfolio-category-mitigation/"
       ),
        10 => new Tile(
           "Stream and Wetland Delineations",
           get_template_directory_uri() . "/img/portfolio/STREAM_WETLANDDELIN2-325x183.jpg",
           site_url() . "/portfolio-items/stream-and-wetland-delineations/"
       ),
        11 => new Tile(
           "Stream and Wetland Restoration",
           get_template_directory_uri() . "/img/portfolio/STREAMANDWETLANDRESTORATION-325x183.jpg",
           site_url() . "/portfolio-category-stream-wetland/"
       )
    );
    get_header();
?>
<div class="banner-div">
    <!-- dynamic should be loaded from WP -->
    <img src="<?php echo get_template_directory_uri();?>/img/portfolio-banner-1700x1138" class="desktop-img image-slide"alt="">
</div>
<?php
    //include the menu
    include get_theme_file_path( '/portfolio-menu.php' );
?>

<section id="portfolio-thumb" class="card-left">
<?php
// itterate through all items in the portfolioItems array. 
    foreach ($portfolioItems as $value) {
    ?>
    <div class="portfolio-thumb-container ">
        <span><?php echo $value->getTitle(); ?></span>
        <a href="<?php echo $value->getLink();?>"> <img 
            src="<?php echo $value->getImage(); ?>" alt="portfolio image"></a>
    </div>
    <?php } ?>
</section>


<?php
    get_footer();
?>