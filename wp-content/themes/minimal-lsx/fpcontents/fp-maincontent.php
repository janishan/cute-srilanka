<?php 
/* 	Travel Theme's Gallery Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.7
*/
//$galleryboxes_number = of_get_option('galleryboxes-number', '9');
?>


<div id="home-main-content" class="main-content-row" >
    <div class="main-content-wrapper">
        <div class="main-content-inner-wrapper">
            <h1 class="main-title">
                <span class="first-title"><?php echo of_get_option('maincontent-sub-heading', 'Discover'); ?></span>
                <span class="second-title"><?php echo of_get_option('maincontent-heading', 'Cute Sri Lanka'); ?></span>
            </h1>
            <p class="main-content-desc" ><?php echo of_get_option('maincontent-description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'); ?></p>
            <a class="main-content-btn bttn primary-btn" href="<?php echo of_get_option('maincontent-more-link', '#'); ?>"><?php echo of_get_option('maincontent-more-text', 'Learn More'); ?></a>
        </div>
        <div class="main-content-image-wrapper">
            <img src="<?php echo of_get_option('main-content-image' . $fboxn, get_template_directory_uri() . '/images/main-content-image.png'); ?>"/>
        </div>
    </div>  
</div>