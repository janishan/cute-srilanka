<?php
/* 	Travel Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<div class="more-info-wrapper" id="more-info">
	<div class="more-info-title-wrapper" >
		<h3 class="more-info-heading"><?php echo do_shortcode( of_get_option('fpinfotitle') ); ?></h3>
	</div>
<div class="more-info-tabs-wrapper">	
<?php $itabcount = of_get_option('nitab1', '6');
foreach (range(1, $itabcount) as $itabn) { ?>
<?php if (of_get_option('infotab-' . $itabn . '-title', 'Title') != '' || of_get_option('infotab-' . $itabn . '-link', '#') != '' ): ?>


	<div class="more-info-tab">
		<a 
			href="<?php echo of_get_option('infotab-' . $itabn . '-link','#'); ?>" 
			<?php if ( of_get_option('infotab-' . $itabn . '-link-new-tabs', '0') == '1'  ): ?>
				target="_blank"
			<?php endif; ?>
		>
			<?php echo of_get_option('infotab-' . $itabn . '-title','Title'); ?>
		</a>
	</div>
<?php endif; } ?>
</div>  
</div>  
