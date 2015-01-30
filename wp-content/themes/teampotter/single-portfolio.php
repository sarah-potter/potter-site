<?php
/* Portfolio item display for a single item. */

get_header(); ?>


	<div id="portfolio-primary-single" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<?php get_template_part( 'content', 'single' ); ?>
		
		
		<div id="portfolio-category"><?php echo get_the_term_list( $post->ID, 'portfolio_category', 'Categorized: ', ', ', '' ); ?></div>
			<?php teampotter_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
