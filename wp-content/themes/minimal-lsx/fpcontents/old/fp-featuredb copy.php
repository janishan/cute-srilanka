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
		<h2 class="discover-more-heading"><?php echo do_shortcode( of_get_option('fphomeheading') ); ?></h1>
	</div>
<div class="discover-more-boxes-wrapper">	
<?php $fboxclm = of_get_option('nfbox1', '6');
foreach (range(1, $fboxclm) as $fboxn) { ?>
<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' || of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' || of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?>

<div class="discover-more-box discover-more-box-number-<?php echo of_get_option('featured-po' . $fboxn, $fboxn ); ?> anim after">

	<?php if ( of_get_option('featured-link' . $fboxn , '#') != '' ): ?>
	<a href="<?php echo of_get_option('featured-link' . $fboxn , '#'); ?>" <?php if ( of_get_option('featured-link-nw' . $fboxn, '0') == '1'  ): ?> target="_blank" <?php endif; ?> data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" data-transition="pop">
	<?php endif; ?>

	<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' ): ?>
	<img src="<?php echo of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg'); ?>"/>
	<?php endif; ?>
	
	<div class="fb-content anim">
	<div class="fb-content-inner anim">
	<?php if ( of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' ): ?>
	<h2 class="after"><?php echo of_get_option('featured-title' . $fboxn, 'Featured'); ?></h2>
	<?php endif; ?>

	<?php if ( of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?><p class="anim"><?php echo do_shortcode(of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.')); ?></p>
	<?php endif; ?>

	<?php if ( of_get_option('featured-link-text' . $fboxn, 'Read More...') != '' ): ?>
	<?php /*<span class="read-more"><?php echo of_get_option('featured-link-text' . $fboxn, 'Read More...'); ?></span>*/ ?>
	<a href="<?php echo of_get_option('featured-link' . $fboxn , '#'); ?>" <?php if ( of_get_option('featured-link-nw' . $fboxn, '0') == '1'  ): ?> target="_blank" <?php endif; ?> data-rel="popup" class="read-more ui-btn ui-corner-all ui-shadow ui-btn-inline" data-transition="pop">Read More</a>
	<?php endif; ?>
	</div>
	</div>

	<?php if ( of_get_option('featured-link' . $fboxn , '#') != '' ): ?></a><?php endif; ?>
</div>

<?php endif; } ?>

</div>  
</div>  



<?php if ( of_get_option('fboxpov', '0') == '1' ) : ?>
<script type="text/javascript">	jQuery(window).load(function() {  tinysort('div#fpfboxid>div',{attr:'class', order:'<?php echo of_get_option('fbfboxord', 'desc'); ?>'});  }); </script>
<?php endif; endif;  ?>
