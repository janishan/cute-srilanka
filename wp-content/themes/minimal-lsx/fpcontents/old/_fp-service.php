<?php 
/* 	Travel Theme's Services and Booking Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.7
*/


?>
<?php if ( of_get_option('snfbox', '1') == '1' ):  ?>
<div id="service-box-item" class="boxrel" >
<div class="snfbox">
<div class="sep2">sep</div>

	<div class="service-box">
		<div class="snf-heading"><h2><?php echo of_get_option('ser-heading','Services'); ?></h2></div>
        <ul class="accitems">
        <?php $ser_number = of_get_option('sitem-number', '7'); foreach (range(1, $ser_number ) as $sernumber ) { if ( of_get_option('sertitle' . $sernumber,'SERVICE ITEM - '. $sernumber ) != '' ): ?>
        
        	<li class="sertitle"><span class="plusicon"><?php echo of_get_option('sertitle' . $sernumber,'SERVICE ITEM - '. $sernumber ); ?></span></li>
            <li class="serdescription"><?php echo of_get_option('serdes' . $sernumber,'It is Amazing!  <em>Over 60 million people</em> have chosen WordPress to power the place on the web' ); ?><?php if ( of_get_option('serlurl' . $sernumber,'#') != '' && of_get_option('serltext' . $sernumber,'READ MORE') != '' ): echo '<a class="serlink" href="'.of_get_option('serlurl' . $sernumber,'#').'" target="_blank">'.of_get_option('serltext' . $sernumber,'READ MORE').'</a>';  endif; ?></li>
         <?php endif; } ?>   
        </ul>
       <?php  //echo do_shortcode(of_get_option('bspecial', '<img src="'.get_template_directory_uri() . '/images/special.jpg'.'" />')); ?>
       <?php  echo '<img src="'.get_template_directory_uri() . '/images/special.png'.'" />'; ?>
       
    <script type="text/javascript"> 
     	var saction = 'click';
		var saction2 = 'blur';
		var sspeed = "500";
		jQuery(document).ready(function(){
			jQuery('.sertitle').on(saction, function(){
				jQuery(this).next().slideToggle(sspeed)				
				.siblings('.serdescription').slideUp();
				var imgg = jQuery(this).children('span');
   				jQuery('span').not(imgg).removeClass('minusicon');
   				imgg.toggleClass('minusicon');
				
			});//End on click
			jQuery('.sertitle span').removeClass('minusicon');
		});//End Ready

    </script>   
	</div>
    
    <div class="fea-box">
    	<div class="snf-heading"><h2><?php echo of_get_option('booking-heading','Book Now!'); ?></h2></div>
        	<?php  if ( of_get_option('booking-content','') != '' ): $bookingcode = '<div class="serbooking">'. of_get_option('booking-content','') .'</div>'; else: $bookingcode = '<div class="nocodeimage"><img src="'.of_get_option('booking-image',get_template_directory_uri() . '/images/booking.jpg').'" /></div>'; endif;
			echo do_shortcode($bookingcode); ?>
    </div>

<div class="sep2">sep</div>
</div>
</div>

<?php endif; ?>

