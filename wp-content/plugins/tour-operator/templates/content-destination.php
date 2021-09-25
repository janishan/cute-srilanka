<?php
/**
 * Destination Content Part
 *
 * @package  tour-operator
 * @category destination
 */

global $lsx_to_archive, $post;

if ( 1 !== $lsx_to_archive ) {
	$lsx_to_archive = false;
}
?>

<?php lsx_entry_before(); ?>

<div class="sub-page-main-content-row destination-main-content-row destination-details destination-<?php echo esc_attr( $post->post_name ); ?>">
    <div class="sub-page-main-content-wrapper">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
		<div class="item-feature-image-wrapper">
			<div class="item-feature-image">
				<img src="<?php $postId = esc_attr( $post->post_name ); echo get_template_directory_uri() . '/assets/images/destinations/featured-'.$postId.'.jpg' ?>" alt="">
			</div>
			<div class="map-image">
				<img src="<?php $postId = esc_attr( $post->post_name ); echo get_template_directory_uri() . '/assets/images/destinations/map-'.$postId.'.png' ?>" alt="">
			</div>
		</div>
    </div>
</div>



<?php 
lsx_entry_after();
