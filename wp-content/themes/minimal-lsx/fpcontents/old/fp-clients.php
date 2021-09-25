<?php 
/* 	Travel Theme's Clients Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 3.0
*/

?>
<!--- ============  CLIENTS  =========== ------------>
<?php 
if ( of_get_option('client-visibility', '1') == '1' ) :  ?>
<div class="boxcontainer boxrel">
<h2 id="client-text" class="post-title"><?php echo of_get_option('client-text', 'Some of our Proud Partners') ?></h2>
<div class="clear"></div>
<div id="client"><ul id="client-scroller">

	<?php
	if ( of_get_option('clntype', '3') == '1' ) :  $clsin = '7'; else: $clsin = of_get_option('numclient', '14'); endif;
	
	
	foreach (range(1,$clsin) as $clsinumber)  {
 
	if ( of_get_option('client' . $clsinumber, get_template_directory_uri() . '/images/client.png') != '' ) : echo '<li>'; if ( of_get_option('client-image' . $clsinumber . '-link', '') != '' ): echo '<a href="' . of_get_option('client-image' . $clsinumber . '-link', '') . '" target="_blank">'; endif; ?><img src="<?php echo of_get_option('client' . $clsinumber, get_template_directory_uri() . '/images/client.png'); ?>"/><?php if (of_get_option('client-image' . $clsinumber . '-link', '') != '' ): echo '</a>'; endif; echo '</li>'; endif; } ?>

</ul></div>

<?php 
if ( of_get_option('clntype', '3') == '3' ) :
wp_enqueue_script( 'travel-client-slider', get_template_directory_uri() . '/js/jquery.simplyscroll.min.js' ); ?>
<script type="text/javascript">
(function(jQuery) {
	jQuery(function() {
		jQuery("#client-scroller").simplyScroll({
			auto: <?php if ( of_get_option('client-scroll', '0') != '0' ) : echo 'true'; else: echo 'false'; endif; ?>,
			manualMode: 'loop',
			speed: <?php echo of_get_option('client-speed', '5');  ?>
		});
	});
})(jQuery);
jQuery(window).load(function(){ jQuery('.simply-scroll').width(jQuery('.boxcontainer').width()-50); });
jQuery(window).resize(function(){ jQuery('.simply-scroll').width(jQuery('.boxcontainer').width()-50); });
</script>

<?php endif; ?>
</div>
<div class="clear"></div>
<?php endif; ?>


<!--- ============  END OF CLIENTS  =========== ------------>

