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

<div class="mx-auto col-12 col-md-6 col-lg-6">
  <!-- Card -->
  <div class="card cat">

  <!-- Card content -->
  <div class="card-body d-flex flex-row">
    <!-- Content -->
    <div>

      <!-- Title -->
      <h4 class="card-title font-weight-bold mb-2"><? the_title(); ?></h4>
      <!-- Subtitle -->
      <p class="card-text"><i class="far fa-clock"></i><? the_title(); ?> <? _e('was born on', 'katt-kommando-syd'); ?>: <? the_field('cat_age'); ?></p>

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
        <p class="card-text"><? _e('Location', 'katt-kommando-syd'); ?>: <? 

        $cities = get_the_terms($post->ID, 'cities'); /* Fetching the cats gender */

        foreach ($cities as $city) {

          $city_links = get_term_link($city); /* Getting the link to the equivalent city taxonomy */
      
          echo '<a href="' . esc_url($city_links) . '">' . $city->name . '</a>';
        
        
        }
        ?></p>

      <!-- Text -->
      <p class="card-text"></p>
      <!-- Button -->
     <a href="<? the_permalink(); ?>" class="btn btn-primary"><? _e('View cat', 'katt-kommando-syd'); ?></a>
      
    </div>

  </div>

 </div>
<!-- Card -->
</div> <!-- /col-div -->
