<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
				
			 			
						<?

						$terms = get_terms( array(
							'taxonomy' => 'cities',
							'hide_empty' => true,
						));
						
						echo '<ul class="list-group list-group-flush col-6 col-md-6 col-lg-6">';

						foreach( $terms as $term ) {
							echo '<li class="list-group-item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
						}

						echo '</ul>';
					/* 	$cities = get_the_terms($post->ID, 'cities');  *//* Fetching the cats gender */

                        /* foreach ($cities as $city) {
                      
							$city_links = get_term_link($city); */ /* Getting the link to the equivalent gender taxonomy */
      /* 
							echo '<a href="' . esc_url($city_links) . '">' . $city . '</a>';
                        } */
						?>

						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

