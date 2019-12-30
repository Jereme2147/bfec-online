<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154969187-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-154969187-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if(is_page('portfolio')){
        echo '<meta name="description" content="Environmental Site Management and Environmental Consulting Portfolio | Projects | Job Sites">';
    } elseif(is_page('about')) {
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
                        <li>
                            <a href="<?php echo site_url()?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/about">About</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/news">News</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/contact"><li>Contact</li></a>
                        </li>
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
                        <li>
                            <a <?php if(is_page('about')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/about">
                                About
                            </a>
                        </li>
                        <li>
                            <a <?php if(is_page('portfolio')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/portfolio">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a <?php if(is_page('news')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/news">
                                News
                            </a>
                        </li>
                        <li>
                            <a <?php if(is_page('contact')) echo 'class="nav-selected"'?>
                            href="<?php echo site_url()?>/contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="desktop-logo">
                <img src= "<?php echo get_template_directory_uri();?>/img/logo.png" alt="bfec logo">
            </div>
        </div>
    </nav>
    <main>