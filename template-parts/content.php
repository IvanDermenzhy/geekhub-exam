<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Geekhub6-exam-ivan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<?php if ( has_post_thumbnail() ) {
       			 the_post_thumbnail('post-thumbnail', ['class' => 'img-single-post', 'title' => 'Feature image']);
			}

			if ( is_single() ) :
				the_title( '<h1 class="post-title color-secondary">', '</h1>' );
			else :
				the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
				</div>
				<div class="post-content">
		</div>
</article>