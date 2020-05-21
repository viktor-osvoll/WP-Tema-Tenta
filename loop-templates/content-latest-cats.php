<?
/**
 * Latest Cats Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-6 col-md-6 col-lg-6">
    <a style="border: 1px solid black;" href="<? the_permalink(); ?>"><? the_title(); ?></a>
    <p><? the_field('cat_gender'); ?></p>
</div>  