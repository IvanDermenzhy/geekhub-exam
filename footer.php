<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geekhub6-exam-ivan
 */

?>

	</div>

<section class="clients">
	<div class="container">
		<div class="owl-carousel owl-theme">
			<?php
			$args = array(
				'post_type'     => 'slide'
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :?>
				<?php while ( $the_query->have_posts() ) : ?>
						<?php $the_query->the_post(); ?>
						<div class="owl-item">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('post-thumbnail', ['class' => 'slide', 'title' => 'Feature image']);
							}
							?>
					</div>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata(); ?>
		</div>
	</div>
		</div>
</section>
<section class="contact-form ">
		<div class="container">
				<div class="col-6">
					<div class="contact-us">
						<div class="title">
							Contact us:
						</div>
						<div class="description">
							<p>
								It is a long established fact that a reader will be distracted by
								the readable content of a page when looking at its layout.
							</p>
						</div>
						<address>
							<a id="tel" href="tel:<?php echo get_theme_mod( 'address_phone' ) ?>"><?php echo get_theme_mod( 'address_phone' ) ?></a>
							<p id="address" class="destination">123 Office, Street No 2, Parkview.
								Sednney, Australia.</p>
						</address>
						<div class="map">
							<?php echo do_shortcode('[wpgmza id="1"]');	?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-6">
					<?php echo do_shortcode('[contact-form-7 id="98" title="Contact form 1"]');	?>
				</div>
		</div>
	</section>

		<div class="pre-footer bg-header p-4 text-center">
			<?php the_custom_logo(); ?>
		</div>
		<footer class="site-footer p-5 text-center bg-footer" role="contentinfo">
			<p> © <?php the_date('Y'); ?> All Rights Reserved.</p>
		</footer>
	</div>

<?php wp_footer(); ?>

</body>
</html>
