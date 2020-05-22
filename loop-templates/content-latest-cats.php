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

<!-- Card -->
<div class="card mx-auto col-5 col-md-5 col-lg-5">

  <!-- Card content -->
  <div class="card-body d-flex flex-row">
    <!-- Content -->
    <div>

      <!-- Title -->
      <h4 class="card-title font-weight-bold mb-2"><? the_title(); ?></h4>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock"></i><? the_title(); ?> was born on: <? the_field('cat_age'); ?></p>

    </div>

  </div>

  <!-- Card image -->
  <div class="view overlay">
  <? if(!empty($image) ) : ?>
        <img class="card-img-top cat-img" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
    <? endif; ?>
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">
    <div class="collapse-content">
        <p class="card-text">Location: <? the_field('cat_city'); ?></p>

      <!-- Text -->
      <p class="card-text"></p>
      <!-- Button -->
     <a href="<? the_permalink(); ?>" class="btn btn-primary">View cat</a>
      
    </div>

  </div>

</div>
<!-- Card -->
<!-- <div class="col-6 col-md-6 col-lg-6">
    <? /* if(!empty($image) ) : */ ?>
        <img class="card-img-top" src="<?/*  echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); */ ?>">
    <? /* endif; */ ?>
    <a style="border: 1px solid black;" href="<? /* the_permalink(); */ ?>"><?/*  the_title(); */ ?></a>
    <p><? /* the_field('cat_gender'); */ ?></p>
</div>   -->