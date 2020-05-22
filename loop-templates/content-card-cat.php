<?php
/**
 * Card Template for cat
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<? $image = get_field('cat_image'); ?>
<div class="col-sm-12 col-md-6 col-lg-3 cat-spacing">
    <div class="card one-cat">
      <? if(!empty($image) ) : ?>
        <img class="card-img-top archive-cat-img" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
      <? endif; ?>
      <div class="card-body">
          <h5 class="card-title"><? the_title(); ?></h5>
          <p class="card-text"><? the_field('cat_gender'); ?></p>
          <a href="<? the_permalink(); ?>" class="btn btn-primary">View cat</a>
      </div> <!-- /card-body -->
    </div> <!-- /card -->
</div> <!-- /col -->