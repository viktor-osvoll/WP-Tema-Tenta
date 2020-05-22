<?
/**
 * Success Stories
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="media col-12 col-md-12 col-lg-12 success-media">
  <div class="media-body media-text">
    <h5 class="mt-0"><? the_title(); ?></h5>
    <p><? the_field('success_story'); ?></p>
    <footer class="blockquote-footer"> <cite title="Source Title"><? the_author(); ?></cite></footer>
  </div>
</div>