<?php 
/* 	Travel Theme's Extra Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 4.1
*/

?>

<!--- ============  EXTRA  =========== ------------>

<?php if ( of_get_option('fpextrab', '<img src="'.get_template_directory_uri() . '/images/extra.jpg" width="100%" />') != '' ):  ?>
<div class="clear"></div>
<div id="extra-box-item" class="extracontainer boxrel" >
	<?php echo do_shortcode( of_get_option('fpextrab', '<img src="'.get_template_directory_uri() . '/images/extra.jpg" width="100%" />') ); ?>
</div>
<div class="clear"></div>
<?php endif; ?>

<!--- ============  END OF EXTRA  =========== ------------>