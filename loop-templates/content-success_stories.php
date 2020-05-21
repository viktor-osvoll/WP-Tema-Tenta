<?
/**
 * Success Stories
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="col-12 col-md-12 col-lg-6">
    <h1><? the_title(); ?></h1>
        <p><? the_field('success_story'); ?></p>
    <? the_post_thumbnail(); ?>
</div>