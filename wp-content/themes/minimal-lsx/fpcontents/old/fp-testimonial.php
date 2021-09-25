<?php 
/* 	Travel Theme's Testiminial Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 3.0
*/

?>
<!--- ============  TESTIMONIALS  =========== ------------>
<?php if (of_get_option('tes-cln', '1') == '1' ): ?>
<div class="boxcontainer testimonials">

<div class="fpage-quote">
<div class="customers-comment boxrel">
	<h3>Share your thoughts</h3>
<ul>
<?php

if (of_get_option('tes-qun', '0') != '1' ): $cltes= of_get_option('numclientt', '10');
else:  $cltes="1"; endif;

foreach (range(1, $cltes) as $cltesnumber) {
 if ( of_get_option('bottom-quotation'. $cltesnumber, 'Quote ' . $cltesnumber . ': All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') != '' ) : 

echo '<li>';  if (of_get_option('tes-link', '')!= ''): echo '<a href="' . of_get_option('tes-link', '') . '" target="_blank">'; endif;  echo '<q>' . of_get_option('bottom-quotation'. $cltesnumber, 'Quote  ' . $cltesnumber . ': All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team') . '</q>'; if (of_get_option('tes-link', '')!= ''): echo '</a>';  endif; echo '</li>' ; 
endif; }


?>
</ul>
</div></div>

<?php if (of_get_option('tes-qun', '0') != '1' ):  ?>
<script type="text/javascript">
	/* jQuery('.customers-comment').easyTicker({
	direction: 'fade',
	easing: 'easeInOutBack',
	speed: 'slow',
	interval: <?php echo of_get_option('testi-speed', '3000');  ?>,
	height: 'auto',
	visible: 1,
	mousePause: 1,
	}); */
</script>
<?php endif; ?>
</div>
<?php endif; ?>

<!--- ============  END OF TESTIMONIALS  =========== ------------>
