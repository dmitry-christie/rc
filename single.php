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

<!--<style>


.stripes {

	background-image: url('<?php echo get_template_directory_uri(); ?>/img/theme/LINES_ROCK.png');
	height: 100%;
	width: 50%;
	background-size: 100%;
	background-repeat: no-repeat;
}

.hero {
	background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
	height: 60vh;
	width: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	display: flex;
}



</style> 


	<div class="hero" >
	<div class="stripes">
		

	</div>
			
				<div class="page-title">
					<?php single_post_title(); ?>
				</div>
				
			
			
			
		
</div>-->

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


			if ( is_singular( 'project' ) ) {
				$stylesheet_root = get_stylesheet_directory();
				include( $stylesheet_root . '/inc/flexible-content.php' );
			} else {
				get_template_part( 'template-parts/content', get_post_type() );

			}

		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
