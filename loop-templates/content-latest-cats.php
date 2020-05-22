<?
/**
 * Latest Cats Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<? $image = get_field('cat_image'); ?>

<div class="col-6 col-md-6 col-lg-6">
<? if(!empty($image) ) : ?>
    <img class="card-img-top" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
<? endif; ?>
    <a style="border: 1px solid black;" href="<? the_permalink(); ?>"><? the_title(); ?></a>
    <p><? the_field('cat_gender'); ?></p>
</div>  