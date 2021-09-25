<?php
/* 	Travel Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>
<div class="instafeed-wrapper">
	<div class="instafeed-title-wrapper section-title-wrapper">
		<h2 class="instafeed-title section-title"><?php echo do_shortcode( of_get_option('fpinstafeedtitle') ); ?></h2>
		<div class="insta-slider-nav slider-nav"></div>
	</div>
	<div class="instafeed-slider">
		<?php
			$fboxclm = of_get_option('nifeed1', '4');
			foreach (range(1, $fboxclm) as $fboxn) {
		?>
		<?php if ( of_get_option('insta-slide-image' . $fboxn, get_template_directory_uri() . '/assets/images/insta-images/insta-image'. $fboxn . '.jpg') != '' ): ?>
			<div class="instafeed-slide instafeed-slide-<?php echo $fboxn;?>">
				<div class="instafeed-slide-image-wrapper" style="background-image:url(<?php echo do_shortcode( of_get_option('insta-slide-image' . $fboxn, get_template_directory_uri() . '/assets/images/insta-images/insta-image'. $fboxn . '.jpg') ); ?>)">
					<a href="<?php echo do_shortcode( of_get_option('insta-slide-link' . $fboxn,'#') ); ?>"<?php if ( of_get_option('insta-slide-link-new-tabs' . $fboxn, '0') == '1'  ): ?> target="_blank" <?php endif; ?> class="instafeed-slide-link"></a>
				</div>
			</div>
		<?php endif; } ?>
	</div>
</div>
