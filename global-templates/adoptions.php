<?
/**
 * How to Adopt
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<? $adopting = new WP_Query([
    'post_type'     => 'adoptions',
    'order'         => 'ASC',
]); ?>

<? while($adopting->have_posts()) : $adopting->the_post(); ?>
    <? the_title(); ?>
        <? the_field('how_to_adopt'); ?>
<? endwhile; ?>

<? wp_reset_postdata(); ?>