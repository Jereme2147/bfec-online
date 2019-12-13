<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(is_page('portfolio')){
        echo '<meta name="description" content="Environmental Site Management and Environmental Consulting Portfolio | Projects | Job Sites"';
    } elseif (is_page('about')) {
        echo '<meta name="description" content="Our Environmental Consultants | Biologists | Engineers">';
    } elseif(is_page('news')) {
        echo '<meta name="description" content="Ecological Resoration Projects and Environmental Site Management News">';
    } elseif(is_page('contact')) {
        echo '<meta name="description" content="Contact us for Environmental Consulting Firm | Environmental site management | Environmental Consultant">';
    }else {
        echo '<meta name="description" content="full delivery ecological restoration projects to the mountain areas of NC, TN, & VA. Environmental consultants, biologists, and engineers are able to provide design & build services from assessment and design through implementation on various projects ranging from mitigation banking to private or grant funded restoration. ">';
    }
    ?>
    <?php wp_head();?>
</head>
<body>
    <!-- moves header image below the nav to begin -->
<div class="no-banner-spacer"></div>
    <nav>
        <div class="mobile-nav" id="mobile-nav"> 
            <div id="mobile-nav-title">
               <a href="<?php echo get_site_url();?>"><h1>Brushy Fork Environmental Consulting, Inc.</h1></a>
            </div>
            <div class="icon">
                <div class="hamburger">
                </div>
            </div>
            <div class="mobile-menu-open" id="mobile-menu-open">
                    <ul>
                        <a href="<?php echo site_url()?>"><li>Home</li></a>
                        <a href="<?php echo site_url()?>/about"><li>About</li></a>
                        <a href="<?php echo site_url()?>/portfolio"><li>Portfolio</li></a>
                        <a href="<?php echo site_url()?>/news"><li>News</li></a>
                        <a href="<?php echo site_url()?>/contact"><li>Contact</li></a>
                    </ul>
            </div>
        </div>
        <div id="desktop-nav">
            <div id="desktop-title-menu">
                <div id="desktop-title">
                   <a href="<?php echo get_site_url();?>"><h1>Brushy Fork Environmental Consulting, Inc.</h1></a>
                </div>
                <div id="desktop-menu">
                    <ul>
                        <a <?php if(is_page('about')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/about">
                            <li>About</li>
                        </a>
                        <a <?php if(is_page('portfolio')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/portfolio">
                            <li>Portfolio</li>
                        </a>
                        <a <?php if(is_page('news')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/news">
                            <li>News</li>
                        </a>
                        <a <?php if(is_page('contact')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/contact">
                            <li>Contact</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div id="desktop-logo">
                <img src= "<?php echo get_template_directory_uri();?>/img/logo.png" alt="bfec logo">
            </div>
        </div>
    </nav>
    <main>