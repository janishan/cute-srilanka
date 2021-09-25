<?php
/* 	Travel Theme's Sub Style
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 3.0
*/
?>
  
<style type="text/css">
	.site-title a, .site-title a:active,  .site-title a:hover { color: #<?php echo get_header_textcolor(); ?>; }
	.credit { display: <?php if (of_get_option('credit') == '1') :  echo ('none'); endif;?>; }
	#container .thumb, .boxcontainer .thumb {background-image: url("<?php if (of_get_option('ft-back', get_template_directory_uri() . '/images/thumb-back.jpg') != '') : echo of_get_option('ft-back', get_template_directory_uri() . '/images/thumb-back.jpg'); else:  echo  get_template_directory_uri() . '/images/thumb-back.jpg'; endif; ?>");}
	
	<?php 
	if ( of_get_option('nfboxwidth', '85') != '85' || of_get_option('nfboxwidth', '85') != ''  ): echo '@media screen and (min-width: 1200px){.featured-boxs{ width: '. of_get_option('nfboxwidth', '85') . '%; }}'; endif;
	if ( of_get_option('nfconwidth', '24.5') != '24.5' || of_get_option('nfconwidth', '24.5') != '' ): echo '@media screen and (min-width: 1200px){.featured-content { width: '. of_get_option('nfconwidth', '24.5') . '%; }}'; endif;
	
	if ( of_get_option('cus-font', '0') == '1' ):
	d5tfonts( 'body, #container, #content, #content-full, .read-more', 'body_font', '15px', 'Arial, Helvetica, sans-serif', 'normal', 'normal', 'justify', '', '#525253' );
	d5tfonts( '.label-text a h3', 'fheading_font', '40px', 'Oswald, sans-serif', 'normal', 'normal', 'center', '', '#ffffff' );
	d5tfonts( 'h1.page-title, h1.arc-post-title, h2.post-title, h2.comments, h3#reply-title, h2.post-title-color, #ecom-box-item .boxtoptitle ', 'ptitle_font', '35px', 'Oswald, sans-serif', 'normal', 'normal', 'justify', '', '#525253' ); 
	d5tfonts( '.featured-contents h2.fpagenews, .featured-box h2, .featured-content h2 span, .featured-box h2 span, h2.comments a, .featured-contents h2.fpagenews span, .featured-content h2, #right-sidebar .widget h3.widget-title, #footer-sidebar .widget h3.widget-title, .featured-contents h2.post-title a, h2#client-text.post-title, .boxtoptitle, .contactcontainer .boxtoptitle, .snf-heading, .ecom-part h3.about-us', 'fbt_font', '17px', 'Oswald, sans-serif', 'normal', 'normal', 'justify', '', '#00c7ef' );
	d5tfonts( '.featured-contents, .featured-contents a, .featured-boxs, .featured-boxs a', 'fheadingd_font', '15px', 'Arial, Helvetica, sans-serif', 'normal', 'normal', 'justify', '', '#525253' );
	d5tfonts( '#travel-main-menu a, #travel-main-menu ul ul a', 'menu_font', '14px', 'Lato, sans-serif', 'normal', 'normal', 'left', '', '#ffffff' );
	endif;
	
	echo '@media screen and (min-width: 1201px) {';
	if ( of_get_option('topmbp', 'center') != 'center' ): echo '#top-menu-container {text-align: '.of_get_option('topmbp', 'center').'; }'; endif; 
	if ( of_get_option('logopos', 'left') == 'right' ): echo 'img.site-logo, h1.site-title { float: right; } #travel-main-menu { float: left; }'; endif;
	if ( of_get_option('logopos', 'left') == 'center' ): echo 'img.site-logo, h1.site-title, #travel-main-menu { float: none; margin: 5px auto; display: table; max-width: 100%; }'; endif;
	echo '}';	
	
	if (of_get_option('colorcssaccept', '0') == '1') :
	$color1 = of_get_option('color1', '#00C7EF');
	$btncolor1 = of_get_option('btncolor1', '#00ADCF');
	$btncolor2 = of_get_option('btncolor2', '#00C7EF');
	$mmcolor1 = of_get_option('mmcolor1', '#111111');
	$mmcolor2 = of_get_option('mmcolor2', '#444444');
	
	$opcolor1 = hex2rgba($color1,.1);
	$opcolor3 = hex2rgba($color1,.3);
	$opcolor9 = hex2rgba($color1,.9);
	
	echo ' 
	#header.smallheader { background-color: '. hex2rgba($color1,.7) . '; }

	.read-more:hover, .boxtoptitle, .featured-content h2 span, .featured-box h2 span, h2.comments a, .featured-contents h2.fpagenews span, .widget h3.widget-title, h2#client-text.post-title, blockquote::before, q::before, blockquote::after, q::after, a { color: '. $color1 . '; }
	
	.bcolor-back, #page-nav a:hover, .featured-boxs img:hover, .postmetadata:hover, ul.lboxd ul:hover { background-color: '. $color1 . ' !important; }
	
	#page-nav a:hover , .fpage-quote , input[type="text"]:focus, input[type="email"]:focus, textarea:focus,input#s:focus,input[type="password"]:focus,textarea#comment:focus, #container .thumb:hover, .boxcontainer .thumb:hover, blockquote, q, .comment-body, #commentsbox .avatar, .widget h3.widget-title { border-color: '. $color1 . ' !important; }
	
	#top-menu-container, .fpage-quote, .postmetadata { background-color: '. $opcolor3 . '; }
	.fpage-quote, blockquote, q { background-color: '. $opcolor1 . '; }
	#travel-main-menu ul ul, .sub-menu, .sub-menu ul ul, ul.lboxd li ul  { background-color: '. $opcolor9 . '; }
	
	button, input[type="reset"], input[type="button"], input[type="submit"], #respond .form-submit input#submit, #wp-submit, .contactcontainer [type="submit"] {  background:'. $btncolor1 . ';background:-moz-linear-gradient( top, '. $btncolor1 . ' 0%, '. $btncolor1 . ' 50%, '. $btncolor2 . ' 65%, '. $btncolor2 . ');background:-webkit-gradient( linear, left top, left bottom, from('. $btncolor1 . '), color-stop(0.50, '. $btncolor1 . '), color-stop(0.65, '. $btncolor2 . '), to('. $btncolor2 . '));}
	
	button:hover,input[type="reset"]:hover,input[type="button"]:hover,input[type="submit"]:hover,#respond .form-submit input#submit:hover,#wp-submit:hover, .contactcontainer input[type="submit"]:hover {  background:'. $btncolor2 . ';background:-moz-linear-gradient( top, '. $btncolor2 . ' 0%, '. $btncolor2 . ' 50%, '. $btncolor1 . ' 65%, '. $btncolor1 . ');background:-webkit-gradient( linear, left top, left bottom, from('. $btncolor2 . '), color-stop(0.50, '. $btncolor2 . '), color-stop(0.65, '. $btncolor1 . '), to('. $btncolor1 . '));}

	#travel-main-menu { background: '. $mmcolor1 . '; background: rgba(0, 0, 0, 0) linear-gradient('. $mmcolor2 . ', '. $mmcolor1 . ') repeat scroll 0 0;  }
	#travel-main-menu a { color:#FFFFFF; }
	#travel-main-menu ul { background: '. $mmcolor1 . '; }
	.mobile-menu { background: '. $mmcolor1 . '; }
	';
	if ( of_get_option('ppwcolor', '#f9f9f9' ) != '#f9f9f9') : echo '#right-sidebar .widget, .featured-contents .post, .featured-contents .hentry, .featured-contents .no-results, #container { background-color: '.of_get_option('ppwcolor', '#f9f9f9').'; } #right-sidebar .widget h3 {background-image: none; }' ; endif; 
	 echo of_get_option('color-setting', '') ; 
	 endif;
	 
	 if (of_get_option('slide-aotop', '0') == '1') : echo '.vspace { height: 1px; } #slide-container { position: relative; }' ; endif; 
	
	if (of_get_option('snfcolor', '#00C7EF') != '#00C7EF') : $sfcolor = of_get_option('snfcolor', '#00C7EF') .'! important'; echo '.snf-heading h2, .sertitle:hover { color: '. $sfcolor . '; }.snf-heading h2 { border-color: '. $sfcolor . '; }.serdescription, .sertitle .minusicon, .serbooking { background-color: '. $sfcolor . '; }';   endif;
	
	if (of_get_option('colorcssaccept', '0') == '1') :  echo of_get_option('color-setting', '') ; endif;
	if (of_get_option('site-layout', '2c-r-fixed') == '1col-fixed') : echo '#content { width: 100%; } #right-sidebar { display: none; } .featured-contents .post, .featured-contents .hentry, .featured-contents .no-results { width: auto; }' ; endif; 
	if (of_get_option('site-layout', '2c-r-fixed') == '2c-l-fixed') : echo '#content { float: right; } #right-sidebar, #right-sidebar .widget { float: left; } .featured-contents #right-sidebar { margin: -10px 0 0; }' ; endif; 
	
	if (of_get_option('navpost', '0') == '1') : echo '.up-bottom-border { display: none; }' ; endif; 	
	if (of_get_option('tmpost', '0') == '1') : echo '.postmetadata { display: none; }' ; endif; 
	if (of_get_option('tpost', '0') == '1') : echo '#container .thumb, .boxcontainer .thumb, .postmetadata { display: none; } .fwtsep { display: block; }' ; endif; 
	
	$body_back = of_get_option('website-back');
	if ( $body_back ):
	if ( $body_back['image'] != get_template_directory_uri() . '/images/background.jpg' || $body_back['color'] != '#E4E8E9' || $body_back['repeat'] != 'no-repeat' || $body_back['position'] != 'top center' || $body_back['attachment'] != 'scroll' ) :
	echo 'body { background-image: url("'. $body_back['image'] . '"); background-color:'. $body_back['color'] . '; background-repeat:'. $body_back['repeat'] . '; background-position:'. $body_back['position'] . '; background-attachment:'. $body_back['attachment'] . ';}';
	endif; endif; 
	
	$fbox_back = of_get_option('fb-backc');
	if ( $fbox_back ):
	if ( $fbox_back['image'] != get_template_directory_uri() . '/images/fbcback.png' || $fbox_back['color'] != '#cccccc' || $fbox_back['repeat'] != 'repeat' || $fbox_back['position'] != 'top left' || $fbox_back['attachment'] != 'scroll' ) :
	echo '.featured-boxs { background-image: url("'. $fbox_back['image'] . '"); background-color:'. $fbox_back['color'] . '; background-repeat:'. $fbox_back['repeat'] . '; background-position:'. $fbox_back['position'] . '; background-attachment:'. $fbox_back['attachment'] . ';} .featured-box { background-image: none; border: none; } .rover { display: none; } .featured-box h2 { text-shadow: none; }'; 
	endif;  endif; 	
	
	if ( of_get_option('fc-backc', '#eceded' ) != '#eceded' ): echo '.featured-content { background-color:'.of_get_option('fc-backc', '#eceded' ).';} .featured-content h2 { text-shadow: none; background-image: none; } '; endif;
	
		if ( of_get_option('wooc1', '#26bdef') != '#26bdef' || of_get_option('wooc2', '#076896') != '#076896' ):
		$woocolor1 = of_get_option('wooc1', '#26bdef');
		$woocolor2 = of_get_option('wooc2', '#076896');
		echo ' .ecom-part h2.boxtoptitle { color: '.$woocolor2.' !important; }
.ecom-part h3.about-us, .woocommerce ul.products li.product a, .woocommerce .woocommerce-info::before, .woocommerce .woocommerce-error::before, .woocommerce ul.products li.product .price, .woocommerce ul.products li.product .button, .woocommerce div.product p.price, .woocommerce div.product span.price { color: '.$woocolor1.'; }
.woocommerce span.onsale, .woocommerce ul.products li.product h3, .woocommerce div.product form.cart .button, .woocommerce-cart .wc-proceed-to-checkout 
a.checkout-button, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover { background-color: '.$woocolor1.'; } #main-menu-con a.wccart-icon { background-color: '.hex2rgba($woocolor1, .7).'; }
.woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .woocommerce div.product .product_title {  background-color: '.$woocolor2.'; }
.woocommerce .woocommerce-info, .woocommerce .woocommerce-error, .woocommerce .woocommerce-message { border-color: '.$woocolor1.'; }';
	endif; 
 ?>
</style>

<link rel="shortcut icon" href="<?php echo of_get_option('favicon', get_template_directory_uri() . '/images/favicon.ico'); ?>" />