<?php
/**
 * The template for displaying archive pages
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



</style>


	<div class="hero" >
	<div class="stripes">
		

	</div>
			
				<div class="page-title">
					<?php single_term_title(); ?>
				</div>
				
			
			
			
		
</div>

	<main id="primary" class="site-main container archive-container">

		<?php if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="flex post-item">
		<?php the_post_thumbnail( 'medium'); ?>

	<div class="entry-content">
		<?php
		the_excerpt();
		?>
		<div class="entry-meta">
				<?php
				rockcapital_posted_on();
				?>
			</div><!-- .entry-meta -->
	</div><!-- .entry-content -->
	</a>
	</div>




</article><!-- #post-<?php the_ID(); ?> -->

<?php
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
