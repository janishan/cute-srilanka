<?php
/*
	Template Name: Front Page
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since travel 1.0
*/
get_header();

/*
	$fpoarray = array( 	'slide'=>'Main Slider',
		'featuredb'=>'Featured Boxes', 
		'featuredc'=>'Featured Contents',
		'ecom'=>'E-Commerce/WooCommerce',
		'service'=>'Searvices and Booking',
		'extra'=>'Front Page Extra',
		'gallery'=>'Gallery',
		'contact'=>'Contact Box',
		'map'=>'Mapping Box',  
		'wpblog'=>'Blog Index or Page',
		'clients'=>'Clients List', 
		'testimonial'=>'Clients Testimonials' 
	);


//if ( of_get_option('fporder-check', '0') == '1' ): $fpartorder = of_get_option('fporder', $fpoarray); else: $fpartorder = $fpoarray; endif;
foreach ( $fpoarray as $key => $value ) { get_template_part( 'fpcontents/fp', $key ); }
*/

?>

<?php
	

	get_template_part( 'fpcontents/fp', 'maincontent' );
	get_template_part( 'fpcontents/fp', 'infotabs' );
	get_template_part( 'fpcontents/fp', 'featuredb' );
	?>
	
	<div class="featured-accommodation-wrapper">
		<div class="featured-accommodation-title-wrapper section-title-wrapper">
			<h2 class="featured-accommodation-title section-title">Featured Accommodation</h2>
			<div class="featured-accommodation-slider-nav slider-nav"></div>
		</div>
<?php
	echo do_shortcode('[lsx_to_post_type_widget post_type="accommodation" columns="3" limit="9" disable_placeholder="0" disable_text="0" order="ASC" orderby="none" carousel="1" include="" ]');
?>
		<div class="view-all-wraper">
			<a href="/accommodation" class="bttn primary-btn ghost-btn">Explore More Accommodation</a>
		</div>
	</div>

	<div class="destination-wrapper">
		<h2 class="destination-heading big-heading">The Ceylon</h2>
		<div class="destination-title-wrapper section-title-wrapper">
			<h2 class="destination-title section-title">Destinations</h2>
			<p class="desitnation-intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta. Nullam consectetur mattis ultrices. Ut in purus in tortor elementum ultricies</p>
			<a class="desitnation-link bttn primary-btn" href="/destination">Learn More</a>
			<div class="destination-slider-nav slider-nav"></div>
		</div>
		
<?php
	echo do_shortcode('[lsx_to_post_type_widget post_type="destination" columns="1" limit="9" disable_placeholder="0" disable_text="0" order="ASC" orderby="none" carousel="0" include="" ]');
?>
		<div class="destination-map-wrapper">
			<?php include locate_template( array( 'partials/destinaiton-map.php' ) ); ?>
		</div>
	</div>

	<div class="things-to-do-wrapper">
		<div class="things-to-do-title-wrapper section-title-wrapper">
			<h2 class="things-to-do-title section-title">Things To Do</h2>
			<div class="destination-slider-nav slider-nav"></div>
		</div>
<?php
	echo do_shortcode('[lsx_to_post_type_widget post_type="tour" columns="1" limit="9" disable_placeholder="0" disable_text="0" order="ASC" orderby="none" carousel="1" include="" ]');
?>
		<div class="view-all-wraper">
			<a href="/things-to-do/" class="link primary-link">Explore More Things To Do</a>
		</div>
	</div>

	<?php
	get_template_part( 'fpcontents/fp', 'instafeed' );
?>

</div>	


	
</div>
<?php get_footer(); ?>