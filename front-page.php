<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$bg_color = get_field('hero_background_color');
?>

<?php if ( is_front_page()/*  && is_home() */ ) : ?>
	<?php get_template_part( 'global-templates/hero-template' ); /* Importing the hero */?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper" style="background-color: <? echo $bg_color ?>;">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">


			<main class="site-main" id="main">
	
				<? get_template_part('global-templates/latest-cats'); ?>

				<? get_template_part('global-templates/success_stories'); ?>

				<? get_template_part('global-templates/adoptions'); ?>

				

			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
