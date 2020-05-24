<?php
/**
 * The template for displaying the different genders
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
                        <?php
                        $genders = get_the_terms($post->ID, 'genders'); /* Fetching the cats gender */

                        foreach ($genders as $gender) {
          
                          echo '<h1 style="text-align: center;"> All ' .  $gender->name . ' cats </h1>';
                        
                        
                        }
						/* the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' ); */
						?>
                    </header><!-- .page-header -->
                    <div class="container">
                        <div class="row">
                    
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content-card-cat' );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
                ?>
            </div> <!-- /row -->
    </div>  <!-- /container -->
			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			/* get_template_part( 'global-templates/right-sidebar-check' ); */
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
