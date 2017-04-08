<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Geekhub6-exam-ivan
 */

get_header(); ?>
	<div class="title-page d-flex justify-content-center align-items-center">
		<h2><?php echo the_title();?></h2>
	</div>
	<main class="container">
		<div class="row">
			<div class="col-md-8">
			<?php
			if ( have_posts() ) :
				?>
				<div class="row">
					<?php
				while ( have_posts() ) : the_post();?>
					<div class="col-md-6">
						<figure class="wrapper-post-blog d-flex flex-column align-items-center">

							<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('large');
						}
							else?>
							<figcaption class="title-figcaption-search">
								<div class="info">
									<a class="permalink" href="<?php echo get_permalink(); ?>"></a>
									<h2><?php echo get_the_title();?></h2>
									<?php

									the_excerpt();

									?>
								</div>
								<?php the_date( 'd,m,Y', '<p class="info-date text-center">', '</p>'); ?>
							</figcaption>
						</figure>
					</div>
<?php
				endwhile;?>
				</div>
				<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
				<?php the_posts_pagination( array(
					'screen_reader_text' => ' ',
					'prev_text'          => '',
					'next_text'          => '',
				) ); ?>
				</div>
			<aside class="col-md-4">
				<?php
				get_sidebar();
				?>
			</aside>
		</div>
	</main>

<?php

get_footer();
