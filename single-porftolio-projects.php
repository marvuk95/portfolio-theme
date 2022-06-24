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

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'portfolio-theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'portfolio-theme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>
			<!-- Project Image and Links -->
			<section class="project-intro"></section>

			<!-- Overview and tools -->
			<section class="project-overview"></section>

			<!-- Development and Features -->
			<section class="project-dev"></section>

			<!-- My other projects img and links -->
			<section class="other-projects">
				<?php 
				$args = array(
					'post_type'      => 'porftolio-projects',
					'posts_per_page' => -1
				);
				
				$query = new WP_Query( $args );
				
				if ( $query->have_posts() ){
					while ( $query->have_posts() ) {
						$query->the_post();
						// the_content();
						the_post_thumbnail();
					}
					wp_reset_postdata();
				}
				?>
			</section>

			<?php


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
