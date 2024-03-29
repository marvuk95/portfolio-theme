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

			if ( function_exists ( 'get_field' ) ):
				// Projects Section Title
				if ( get_field ( 'project_title' ) ):
					?>
					<h1><?php the_field( 'project_title' ) ?></h1>
					<?php
				endif;
				?>
				<!-- Project Image and Links -->
				<section class="project-intro">
						<?php
						
						//Project Banner
						$image = get_field( 'project_banner' );
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) :
							echo wp_get_attachment_image( $image, $size );					
						endif;

						//Live Site Link
						?>
						<div class="live-website-github">
						<?php
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
						</div>
				</section>

				<!-- Overview and tools -->
				<section class="project-overview">
					<?php
					// Overview Subheading
					if ( get_field ( 'overview_subheading' ) ):
						?>
						<h2><?php the_field( 'overview_subheading' ) ?></h2>
						<?php

					// Project Description
						?>
						<p><?php the_field( 'project_description' ) ?></p>
						<?php
						// echo get_template_part( 'icons/html5' );
					endif;

					if (have_rows ( 'technologies_used' ) ) :
						?>
						<article class="technologies-used">
						<?php
						while( have_rows( 'technologies_used' ) ): 
							the_row();
							?>
								<p><?php the_sub_field( 'icon' ) ?></p>
							<?php
						endwhile;
						?>
						</article>
						<?php
					endif;
					?>
				</section>


				<svg id="visual" viewBox="0 0 1920 200" width="1920" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1920" height="200" fill="#001220"></rect>
					<path id="yt1" d="M0 110L29.2 111.7C58.3 113.3 116.7 116.7 174.8 114.2C233 111.7 291 103.3 349.2 96.7C407.3 90 465.7 85 523.8 85.8C582 86.7 640 93.3 698.2 93.5C756.3 93.7 814.7 87.3 872.8 89.2C931 91 989 101 1047.2 105.8C1105.3 110.7 1163.7 110.3 1221.8 116C1280 121.7 1338 133.3 1396.2 128.8C1454.3 124.3 1512.7 103.7 1570.8 101.7C1629 99.7 1687 116.3 1745.2 120.3C1803.3 124.3 1861.7 115.7 1890.8 111.3L1920 107L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#fcb514"></path>
					<path id="yt2" d="M0 165L29.2 158C58.3 151 116.7 137 174.8 135.5C233 134 291 145 349.2 151.8C407.3 158.7 465.7 161.3 523.8 156.5C582 151.7 640 139.3 698.2 133C756.3 126.7 814.7 126.3 872.8 130.2C931 134 989 142 1047.2 142.5C1105.3 143 1163.7 136 1221.8 130.5C1280 125 1338 121 1396.2 123.5C1454.3 126 1512.7 135 1570.8 136.5C1629 138 1687 132 1745.2 133.7C1803.3 135.3 1861.7 144.7 1890.8 149.3L1920 154L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#001220"></path>
					<path id="yt3" d="M0 144L29.2 146.3C58.3 148.7 116.7 153.3 174.8 159.3C233 165.3 291 172.7 349.2 172.7C407.3 172.7 465.7 165.3 523.8 162C582 158.7 640 159.3 698.2 164C756.3 168.7 814.7 177.3 872.8 174.2C931 171 989 156 1047.2 155.3C1105.3 154.7 1163.7 168.3 1221.8 172.7C1280 177 1338 172 1396.2 165.3C1454.3 158.7 1512.7 150.3 1570.8 152.8C1629 155.3 1687 168.7 1745.2 168.7C1803.3 168.7 1861.7 155.3 1890.8 148.7L1920 142L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#fcb514"></path>
				
					<path style="visibility: hidden" id="yt4" d="M0 109L29.2 111.3C58.3 113.7 116.7 118.3 174.8 120.7C233 123 291 123 349.2 117C407.3 111 465.7 99 523.8 97C582 95 640 103 698.2 101.3C756.3 99.7 814.7 88.3 872.8 94.5C931 100.7 989 124.3 1047.2 127.5C1105.3 130.7 1163.7 113.3 1221.8 106.7C1280 100 1338 104 1396.2 100.8C1454.3 97.7 1512.7 87.3 1570.8 89.5C1629 91.7 1687 106.3 1745.2 113C1803.3 119.7 1861.7 118.3 1890.8 117.7L1920 117L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#fcb514"></path>
					<path style="visibility: hidden" id="yt5" d="M0 131L29.2 131.7C58.3 132.3 116.7 133.7 174.8 136.7C233 139.7 291 144.3 349.2 148.2C407.3 152 465.7 155 523.8 158C582 161 640 164 698.2 163C756.3 162 814.7 157 872.8 149.2C931 141.3 989 130.7 1047.2 132C1105.3 133.3 1163.7 146.7 1221.8 152C1280 157.3 1338 154.7 1396.2 147.8C1454.3 141 1512.7 130 1570.8 125.2C1629 120.3 1687 121.7 1745.2 129.5C1803.3 137.3 1861.7 151.7 1890.8 158.8L1920 166L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#001220"></path>
					<path style="visibility: hidden" id="yt6" d="M0 185L29.2 178C58.3 171 116.7 157 174.8 157.5C233 158 291 173 349.2 177.8C407.3 182.7 465.7 177.3 523.8 171.7C582 166 640 160 698.2 159C756.3 158 814.7 162 872.8 165.7C931 169.3 989 172.7 1047.2 173.5C1105.3 174.3 1163.7 172.7 1221.8 174.3C1280 176 1338 181 1396.2 181C1454.3 181 1512.7 176 1570.8 172.7C1629 169.3 1687 167.7 1745.2 164.3C1803.3 161 1861.7 156 1890.8 153.5L1920 151L1920 201L1890.8 201C1861.7 201 1803.3 201 1745.2 201C1687 201 1629 201 1570.8 201C1512.7 201 1454.3 201 1396.2 201C1338 201 1280 201 1221.8 201C1163.7 201 1105.3 201 1047.2 201C989 201 931 201 872.8 201C814.7 201 756.3 201 698.2 201C640 201 582 201 523.8 201C465.7 201 407.3 201 349.2 201C291 201 233 201 174.8 201C116.7 201 58.3 201 29.2 201L0 201Z" fill="#fcb514"></path>
				</svg>
				
				<svg id="visual" viewBox="0 0 1920 200" width="1920" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1920" height="200" fill="#001220"></rect>
					<path id="yt7" d="M0 90L29.2 86.2C58.3 82.3 116.7 74.7 174.8 69.8C233 65 291 63 349.2 60.2C407.3 57.3 465.7 53.7 523.8 54.3C582 55 640 60 698.2 64.2C756.3 68.3 814.7 71.7 872.8 79.3C931 87 989 99 1047.2 106.8C1105.3 114.7 1163.7 118.3 1221.8 113.8C1280 109.3 1338 96.7 1396.2 85C1454.3 73.3 1512.7 62.7 1570.8 58.2C1629 53.7 1687 55.3 1745.2 55.7C1803.3 56 1861.7 55 1890.8 54.5L1920 54L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#fcb514"></path>
					<path id="yt8" d="M0 41L29.2 48C58.3 55 116.7 69 174.8 69.8C233 70.7 291 58.3 349.2 55.8C407.3 53.3 465.7 60.7 523.8 65.8C582 71 640 74 698.2 75.2C756.3 76.3 814.7 75.7 872.8 70C931 64.3 989 53.7 1047.2 49.3C1105.3 45 1163.7 47 1221.8 54.8C1280 62.7 1338 76.3 1396.2 80.2C1454.3 84 1512.7 78 1570.8 72.8C1629 67.7 1687 63.3 1745.2 59.8C1803.3 56.3 1861.7 53.7 1890.8 52.3L1920 51L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#001220"></path>
					<path id="yt9" d="M0 19L29.2 21C58.3 23 116.7 27 174.8 32.5C233 38 291 45 349.2 48.8C407.3 52.7 465.7 53.3 523.8 48.2C582 43 640 32 698.2 28.3C756.3 24.7 814.7 28.3 872.8 32C931 35.7 989 39.3 1047.2 36.7C1105.3 34 1163.7 25 1221.8 25.3C1280 25.7 1338 35.3 1396.2 37.8C1454.3 40.3 1512.7 35.7 1570.8 37C1629 38.3 1687 45.7 1745.2 42.8C1803.3 40 1861.7 27 1890.8 20.5L1920 14L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#fcb514"></path>

					<path style="visibility: hidden" id="yt10" d="M0 99L29.2 95.8C58.3 92.7 116.7 86.3 174.8 86.7C233 87 291 94 349.2 100.8C407.3 107.7 465.7 114.3 523.8 117.8C582 121.3 640 121.7 698.2 116.7C756.3 111.7 814.7 101.3 872.8 94C931 86.7 989 82.3 1047.2 85.5C1105.3 88.7 1163.7 99.3 1221.8 99.7C1280 100 1338 90 1396.2 91.7C1454.3 93.3 1512.7 106.7 1570.8 110.2C1629 113.7 1687 107.3 1745.2 102.8C1803.3 98.3 1861.7 95.7 1890.8 94.3L1920 93L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#fcb514"></path>
					<path style="visibility: hidden" id="yt11" d="M0 66L29.2 66.8C58.3 67.7 116.7 69.3 174.8 72.5C233 75.7 291 80.3 349.2 73.5C407.3 66.7 465.7 48.3 523.8 40.5C582 32.7 640 35.3 698.2 41.8C756.3 48.3 814.7 58.7 872.8 59C931 59.3 989 49.7 1047.2 50C1105.3 50.3 1163.7 60.7 1221.8 66.8C1280 73 1338 75 1396.2 76.8C1454.3 78.7 1512.7 80.3 1570.8 73.2C1629 66 1687 50 1745.2 45.5C1803.3 41 1861.7 48 1890.8 51.5L1920 55L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#001220"></path>
					<path style="visibility: hidden" id="yt12" d="M0 54L29.2 49.5C58.3 45 116.7 36 174.8 34.7C233 33.3 291 39.7 349.2 39.5C407.3 39.3 465.7 32.7 523.8 27.8C582 23 640 20 698.2 20.7C756.3 21.3 814.7 25.7 872.8 28C931 30.3 989 30.7 1047.2 30.8C1105.3 31 1163.7 31 1221.8 29.5C1280 28 1338 25 1396.2 24.3C1454.3 23.7 1512.7 25.3 1570.8 26.5C1629 27.7 1687 28.3 1745.2 29.3C1803.3 30.3 1861.7 31.7 1890.8 32.3L1920 33L1920 0L1890.8 0C1861.7 0 1803.3 0 1745.2 0C1687 0 1629 0 1570.8 0C1512.7 0 1454.3 0 1396.2 0C1338 0 1280 0 1221.8 0C1163.7 0 1105.3 0 1047.2 0C989 0 931 0 872.8 0C814.7 0 756.3 0 698.2 0C640 0 582 0 523.8 0C465.7 0 407.3 0 349.2 0C291 0 233 0 174.8 0C116.7 0 58.3 0 29.2 0L0 0Z" fill="#fcb514"></path>
				</svg>
				

				<!-- Project Features -->
				<section class="project-dev">
					<?php
					if ( get_field ( 'features_subheading' ) ):
						?>
						<h2><?php the_field( 'features_subheading' ) ?></h2>
						<?php
					endif;
					if (have_rows ( 'project_features' ) ) :
						?>
						<div class="feature-container">
						<?php
						while( have_rows( 'project_features' ) ): 
							the_row();
							?>
							<article>
								<h3><?php the_sub_field( 'feature_title' ); ?></h3>
								<?php $image = get_sub_field( 'feature_media' );
								$size = 'large'; // (thumbnail, medium, large, full or custom size)
								if( $image ) :
									echo wp_get_attachment_image( $image, $size );					
								endif; ?>
								<p><?php the_sub_field( 'feature_description' ) ?></p>
							</article>
							<?php
						endwhile;
						?>
						</div>
						<?php
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
					//Other Projects Subheading 
					if ( get_field ( 'other_projects_subheading' ) ):
						?>
						<h2><?php the_field( 'other_projects_subheading' ) ?></h2>
						<?php
					endif;
			
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
