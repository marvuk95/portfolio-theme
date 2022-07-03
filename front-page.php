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
				<section class="home-about">
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


				</section>

				<section class="home-projects">
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
								<?php
								$link = get_sub_field( 'project_learn_more' );
		
								if( $link ) : 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									
									<!-- Project Title -->
									<h2><?php the_sub_field( 'project_title' ); ?></h2>

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
								</article>
								<?php					
								
							endwhile;
						endif;
						?>

				</section>
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
