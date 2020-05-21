<?
/**
 * Latest Cats
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?
// Get the Cat Items
$items = get_field('max_cats_shown', 'option');

$cat_items = new WP_Query([
    'post_type'         => 'cat',
    'posts_per_page'     => $items,
]);

?>

<? if($cat_items->have_posts()) : ?>
    <div class="container">
        <div class="row">

    <? while($cat_items->have_posts()) : $cat_items->the_post(); ?>
        <? get_template_part('loop-templates/content-latest-cats'); ?>
<? endwhile;?>

<? wp_reset_postdata(); ?>

    </div>
</div>
<? endif; ?>