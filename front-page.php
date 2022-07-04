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
 * @package portfolio-theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			if ( function_exists ( 'get_field' ) ):
				?>
				<!-- // get_template_part( 'template-parts/content', 'page' ); -->
				<section class="home-about dark-blue">
					<!-- Home Title -->
					<h1><?php the_title() ?></h1>
					<?php 
					//Home description
					if ( get_field ( 'home_about_description' ) ):
						?>
						<p><?php the_field( 'home_about_description' ) ?></p>
						<?php
					endif;

					//Skills section
					if ( get_field ( 'skills_section' ) ):
						?>
						<p><?php the_field( 'skills_section' ) ?></p>
						<?php
					endif;
					?>

					<svg class="blob-motion" id="visual" viewBox="0 0 960 300" width="960" height="300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
						
					<g transform="translate(484.24657767864807 154.29508847143146)"><path id="blob1" d="M71.5 -67C94 -49 114.5 -24.5 116.9 2.4C119.2 29.2 103.5 58.5 81 75C58.5 91.5 29.2 95.2 5.8 89.5C-17.7 83.7 -35.4 68.4 -60.4 51.9C-85.4 35.4 -117.7 17.7 -124.3 -6.6C-130.9 -30.9 -111.8 -61.8 -86.8 -79.8C-61.8 -97.8 -30.9 -102.9 -3.2 -99.7C24.5 -96.5 49 -85 71.5 -67" fill="#3c31dd"></path></g>

					<g transform="translate(468.6849496823007 160.94096257490094)" style="visibility: hidden"><path id="blob2" d="M65.1 -59.2C90.1 -40.1 120 -20 118.9 -1.2C117.7 17.7 85.4 35.4 60.4 48.2C35.4 61 17.7 69 -3.5 72.5C-24.7 76.1 -49.5 75.2 -68 62.3C-86.5 49.5 -98.7 24.7 -95.9 2.8C-93.1 -19.1 -75.2 -38.2 -56.7 -57.4C-38.2 -76.5 -19.1 -95.8 0.5 -96.2C20 -96.7 40.1 -78.4 65.1 -59.2" fill="#3c31dd"></path></g>
				</svg>		
				</section>

				<div class="spacer layer1"></div>
				<section class="home-projects blue">
					<?php 
					// Projects Section Title
					if ( get_field ( 'project_subheading' ) ):
						?>
						<h2 id="projects-section"><?php the_field( 'project_subheading' ) ?></h2>
						<?php
					endif;
					
					// Project box
					?>
					
						<?php
						if (have_rows ( 'projects_section' ) ) :
							while( have_rows( 'projects_section' ) ): 
								the_row(); 
								?>
								<article class="front-page-projects">
									<div class="front-page-projects-container">
										<?php
										$link = get_sub_field( 'project_learn_more' );
				
										if( $link ) : 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											
											<!-- Project Title -->
											<h3><?php the_sub_field( 'project_title' ); ?></h3>

											<!-- Project Image -->
											<?php $image = get_sub_field( 'project_image' );
											$size = 'medium'; // (thumbnail, medium, large, full or custom size)
											if( $image ) :
												echo wp_get_attachment_image( $image, $size );					
											endif; ?>

											<!-- Project Description -->
												<p><?php the_sub_field( 'project_description' ) ?></p>

											<!-- Learn More Link -->
											<button><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></button>
												
											<?php  
										endif;	
								?>
									</div>
								</article>
								<?php					
								
							endwhile;
						endif;
						?>

				</section>
				<div class="spacer layer2"></div>

				
				<section class="home-contact">
					<?php 
					//Contact Title
					if ( get_field ( 'contact_subheading' ) ):
						?>
						<h2 id="contact-section"><?php the_field( 'contact_subheading' ) ?></h2>
						<?php
					endif;
					
					//Contact Description
					if ( get_field ( 'contact_description' ) ):
						?>
						<p><?php the_field( 'contact_description' ) ?></p>
						<?php
					endif;

					//Contact Link
					$link = get_field('contact_link');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<button><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></button>
					<?php endif
					?>
				</section>

				<?php
			endif;
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
