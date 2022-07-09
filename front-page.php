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
				<section class="home-about dark-blue">
					<!-- Home Title -->
					<h1 id="front-page-heading" class="animate__animated animate__fadeInLeft"><?php the_title() ?></h1>
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
				
				
				<svg aria-label="Wave background" aria-hidden="true" class="blob-motion" id="visual" viewBox="0 0 300 300" width="150" height="150" xmlns="http://www.w3.org/2000/svg" 		xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="300" height="300" fill="#001220"></rect>
				
					<g transform="translate(142.43801725067536 146.5320701909335)"><path id="blob1" d="M57.2 -58.9C73.3 -54.7 84.9 -35.9 90.2 -14.6C95.5 6.7 94.5 30.3 80.9 39.9C67.3 49.5 41 44.9 20.8 48.5C0.7 52 -13.3 63.6 -32 66.2C-50.7 68.9 -74.1 62.6 -77.6 48.6C-81 34.7 -64.6 13.1 -55.7 -5C-46.7 -23 -45.2 -37.6 -37.2 -43.2C-29.1 -48.8 -14.6 -45.5 3 -49.1C20.6 -52.6 41.1 -63.1 57.2 -58.9" fill="#3c31dd"></path></g>
				
					<g style="visibility: hidden" transform="translate(147.2923603462555 162.1656196901231)"><path id="blob2" d="M33.5 -43C48.9 -27 70.8 -21.7 78.8 -9C86.8 3.6 81.1 23.6 68.9 35.2C56.7 46.9 38.1 50.2 20.4 57.1C2.7 63.9 -14 74.2 -31.6 73.6C-49.1 72.9 -67.4 61.2 -73.9 45C-80.5 28.9 -75.2 8.3 -72.8 -14.1C-70.4 -36.6 -70.9 -60.8 -59.2 -77.5C-47.6 -94.2 -23.8 -103.3 -7.4 -94.6C9 -85.8 18.1 -59.1 33.5 -43" fill="#3c31dd"></path></g>
					</svg>
				</section>

				<svg aria-label="Wave background" aria-hidden="true" id="visual" viewBox="0 0 1920 300" width="1920" height="300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="1920" height="300" fill="#001220"></rect>
					<path id="water1" d="M0 24L35.5 46.3C71 68.7 142 113.3 213.2 112C284.3 110.7 355.7 63.3 426.8 41.3C498 19.3 569 22.7 640 38.3C711 54 782 82 853.2 106.8C924.3 131.7 995.7 153.3 1066.8 137C1138 120.7 1209 66.3 1280 63C1351 59.7 1422 107.3 1493.2 122.7C1564.3 138 1635.7 121 1706.8 107C1778 93 1849 82 1884.5 76.5L1920 71L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#002233"></path>
					<path id="water3" d="M0 209L35.5 203.2C71 197.3 142 185.7 213.2 174.5C284.3 163.3 355.7 152.7 426.8 158C498 163.3 569 184.7 640 195.3C711 206 782 206 853.2 193.2C924.3 180.3 995.7 154.7 1066.8 135.7C1138 116.7 1209 104.3 1280 116.5C1351 128.7 1422 165.3 1493.2 164.5C1564.3 163.7 1635.7 125.3 1706.8 109.8C1778 94.3 1849 101.7 1884.5 105.3L1920 109L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#003673"></path>
					<path id="water5" d="M0 165L35.5 178.2C71 191.3 142 217.7 213.2 232.7C284.3 247.7 355.7 251.3 426.8 236.2C498 221 569 187 640 166.7C711 146.3 782 139.7 853.2 136.5C924.3 133.3 995.7 133.7 1066.8 152C1138 170.3 1209 206.7 1280 225C1351 243.3 1422 243.7 1493.2 229.8C1564.3 216 1635.7 188 1706.8 186.3C1778 184.7 1849 209.3 1884.5 221.7L1920 234L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#003bab"></path>
					<path id="water7" d="M0 259L35.5 261.3C71 263.7 142 268.3 213.2 271C284.3 273.7 355.7 274.3 426.8 270C498 265.7 569 256.3 640 252.7C711 249 782 251 853.2 247C924.3 243 995.7 233 1066.8 231C1138 229 1209 235 1280 238C1351 241 1422 241 1493.2 239.5C1564.3 238 1635.7 235 1706.8 226.3C1778 217.7 1849 203.3 1884.5 196.2L1920 189L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#3c31dd"></path>

					<path style="visibility: hidden" id="water2" d="M0 134L35.5 118.5C71 103 142 72 213.2 79.3C284.3 86.7 355.7 132.3 426.8 141.2C498 150 569 122 640 100.2C711 78.3 782 62.7 853.2 72.7C924.3 82.7 995.7 118.3 1066.8 114.2C1138 110 1209 66 1280 63.8C1351 61.7 1422 101.3 1493.2 122.2C1564.3 143 1635.7 145 1706.8 132.2C1778 119.3 1849 91.7 1884.5 77.8L1920 64L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#002233"></path>
					<path style="visibility: hidden" id="water4" d="M0 133L35.5 132.3C71 131.7 142 130.3 213.2 141.5C284.3 152.7 355.7 176.3 426.8 176.7C498 177 569 154 640 147.5C711 141 782 151 853.2 156.5C924.3 162 995.7 163 1066.8 160.8C1138 158.7 1209 153.3 1280 143.8C1351 134.3 1422 120.7 1493.2 123.5C1564.3 126.3 1635.7 145.7 1706.8 157.3C1778 169 1849 173 1884.5 175L1920 177L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#003673"></path>
					<path style="visibility: hidden" id="water6" d="M0 214L35.5 214.3C71 214.7 142 215.3 213.2 220.5C284.3 225.7 355.7 235.3 426.8 240.8C498 246.3 569 247.7 640 235.2C711 222.7 782 196.3 853.2 178.8C924.3 161.3 995.7 152.7 1066.8 154.5C1138 156.3 1209 168.7 1280 174.7C1351 180.7 1422 180.3 1493.2 184.2C1564.3 188 1635.7 196 1706.8 201.7C1778 207.3 1849 210.7 1884.5 212.3L1920 214L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#003bab"></path>
					<path style="visibility: hidden" id="water8" d="M0 217L35.5 221.3C71 225.7 142 234.3 213.2 242.7C284.3 251 355.7 259 426.8 264.3C498 269.7 569 272.3 640 264C711 255.7 782 236.3 853.2 235.8C924.3 235.3 995.7 253.7 1066.8 259C1138 264.3 1209 256.7 1280 255.7C1351 254.7 1422 260.3 1493.2 254.2C1564.3 248 1635.7 230 1706.8 231.8C1778 233.7 1849 255.3 1884.5 266.2L1920 277L1920 301L1884.5 301C1849 301 1778 301 1706.8 301C1635.7 301 1564.3 301 1493.2 301C1422 301 1351 301 1280 301C1209 301 1138 301 1066.8 301C995.7 301 924.3 301 853.2 301C782 301 711 301 640 301C569 301 498 301 426.8 301C355.7 301 284.3 301 213.2 301C142 301 71 301 35.5 301L0 301Z" fill="#3c31dd"></path>
			
				</svg>

				<section class="home-projects blue">
					<?php 
					// Projects Section Title
					if ( get_field ( 'project_subheading' ) ):
						?>
						<h2 id="projects-section"><?php the_field( 'project_subheading' ) ?></h2>
						<?php
					endif;
					?>
					<div id="home-page-projects-container">
					<?php
					// Project box
					?>
					
						<?php
						if (have_rows ( 'projects_section' ) ) :
							while( have_rows( 'projects_section' ) ): 
								the_row(); 
								?>
								<article class="front-page-projects animate__animated">
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
											$size = 'large'; // (thumbnail, medium, large, full or custom size)
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
					</div>

				</section>

				<svg id="visual" viewBox="0 0 1920 300" width="1920" height="300"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
					<rect x="0" y="0" width="1920" height="300" fill="#3c31dd"></rect>
					<path id="wave1" d="M0 137L29.2 133.5C58.3 130 116.7 123 174.8 123.3C233 123.7 291 131.3 349.2 134.8C407.3 138.3 465.7 137.7 523.8 136.5C582 135.3 640 133.7 698.2 130.3C756.3 127 814.7 122 872.8 125.8C931 129.7 989 142.3 1047.2 147.5C1105.3 152.7 1163.7 150.3 1221.8 143.3C1280 136.3 1338 124.7 1396.2 115C1454.3 105.3 1512.7 97.7 1570.8 95.8C1629 94 1687 98 1745.2 107.2C1803.3 116.3 1861.7 130.7 1890.8 137.8L1920 145L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#0066ff"></path>
					<path id="wave3" d="M0 194L29.2 185.8C58.3 177.7 116.7 161.3 174.8 155.5C233 149.7 291 154.3 349.2 157.7C407.3 161 465.7 163 523.8 168.5C582 174 640 183 698.2 186.3C756.3 189.7 814.7 187.3 872.8 187.3C931 187.3 989 189.7 1047.2 184.5C1105.3 179.3 1163.7 166.7 1221.8 166.5C1280 166.3 1338 178.7 1396.2 176.3C1454.3 174 1512.7 157 1570.8 156.8C1629 156.7 1687 173.3 1745.2 181.7C1803.3 190 1861.7 190 1890.8 190L1920 190L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#004db1"></path>
					<path id="wave5" d="M0 201L29.2 207.2C58.3 213.3 116.7 225.7 174.8 226C233 226.3 291 214.7 349.2 205.7C407.3 196.7 465.7 190.3 523.8 194.7C582 199 640 214 698.2 215.2C756.3 216.3 814.7 203.7 872.8 202C931 200.3 989 209.7 1047.2 216.2C1105.3 222.7 1163.7 226.3 1221.8 229C1280 231.7 1338 233.3 1396.2 229.2C1454.3 225 1512.7 215 1570.8 208.2C1629 201.3 1687 197.7 1745.2 197.2C1803.3 196.7 1861.7 199.3 1890.8 200.7L1920 202L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#003266"></path>
					<path id="wave7" d="M0 259L29.2 256.7C58.3 254.3 116.7 249.7 174.8 251C233 252.3 291 259.7 349.2 260C407.3 260.3 465.7 253.7 523.8 250.5C582 247.3 640 247.7 698.2 252C756.3 256.3 814.7 264.7 872.8 267.2C931 269.7 989 266.3 1047.2 258.8C1105.3 251.3 1163.7 239.7 1221.8 240.2C1280 240.7 1338 253.3 1396.2 258.5C1454.3 263.7 1512.7 261.3 1570.8 254.7C1629 248 1687 237 1745.2 237.7C1803.3 238.3 1861.7 250.7 1890.8 256.8L1920 263L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#001220"></path>

					<path style="visibility: hidden" id="wave2" d="M0 109L29.2 116.8C58.3 124.7 116.7 140.3 174.8 139.3C233 138.3 291 120.7 349.2 123C407.3 125.3 465.7 147.7 523.8 152C582 156.3 640 142.7 698.2 138C756.3 133.3 814.7 137.7 872.8 138C931 138.3 989 134.7 1047.2 126.7C1105.3 118.7 1163.7 106.3 1221.8 111C1280 115.7 1338 137.3 1396.2 145.8C1454.3 154.3 1512.7 149.7 1570.8 141.7C1629 133.7 1687 122.3 1745.2 123.3C1803.3 124.3 1861.7 137.7 1890.8 144.3L1920 151L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#0066ff"></path>
					<path style="visibility: hidden" id="wave4" d="M0 157L29.2 162C58.3 167 116.7 177 174.8 172.8C233 168.7 291 150.3 349.2 151C407.3 151.7 465.7 171.3 523.8 174C582 176.7 640 162.3 698.2 157.8C756.3 153.3 814.7 158.7 872.8 161.5C931 164.3 989 164.7 1047.2 167.8C1105.3 171 1163.7 177 1221.8 183.2C1280 189.3 1338 195.7 1396.2 198.7C1454.3 201.7 1512.7 201.3 1570.8 191.8C1629 182.3 1687 163.7 1745.2 160.3C1803.3 157 1861.7 169 1890.8 175L1920 181L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#004db1"></path>
					<path style="visibility: hidden" id="wave6" d="M0 233L29.2 234.3C58.3 235.7 116.7 238.3 174.8 237.8C233 237.3 291 233.7 349.2 230.2C407.3 226.7 465.7 223.3 523.8 225.2C582 227 640 234 698.2 233.8C756.3 233.7 814.7 226.3 872.8 225.5C931 224.7 989 230.3 1047.2 224.3C1105.3 218.3 1163.7 200.7 1221.8 193.3C1280 186 1338 189 1396.2 189.3C1454.3 189.7 1512.7 187.3 1570.8 195.2C1629 203 1687 221 1745.2 224.2C1803.3 227.3 1861.7 215.7 1890.8 209.8L1920 204L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#003266"></path>
					<path style="visibility: hidden" id="wave8" d="M0 239L29.2 244.5C58.3 250 116.7 261 174.8 259C233 257 291 242 349.2 239.8C407.3 237.7 465.7 248.3 523.8 251.7C582 255 640 251 698.2 249.3C756.3 247.7 814.7 248.3 872.8 250.5C931 252.7 989 256.3 1047.2 261.5C1105.3 266.7 1163.7 273.3 1221.8 270.7C1280 268 1338 256 1396.2 247.2C1454.3 238.3 1512.7 232.7 1570.8 232C1629 231.3 1687 235.7 1745.2 244.2C1803.3 252.7 1861.7 265.3 1890.8 271.7L1920 278L1920 301L1890.8 301C1861.7 301 1803.3 301 1745.2 301C1687 301 1629 301 1570.8 301C1512.7 301 1454.3 301 1396.2 301C1338 301 1280 301 1221.8 301C1163.7 301 1105.3 301 1047.2 301C989 301 931 301 872.8 301C814.7 301 756.3 301 698.2 301C640 301 582 301 523.8 301C465.7 301 407.3 301 349.2 301C291 301 233 301 174.8 301C116.7 301 58.3 301 29.2 301L0 301Z" fill="#001220"></path>
				</svg>

				
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
