<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rockcapital
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();


			// If comments are open or we have at least one comment, load up the comment template.
			$stylesheet_root = get_stylesheet_directory();
			include( $stylesheet_root . '/inc/flexible-content.php' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
