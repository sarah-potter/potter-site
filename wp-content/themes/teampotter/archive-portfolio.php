<?php

/*  * The template for displaying the Portfolio archive pages. */


get_header(); ?>

	<div id="portfolio-primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

		
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<div id="portfolio-item">
			<?php the_post_thumbnail(); ?>
			<?php echo get_the_term_list( $post->ID, 'portfolio_category', ' ', '' ); ?>
			<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
		</div>

			<?php endwhile; ?>

			<?php teampotter_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
