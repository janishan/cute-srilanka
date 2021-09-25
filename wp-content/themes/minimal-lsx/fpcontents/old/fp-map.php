<?php 
/* 	Travel Theme's Map Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.7
*/

?>

<!--- ============  MAPPING  =========== ------------>

<?php if ( of_get_option('mappingbox', '1') == '1' ):  ?>
<div class="clear"></div>
<div id="mapping-box-item" class="mappingcontainer boxrel" >
	<?php echo do_shortcode( of_get_option('mappingtbox-map', '<span style="padding: 20px; display:block;">You Should Install any Mapping Plugin and Generate ShortCode. You can use that ShortCode into TRAVEL Options. We Recommend to install <a href="https://wordpress.org/plugins/simple-map" target="_blank" >Simple Map Plugin</a></strong></span>') ); ?>
<div class="sep2">sep</div> 
</div>
<?php endif; ?>

<!--- ============  END OF MAPPING  =========== ------------>