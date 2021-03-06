<?php
/**
 * Sitemap Template.
 *
 * Template Name: Sitemap
 *
 * @package    lsx
 * @subpackage template
 */

get_header(); ?>

<?php lsx_content_wrap_before(); ?>

<div id="primary">

	<?php lsx_content_before(); ?>

	<main id="main" class="site-main" role="main">

		<?php lsx_content_top(); ?>

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php lsx_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php lsx_entry_top(); ?>

					<div class="entry-content">
						<?php lsx_sitemap_loops(); ?>
					</div><!-- .entry-content -->

					<?php lsx_entry_bottom(); ?>

				</article><!-- #post-## -->

				<?php lsx_entry_after(); ?>

			<?php endwhile; ?>

		<?php endif; ?>

		<?php lsx_content_bottom(); ?>

	</main><!-- #main -->

	<?php lsx_content_after(); ?>

</div><!-- #primary -->

<?php lsx_content_wrap_after(); ?>

<?php get_sidebar( 'sitemap' ); ?>

<?php
get_footer();
