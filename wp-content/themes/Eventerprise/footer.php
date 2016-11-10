<?php if( vce_is_woocommerce_active() && (is_singular('product') || is_tax('product_cat') || is_post_type_archive('product') ) ): ?>
	</div>
<?php endif; ?>

<?php get_template_part('sections/ads/above-footer'); ?>

<footer id="footer" class="site-footer">

	<?php if ( !vce_get_option( 'footer_display' ) ) : ?>
		<div class="container">
			<div class="container-fix">
				<?php $footer_layout = explode( "_", vce_get_option( 'footer_layout' ) ); ?>
				<?php for ( $i = 0; $i < count( $footer_layout ); $i++ ) : ?>
					<div class="bit-<?php echo $footer_layout[$i]; ?>">
						<?php dynamic_sidebar( 'vce_footer_sidebar_'.($i+1) ); ?>
					</div>
				<?php endfor;?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( vce_get_option( 'enable_copyright' ) ) : ?>
		<div class="container-full site-links">
			<div class="container">
				<div class="footer-menu">
					<div class="col-4">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<?php
								$logo_url = vce_get_option('logo_custom_url') ? esc_url(vce_get_option('logo_custom_url')) : home_url( '/' );
								$logo = vce_get_option('logo')
								?>

								<?php
								$title_tag = 'span';
								$class = !empty($logo['url']) ? 'class="has-logo"' : '';
								?>

								<<?php echo $title_tag;?> class="site-title">
									<a href="<?php echo esc_url( $logo_url ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" <?php echo $class; ?>><?php if(!empty($logo['url'])) : ?><img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" /><?php else: ?><?php bloginfo( 'name' ); ?><?php endif; ?></a>
								</<?php echo $title_tag;?>>

							</a>
						</div>
						<ul>
							<li><a href="https://www.eventerprise.com/about">About</a></li>
							<li><a href="https://www.eventerprise.com/international">Global footprint</a></li>
							<li><a href="<?php home_url(); ?>">Blog</a></li>
							<li><a href="https://www.eventerprise.com/press">Press</a></li>
							<li><a href="https://www.eventerprise.com/contact">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-4">
						<h6>Information</h6>
						<ul>
							<li><a href="https://www.eventerprise.com/pricing">Pricing</a></li>
							<li><a href="https://www.eventerprise.com/careers">Careers</a></li>
							<li><a href="https://www.eventerprise.com/internships">Internships</a></li>
							<li><a href="https://www.eventerprise.com/devchangelog">DevChangeLog</a></li>
							<li><a href="https://www.eventerprise.com/faqs">FAQs</a></li>
						</ul>
					</div>
					<div class="col-4">
						<h6>Links</h6>
						<ul>
<!--							<li><a href="">Register</a></li>-->
<!--							<li><a href="">Login</a></li>-->
							<li><a href="https://www.eventerprise.com/capetown-westerncape/search">Search</a></li>
							<li><a href="https://www.eventerprise.com/privacy-policy">Privacy Policy</a></li>
							<li><a href="https://www.eventerprise.com/terms-of-service">Terms and Conditions</a></li>
						</ul>
					</div>
					<div class="col-4">
						<a href="https://www.eventerprise.com/pricing" class="btn btn-secondary btn-trial">Are you an event Supplier? <br/> Start your free trial</a>
					</div>
				</div>
				<div class="social-section">
					<div>
						<h4>Join us on</h4>
						<ul>
							<?php if(get_theme_mod('facebook')) : ?>
							<li>
								<a href="<?php echo get_theme_mod('facebook') ?>" class="social-icon"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<?php if(get_theme_mod('gplus')) : ?>
							<li>
								<a href="<?php echo get_theme_mod('gplus') ?>"  class="social-icon"  target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<?php if(get_theme_mod('twitter')) : ?>
							<li>
								<a  href="<?php echo get_theme_mod('twitter') ?>"  class="social-icon"  target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<?php if(get_theme_mod('linkedin')) : ?>
							<li>
								<a  href="<?php echo get_theme_mod('linkedin') ?>"  class="social-icon"  target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<?php if(get_theme_mod('instagram')) : ?>
							<li>
								<a href="<?php echo get_theme_mod('instagram') ?>"  class="social-icon"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<?php if(get_theme_mod('video')) : ?>
							<li>
								<a href="<?php echo get_theme_mod('video') ?>"  class="social-icon"  target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</li>
							<?php endif; ?>
							<li>
								<a href="<?php home_url(); ?>"  class="social-icon"  target="_blank">blog</a>
							</li>
						</ul>
						<?php if(get_theme_mod('copyright')) : ?>
						<p class="copy-right">&copy; <?php echo get_theme_mod('copyright') ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>


</footer>


</div>
</div>

<?php if(vce_get_option('scroll_to_top')): ?>
	<a href="javascript:void(0)" id="back-top"><i class="fa fa-angle-up"></i></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>