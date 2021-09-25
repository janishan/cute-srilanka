<?php
/* 	Travel Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>
<?php if ( of_get_option('fbboxv', '1') == '1' ): ?>
<div class="discover-more-wrapper" id="discover-more">
	<div id="main-content" class="discover-more-title-wrapper" >
		<h2 class="discover-more-heading big-heading"><?php echo do_shortcode( of_get_option('fphomeheading') ); ?></h2>
	</div>
<div class="discover-more-boxes-wrapper">	
<?php $fboxclm = of_get_option('nfbox1', '6');
foreach (range(1, $fboxclm) as $fboxn) { ?>
<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' || of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' || of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?>


	<div class="discover-more-box discover-more-box-number-<?php echo of_get_option('featured-po' . $fboxn, $fboxn ); ?> anim after">
		<div class="discover-more-image-wrapper">
			<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' ): ?>
				<img src="<?php echo of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg'); ?>"/>
			<?php endif; ?>
			<?php if ( of_get_option('featured-link' . $fboxn , '#') != '' ): ?>
				<a href="<?php echo of_get_option('featured-link' . $fboxn , '#'); ?>" <?php if ( of_get_option('featured-link-nw' . $fboxn, '0') == '1'  ): ?> target="_blank" <?php endif; ?>  class="discover-more-link">
					<?php if ( of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' ): ?>
						<span><?php echo of_get_option('featured-title' . $fboxn, 'Featured'); ?><i class="fa fa-long-arrow-right"></i></span> 
					<?php endif; ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
<?php endif; } ?>

</div>  
</div>  



<?php if ( of_get_option('fboxpov', '0') == '1' ) : ?>
<script type="text/javascript">	jQuery(window).load(function() {  tinysort('div#fpfboxid>div',{attr:'class', order:'<?php echo of_get_option('fbfboxord', 'desc'); ?>'});  }); </script>
<?php endif; endif;  ?>
