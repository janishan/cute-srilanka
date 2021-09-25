<?php
/* 	Travel Theme's Featured Content to show the Featured Items of Front Page
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 3.0
*/
?>
<?php if ( of_get_option('fcboxv', '1') == '1' ): ?>
<div class="featured-contents boxrel" id="fpfconid">
<?php $fboxclm2 = of_get_option('nfbox2', '3');
foreach (range(1, $fboxclm2) as $fboxn2) { ?>
<?php if ( of_get_option('fcontent-image' . $fboxn2, get_template_directory_uri() . '/images/fcontent-image'. $fboxn2 . '.jpg') != '' || of_get_option('fcontent01-title' . $fboxn2, 'Travel') != '' || of_get_option('fcontent02-title' . $fboxn2, 'Content') != '' || of_get_option('fcontent-description' . $fboxn2, '<b>A Smart way of Natural Presence</b><p>This is a Test Description for Travel Theme. If you face any problem please contact with D5 Creation.</p>') != '' ): ?>

<span class="featured-content fconnumber-<?php echo of_get_option('featuredc-po' . $fboxn2, $fboxn2 ); ?>">
<?php if ( of_get_option('fcontent-link' . $fboxn2 , '#') != '' ): ?>
<a href="<?php echo of_get_option('fcontent-link' . $fboxn2 , '#'); ?>" <?php if ( of_get_option('fcontent-link-nw' . $fboxn2, '0') == '1'  ): ?> target="_blank" <?php endif; ?> >
<?php endif; ?>

<?php if ( of_get_option('fcontent01-title' . $fboxn2, 'Travel') != '' || of_get_option('fcontent02-title' . $fboxn2, 'Content') != '' ): ?>
<h2 <?php if ( of_get_option('fcontent-special' . $fboxn2, 'HOT') != '' ): echo 'style="padding:0 70px 10px 10px;"'; endif; ?> ><span><?php echo of_get_option('fcontent01-title' . $fboxn2, 'Travel'); ?></span> <?php echo of_get_option('fcontent02-title' . $fboxn2, 'Content'); ?></h2>
<?php endif; ?>

<?php if ( of_get_option('fcontent-special' . $fboxn2, 'HOT') != '' ): ?>
<span class="fcontent-special" style="background:<?php echo of_get_option ( 'fcontent-special-back' . $fboxn2, '#1da4f9'); ?>;"><?php echo of_get_option('fcontent-special' . $fboxn2, 'HOT'); ?></span>
<?php endif; ?>

<?php if ( of_get_option('fcontent-image' . $fboxn2, get_template_directory_uri() . '/images/fcontent-image'. $fboxn2 . '.jpg') != '' ): ?>
<img class="fcon-image" src="<?php echo of_get_option('fcontent-image' . $fboxn2, get_template_directory_uri() . '/images/fcontent-image'. $fboxn2 . '.jpg'); ?>"/>
<?php endif; ?>

<?php if ( of_get_option('fcontent-description' . $fboxn2, '<h4>ASmart way of Natural Presence</h4><p>This is a Test Description for Travel Theme. If you face any problem please contact with D5 Creation.</p>') != '' ): ?>
<p><?php echo do_shortcode(of_get_option('fcontent-description' . $fboxn2, '<h4>ASmart way of Natural Presence</h4><p>This is a Test Description for Travel Theme. If you face any problem please contact with D5 Creation.</p>')); ?></p>
<?php endif; ?>

<?php if ( of_get_option('fcontent-link-text' . $fboxn2, 'Read More...') != '' ): ?>
<span class="read-more"><?php echo of_get_option('fcontent-link-text' . $fboxn2, 'Read More...'); ?></span>
<?php endif; ?>

<?php if ( of_get_option('fcontent-link' . $fboxn2 , '#') != '' ): ?></a><?php endif; ?>
</span>

<?php endif; } ?>

</div> <!-- featured-contents -->

<?php if ( of_get_option('fconpov', '0') == '1' ) : ?>
<script type="text/javascript">	jQuery(window).load(function() {  tinysort('div#fpfconid>span',{attr:'class', order:'<?php echo of_get_option('fbfconord', 'desc'); ?>'});  }); </script>
<?php endif; endif; ?>

