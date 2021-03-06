<?php
/**
 * Tours Widget Content Part
 *
 * @package     tour-operator
 * @category    tours
 * @subpackage  widget
 */

global $disable_placeholder, $disable_text, $disable_view_more, $post;

$has_single = ! lsx_to_is_single_disabled();
$permalink = '';

if ( $has_single ) {
	$permalink = get_the_permalink();
}
?>

<?php lsx_widget_entry_before(); ?>

<article <?php post_class(); ?>>

	<?php lsx_widget_entry_top(); ?>

	<?php if ( empty( $disable_placeholder ) ) { ?>
		<div class="lsx-to-widget-thumb">
			<?php 
            if ( false !== $has_single ) {
?>
	<?php lsx_thumbnail( 'lsx-thumbnail-medium' ); ?>
<a href="<?php echo esc_url( $permalink ); ?>"><?php } ?>
				
			<?php 
            if ( false !== $has_single ) {
?>
</a><?php } ?>
		</div>
	<?php } ?>

	<div class="lsx-to-widget-content">

		<?php lsx_widget_entry_content_top(); ?>

		<h4 class="lsx-to-widget-title text-center item-title">
			<?php 
            if ( false !== $has_single ) {
?>
<a href="<?php echo esc_url( $permalink ); ?>"><?php } ?>
				<?php the_title(); ?>
			<?php 
            if ( false !== $has_single ) {
?>
</a><?php } ?>
		</h4>

		<?php
			// if ( empty( $disable_text ) ) {
			// 	lsx_to_tagline( '<p class="lsx-to-widget-tagline text-center">', '</p>' );
			// }
		?>
		<div class="lsx-to-widget-meta-data">
			<?php
			$meta_class = 'lsx-to-meta-data lsx-to-meta-data-';

			lsx_to_price( '<span class="' . $meta_class . 'price"><span class="lsx-to-meta-data-key">' . esc_html__( 'From price', 'tour-operator' ) . ':</span> ', '</span>' );
			lsx_to_duration( '<span class="' . $meta_class . 'duration"><span class="lsx-to-meta-data-key">' . esc_html__( 'Duration', 'tour-operator' ) . ':</span> ', '</span>' );
			the_terms( get_the_ID(), 'travel-style', '<span class="' . $meta_class . 'style"><span class="lsx-to-meta-data-key">' . esc_html__( 'Travel Style', 'tour-operator' ) . ':</span> ', ', ', '</span>' );
			lsx_to_connected_countries( '<span class="' . $meta_class . 'destinations"><span class="lsx-to-meta-data-key">' . esc_html__( 'Destinations', 'tour-operator' ) . ':</span> ', '</span>' );

			if ( function_exists( 'lsx_to_connected_activities' ) ) {
				lsx_to_connected_activities( '<span class="' . $meta_class . 'activities"><span class="lsx-to-meta-data-key">' . esc_html__( 'Activities', 'tour-operator' ) . ':</span> ', '</span>' );
			}
			?>
		</div>

		<?php
		ob_start();
		lsx_to_widget_entry_content_top();
		the_excerpt();
		lsx_to_widget_entry_content_bottom();
		$excerpt = ob_get_clean();

		if ( empty( $disable_text ) && ! empty( $excerpt ) ) {
			echo wp_kses_post( $excerpt );
		} elseif ( $has_single && true !== $disable_view_more && '1' !== $disable_view_more ) {
			?>
			<p class="moretag-wrapper"><a href="<?php echo esc_url( $permalink ); ?>" class="moretag"><?php esc_html_e( 'View more', 'tour-operator' ); ?></a></p>
			<?php
		}
		?>

		<?php lsx_widget_entry_content_bottom(); ?>
	</div>

	<?php lsx_widget_entry_bottom(); ?>

</article>
<?php lsx_widget_entry_after(); ?>
