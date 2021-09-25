<?php
/* 	Travel Theme's Sub Functions
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 3.0
*/

// 	Link Open in Same/Nwq Window
	function linkosn($losnv = '0' ) { if ( $losnv == '1' ): return ' target="_blank" '; else: return ' '; endif; }

// 	Functions for Color Shades
	function shadeColor($color, $percent) {
	$num = base_convert(substr($color, 1), 16, 10);
	$amt = round(2.55 * $percent);
	$r = ($num >> 16) + $amt;
	$b = ($num >> 8 & 0x00ff) + $amt;
	$g = ($num & 0x0000ff) + $amt;
	
	return '#'.substr(base_convert(0x1000000 + ($r<255?$r<1?0:$r:255)*0x10000 + ($b<255?$b<1?0:$b:255)*0x100 + ($g<255?$g<1?0:$g:255), 10, 16), 1);
}
  
// 	Convert hexdec color string to rgb(a) string 
 	function hex2rgba($scolor, $sopacity = false) { 
 	$sdefault = 'rgb(0,0,0)';
	if(empty($scolor)) return $sdefault;  if ($scolor[0] == '#' ) { $scolor = substr( $scolor, 1 ); }
    if (strlen($scolor) == 6) { $shex = array( $scolor[0] . $scolor[1], $scolor[2] . $scolor[3], $scolor[4] . $scolor[5] ); } 
	elseif ( strlen( $scolor ) == 3 ) { $shex = array( $scolor[0] . $scolor[0], $scolor[1] . $scolor[1], $scolor[2] . $scolor[2] ); } 
	else { return $sdefault; }
    $srgb =  array_map('hexdec', $shex);
    if($sopacity){ if(abs($sopacity) > 1) $sopacity = 1.0; $soutput = 'rgba('.implode(",",$srgb).','.$sopacity.')'; } 
	else { $soutput = 'rgb('.implode(",",$srgb).')'; }
    return $soutput;
	}	


//	WooCommerce Cart Icon Add
	if ( of_get_option('woo-cart-icon', '1') == '1' && in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	function d5_wc_cart_count($d5wmenu, $wargs) {
    if( $wargs->theme_location == 'main-menu'):
	$wcsccount = WC()->cart->cart_contents_count;
	$newmenup = '<li><a class="wccart-icon fa-shopping-cart" href="'. WC()->cart->get_cart_url() . '"> ' . $wcsccount . '</a></li>';
	$newmenun = $d5wmenu . $newmenup;
	return $newmenun;
	else: 
	return $d5wmenu;
	endif;
	}
	add_filter('wp_nav_menu_items','d5_wc_cart_count', 10, 2);
	}


// 	Font Styling Function
 	function d5tfonts($fselement, $fsoptionv, $fssized, $fsnamed, $fsitalicd, $fsweightd, $fsalignd, $fscfontd, $fscolord ) { 
	$fsoptiona = of_get_option($fsoptionv);
	if ( $fsoptiona['size'] != $fssized ): $fssizef = 'font-size:'. $fsoptiona['size'] . ';'; else: $fssizef = ''; endif;
	if ( $fsoptiona['face'] != $fsnamed ): $fsnamef = 'font-family:'. $fsoptiona['face'] . ';'; else: $fsnamef = ''; endif;
	if ( $fsoptiona['style'] != $fsitalicd ): $fsitalicf = 'font-style:'. $fsoptiona['style'] . ';'; else: $fsitalicf = ''; endif;
	if ( $fsoptiona['weight'] != $fsweightd ): $fsweightf = 'font-weight:'. $fsoptiona['weight'] . ';'; else: $fsweightf = ''; endif;
	if ( $fsoptiona['align'] != $fsalignd ): $fsalignf = 'text-align:'. $fsoptiona['align'] . ';'; else: $fsalignf = ''; endif;
	if ( $fsoptiona['cface'] ): $fscfontf = 'font-family:'. $fsoptiona['cface'] . ';'; else: $fscfontf = ''; endif;
	if ( $fsoptiona['color'] != $fscolord ): $fscolorf = 'color:'. $fsoptiona['color'] . ';'; else: $fscolorf = ''; endif;
	
	if (!empty($fselement)) :  echo $fselement . '{ ' . $fssizef . ' '. $fsnamef . ' ' . $fsitalicf .' ' . $fsweightf . ' ' . $fsalignf . ' ' . $fscfontf . ' ' . $fscolorf . ' }'; endif;
	}

