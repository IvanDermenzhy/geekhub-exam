<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Geekhub6-exam-ivan
 */

get_header();
?>
<div class="title-page d-flex align-items-center">
		<h2>Best Phons Of all Time in the World</h2>
	</div>
<aside>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;

						previous_post_link('%link', 'previous', true);
						next_post_link('%link', 'next', true);

				?>
			</div>
			<div class="col-md-4">
				<?php
					get_sidebar();
				?>
			</div>
		</div>
	</div>
</aside>
<?php
get_footer();
