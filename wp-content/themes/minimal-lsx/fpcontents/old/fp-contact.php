<?php 
/* 	Travel Theme's Contact Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.7
*/

?>

<!--- ============  CONTACT  =========== ------------>

<?php if ( of_get_option('contactbox', '1') == '1' ):  ?>
	</div>
</div> <!--  closing the container to make the below box full width -->
	<div id="contact-box-item" class="destination-container boxrel" style="background-color:<?php echo of_get_option('contactbox-color', '#09A0E7'); ?>; background-image:url('<?php echo of_get_option('contactbox-image', get_template_directory_uri() . '/images/contact.jpg'); ?>');">
		<?php /*<div class="floatleft" >
            	<?php echo do_shortcode( of_get_option('contactbox-form', '<strong>You Should Install any Contact Form Plugin and Generate ShortCode. You can use that ShortCode into TRAVEL Options. We Recommend to install <a class="colorwhite" href="http://wordpress.org/plugins/contact-form-7" target="_blank" >Contact Form 7 Plugin</a></strong>') ); ?>
		</div>*/ ?>
           
		
		<div class="content-box dark text-align-center">
			<h2 class="boxtoptitle" ><?php echo of_get_option('contactbox-heading', 'Contact Content'); ?></h2>
			<a href="<?php echo of_get_option('contactbox-item-link', 'Inquire Now'); ?>" class="read-more">Get In Touch</a>	
		</div>
	</div>
<div class="wrap container" role="document" tabindex="-1">
	<div class="content role row">
<?php endif; ?>

<!--- ============  END OF CONTACT  =========== ------------>

