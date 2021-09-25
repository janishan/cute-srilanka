<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lsx
 */

?>

			</div><!-- .content -->
		</div><!-- .wrap -->

		<?php // lsx_footer_before(); ?>
		<footer>
			<div class="footer-wrapper">
				<div class="footer-top">
					<div class="footer-description">
						<div class="footer-logo">
							<a href="/"></a>
						</div>
						<p class="footer-intro">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada aliquet sapien quis porta.
						</p>
						<a href="" class="bttn primary-btn">Learn More</a>
					</div>
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
						<div class="footer-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer',
										'depth' => 1,
									)
								);
							?>
						</div>
					<?php endif; ?>
					<div class="footer-contacts">
						<p class="footer-contact-block footer-address">
							No. 221, High Level Road, Maharagama,<br/>Sri Lanka.
						</p>
						<p class="footer-contact-block footer-tel">
							<a href="tel:0719855654">0719855654</a>
						</p>
						<p class="footer-contact-block footer-email">
							<a href="mailto:cutesrilanka@gmail.com">cutesrilanka@gmail.com</a>
						</p>
					</div>
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<div class="footer-social-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social',
										'depth' => 1,
									)
								);
							?>
						</div>
					<?php endif; ?>
				</div>
				<div class="footer-bottom">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<div class="footer-bottom-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'top-menu-left',
										'depth' => 1,
									)
								);
							?>
						</div>
					<?php endif; ?>
					<div class="footer-copyright">
						<?php
							printf(
								/* Translators: 1: current year, 2: blog name */
								esc_html__( '&#169; %1$s %2$s All Rights Reserved', 'lsx' ),
								esc_html( date_i18n( 'Y' ) ),
								esc_html( get_bloginfo( 'name' ) )
							);
						?>
					</div>
				</div>
			</div>
		</footer>

		<?php lsx_footer_after(); ?>
		<?php //lsx_body_bottom(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
