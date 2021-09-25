<?php

/* 	Travel Theme's Slide Part of Front Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since travel 1.7
*/

?>

<?php
if ( of_get_option('slidebox', '1') == '1' ):
wp_enqueue_script( 'slider-main', get_template_directory_uri() . '/js/jquery.superslides.min.js' );
wp_enqueue_style ('slider-style', get_template_directory_uri() . '/css/superslides.css');

?><div id="slide-container"><div id="slides"><ul class="slides-container"> 
<?php $slnum = of_get_option('slide-number', '10');
if ( of_get_option('slide-source') == 'post' || of_get_option('slide-source') == 'page' ):
$sbargs = array( 'post_type'=> of_get_option('slide-source'), 'meta_key'=>'sb_ss', 'meta_value'=>'on', 'ignore_sticky_posts' => 1, 'posts_per_page'  => $slnum ); query_posts( $sbargs );  if (have_posts()) : while (have_posts()) : the_post(); if ( has_post_thumbnail() ): $thumburl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slide-thumb'); endif; ?>

<li><img src=" <?php echo $thumburl['0']; ?>" /><div class="label-text"><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></div></li>

<?php endwhile; endif; wp_reset_query(); else:


foreach (range(1, $slnum) as $sinumber) {
	if ( of_get_option('slide-image' . $sinumber, get_template_directory_uri() . '/images/slide-image/slide-image' . $sinumber . '.jpg') != '' ) : ?>
    <li><img src="<?php echo of_get_option('slide-image' . $sinumber,  get_template_directory_uri() . '/images/slide-image/slide-image' . $sinumber . '.jpg'); ?>" class="<?php echo of_get_option('slide-effect', 'random'); ?>" /><?php if ( of_get_option('slide-image' . $sinumber . '-caption', 'This is a Test Image for Travel Theme') != '' ) : ?><div class="label-text"><a href="<?php echo of_get_option('slide-image' . $sinumber . '-link', '#'); ?>"><h3><?php echo of_get_option('slide-image' . $sinumber . '-caption', 'This is a Test Image for Travel Theme') ?></h3></a></div> <?php ; endif; ?></li>
    
    
<?php endif; } endif; ?>
</ul>
<nav class="slides-navigation">
    <a href="#" class="next">Next</a>
    <a href="#" class="prev">Previous</a>
  </nav>
</div> <!-- slide -->

<script>
jQuery.noConflict();
	jQuery(document).ready(function() {
    jQuery('#slides').superslides({
      animation: '<?php echo of_get_option('slide-animation', 'fade'); ?>',
	  play: '<?php echo of_get_option('slide-interval', '5000'); ?>',
	  inherit_width_from: '#slide-container',
	  inherit_height_from: '#slide-container',
	  pagination: false
	 });
	 
	jQuery('.slides-container li').addClass('active');
	
	jQuery(document).on('animated.slides', function() {
		jQuery('.slides-container li').addClass('active');
	});
	
	jQuery(document).on('animating.slides', function() {
		jQuery('.slides-container li').removeClass('active');
	});
		

	});
  </script>
  

</div><div class="vspace"> </div>
<?php endif; ?>