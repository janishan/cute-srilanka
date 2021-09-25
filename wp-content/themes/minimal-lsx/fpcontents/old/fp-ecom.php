<?php 
/* 	Travel Theme's E-Commerce Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 3.0
*/
?>
<?php if ( of_get_option('ecombox', '0') == '1' ): ?>
<div id="ecom-box-item" class="ecom-box-part boxrel">
	<div class="box90 ecom-part">
    <div class="sep2">sep</div><br />
		<h2 class="boxtoptitle"><?php echo do_shortcode(of_get_option('ecomtitle', 'Our <em>Awesome</em> Products')); ?></h2>
		<h3 class="about-us"><?php echo do_shortcode(of_get_option('ecomsubtitle', 'Where <em>Passion and Creativity</em> Meets Experience')); ?></h3>
		<p class="about-us"><?php echo do_shortcode(of_get_option('ecomdes', 'We are a small team of industry veterans having decades of <em>Experience in web Development</em> and design')); ?></p>
      <div class="d5woospace"><?php   echo do_shortcode(of_get_option('wooshortcod', '[products]'));  ?></div>
      <div class="d5wooextra"><?php   echo do_shortcode(of_get_option('wooextra', ''));  ?></div>
    </div>
</div>
<?php endif; ?>