<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rockcapital
 */

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
					<?php single_post_title(); ?>
				</div>
				
			
			
			
		
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header container">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				rockcapital_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'rockcapital' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rockcapital' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->


<?php 

/* $stylesheet_root = get_stylesheet_directory();
include( $stylesheet_root . '/inc/flexible-content.php' ); */

?>
