<?php
/* Homepage Template */


get_header(); ?>
		
		
	
		<main class="home-page">

		<div id="full-width-slider" class="royalSlider"><?php echo get_new_royalslider(1);?></div>

			<section id="portfolio-showcase" class="content-area">
				<div id="showcase">
				<h3 class="homepage-h3">Recent Works</h3><hr />
					<ul id="recent-showcase-items">	
						<?php 	
							$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 6 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();?>
							
							<li class="showcase-item">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('large');?>
								<!-- <h4 class="img-info"><?php the_title(); ?></h4> -->
								</a>
							</li>
		    
						<?php endwhile ?>
					</ul>
				<a class="portfolio-link" href="/portfolio">view all<span>>></span></a>
				</div>
			</section>
				
				<section id="services">
					<h3>What We do</h3>
						<ul>
							<li class="service">
								<lh>Branding + Design</lh>
								<p>We're the complete package! We can help you create an engaging and memorable brand identity that's built to last.</p>
							</li>
							
							<li class="service">
								<lh>Web Design + Development</lh>
								<p>We've worked on websites that scale from enterprise level to the backyard hobbyist. Design and code standards are of critical importance when creating.  Content is king so We create with the best and most widely supported Content Management Systems available.</p>
							</li>
							
								
							<li class="service">
							<lh>Mobile</lh>
							<p>Because your customers attention is there so is ours. We tailor all of our projects to have a level of scalability. All of our websites are responsive, but we also have expertise in UX and iOS development.</p>
							</li>
							
							<li class="service">
								<lh>Analytics + Web Services</lh>
								<p>It takes a village! There's tons of supplemental services that promise to make your web site better, faster + more optimized.  We can help you find and set up just which services really can make your business go the extra mile</p>				 
							</li>
							
							<li class="service">
								<lh>Lcoation</lh>
								<p>The beauty of the internet is that we can work from anywhere.  Though we're usally working from California... though sometimes it's Seattle, Washington too.</p>
							
						</ul>
						
						<p>Peaked your interest? Click through to see more details on working with us!</p>
						
							
				</section>
				
				<section id="about-us">
					<h2>About Us</h2>
				</section>	
				
				<div id="homepage-blog-section">
				<h3 class="homepage-h3">Blog</h3><hr />
				<div id="latest-post-block">
				<?php /* Start the Loop */ ?>
				<ul>
					<?php query_posts('showposts=4'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<li> <div class="lp-featured-img"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
					<div id="grid-single">
					 <h2 class="latest-post"><a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?></a></h2>
					 <div class="post-date"><?php the_date(); ?></div>
					 <p><?php the_excerpt(); ?> </p></div>
					 <a class="continue" href="<?php echo get_permalink(); ?>">continue <span> >> </span> </a>
					</li>
				<?php endwhile; ?>
				</ul>
				<div id="more-blog"><a href="/blog">MORE BLOG</a></div>
				</div>
				
			</div>
				
			<div id="about-section">
			
				<div id="about-taylor"></div>
				
				<div id-="about-sarah"></div>
		
			</div>
				
				
				
	</main>
	
	
	
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
