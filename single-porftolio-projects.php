<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio-theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio-theme' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio-theme' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );
			if ( function_exists ( 'get_field' ) ):
				?>
				<!-- Project Image and Links -->
				<section class="project-intro">
						<?php
						// Projects Section Title
						if ( get_field ( 'project_title' ) ):
							?>
							<h1><?php the_field( 'project_title' ) ?></h1>
							<?php
						endif;
						
						//Project Banner
						$image = get_field( 'project_banner' );
						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						if( $image ) :
							echo wp_get_attachment_image( $image, $size );					
						endif;

						//Live Site Link
						$link = get_field( 'live_website_link' );
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<button><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></button>
						<?php endif;

						//GitHub Link
						$link = get_field( 'github_link' );
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<button><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></button>
						<?php endif
						?>
				</section>

				<!-- Overview and tools -->
				<section class="project-overview">
					<?php
					// Overview Subheading
					if ( get_field ( 'overview_subheading' ) ):
						?>
						<h2><?php the_field( 'overview_subheading' ) ?></h2>
						<?php
					endif; 

					// Project Description
					if ( get_field ( 'overview_subheading' ) ):
						?>
						<p><?php the_field( 'project_description' ) ?></p>
						<?php
					endif; 
					?>
				</section>

				<!-- Accordion -->
				<section class="project-dev">
					<?php
					if (have_rows ( 'project_features' ) ) :
						while( have_rows( 'project_features' ) ): 
							the_row();
							?>
							<article>
								<?php $image = get_sub_field( 'feature_media' );
								$size = 'medium'; // (thumbnail, medium, large, full or custom size)
								if( $image ) :
									echo wp_get_attachment_image( $image, $size );					
								endif; ?>
								<p><?php the_sub_field( 'feature_description' ) ?></p>
							</article>
							<?php
						endwhile;
					endif;
					?> 
				</section>

				<!-- My other projects img and links -->
				<section class="other-projects">
					<?php 
					$args = array(
						'post_type'      => 'porftolio-projects',
						'posts_per_page' => -1,
						'post__not_in' => array( get_the_id() )
					);
					
					$query = new WP_Query( $args );
					
					if ( $query->have_posts() ):
						?>
						<div class="swiper">
							<div class="swiper-wrapper">
								<?php
								while ( $query->have_posts() ) :
									$query->the_post();
									// the_content();
									?>
									<div class="swiper-slide">
										<h3><?php the_title() ?></h3>
										<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium'); ?></a>
									</div>
									
									<?php
								endwhile;
								wp_reset_postdata();
								?>
							</div>
							<nav class="swiper-pagination"></nav>
							<button class="swiper-button-prev"></button>
							<button class="swiper-button-next"></button>
						</div>		
					<?php
					endif;
					?>
				</section>

				<?php
			endif;


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
