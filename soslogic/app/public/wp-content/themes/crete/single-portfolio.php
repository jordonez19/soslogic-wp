<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Crete
 */

get_header();
?>

<div class="crete-single-post">


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single-portfolio' );
            

		endwhile; // End of the loop.
		?>
	

</div>

		

	

<?php
get_footer();
