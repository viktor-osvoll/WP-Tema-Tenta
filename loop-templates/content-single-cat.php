<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
    <?
           $image = get_field('cat_image');
           if(!empty($image) ) : ?>
           <img src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
           <? endif; ?>
           <p><? the_field('cat_description'); ?></p>
           <p><? the_field('cat_city'); ?></p>
           <p><? the_field('cat_color'); ?></p>
           <p><? the_title(); ?> was born <? the_field('cat_age'); ?></p>
           <p><? the_field('cat_gender'); ?></p>
           <p><? the_field('cat_weight'); ?> KG</p>
           <p>Is adopted: <? the_field('cat_adopted'); ?></p>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
