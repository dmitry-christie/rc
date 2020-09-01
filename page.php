<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rockcapital
 */

get_header();
?>

<style>


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

.home .hero {
	height: 80vh;
}

.home .stripes {
	height: 100%;
	width: 70%;
	background-size: 80%;
	background-repeat: no-repeat;
}



</style>


	<div class="hero" >
	<div class="stripes">
		

	</div>
			<?php if ( is_front_page())   {?>
				<div class="text">
				<?php the_field("home-text-header", 'options'); ?>
			</div>
				
			<?php } else {?>
				<div class="page-title">
					<?php single_post_title(); ?>
				</div>
				
			<?php }?>
			
			
			
		
</div>

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
get_sidebar();
get_footer();
