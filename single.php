<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package for_test
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			if( have_rows('flexible_content') ):
				while ( have_rows('flexible_content') ) : the_row();
					get_template_part("template-parts/flexible/content", get_row_layout());
				endwhile;
			endif;
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
