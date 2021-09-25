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

		<footer id="colophon" class="content-info" role="contentinfo">
			<div class="container">
				<div class="row">
					
						<?php lsx_footer_top(); ?>

						
						
						<?php if ( has_nav_menu( 'footer' ) ) : ?>
							<div id="footer-navigation" class="footer-navigation col-sm-12 col-lg-5">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'footer',
											'depth' => 1,
										)
									);
								?>
							</div><!-- .footer-navigation -->
							
							<div id="footer-contact-details" class="footer-contact-details col-sm-12 col-lg-5">
								<p>Coast Sri Lanka</p>
								<p>No, 000, Xxxx xxxxxx, Xxxxxxxxx xxxxxxxx, Sri Lanka</p>
								<p>Tel : 94 011 00000 | Fax : 94 001 00000</p>
								<p>Email : info@coastsrilanka.com</p>
							</div>
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<div id="social-navigation" class="social-navigation col-sm-12 col-lg-1">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'social',
											'depth' => 1,
										)
									);
								?>
							</div><!-- .social-navigation -->
						<?php endif; ?>
						
						<p class="credit col-sm-12 <?php if ( has_nav_menu( 'social' ) || has_nav_menu( 'footer' ) ) echo 'credit-float'; ?>">
							<?php
								printf(
									/* Translators: 1: current year, 2: blog name */
									esc_html__( '&#169; %1$s %2$s All Rights Reserved', 'lsx' ),
									esc_html( date_i18n( 'Y' ) ),
									esc_html( get_bloginfo( 'name' ) )
								);
								?>

							<?php if ( apply_filters( 'lsx_credit_link', true ) ) : ?>
								<?php
									printf(
										/* Translators: 1: theme name, 2: author name and link */
										esc_html__( ' | %1$s is a WordPress theme developed by %2$s.', 'lsx' ),
										'LSX',
										'<a href="https://www.lsdev.biz/" rel="nofollow noreferrer noopener" title="LightSpeed WordPress Development - Unlocking the full value of your business, online" rel="author nofollow noopener noreferrer" >LightSpeed</a>'
									);
								?>
							<?php endif; ?>
						</p>

						

						<?php lsx_footer_bottom(); ?>
					
				</div>
			</div>
		</footer>



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
		<?php lsx_body_bottom(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
