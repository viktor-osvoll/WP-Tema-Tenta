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
          <p class="card-text"><? 

              $genders = get_the_terms($post->ID, 'genders');

              foreach ($genders as $gender) {

                $gender_links = get_term_link($gender);
            
              echo '<p>' . $gender->name . '</p>';

              echo '<a href="' . esc_url($gender_links) . '">' . $gender->name . '</a>';
              
              /* echo '<a href="' . esc_url($genderlink) . '">' . $term->name . '</a>'; */
              }


?></p>
          <a href="<? the_permalink(); ?>" class="btn btn-primary">View cat</a>
          <?
            /* $terms = get_terms('genders');
            echo '<ul>';
            foreach($terms as $term) {
              $term_link = get_term_link($terms);

             /*  if(is_wp_error($term_link) ) {
                continue;
              } */
               /*  echo '<li><a href="' . esc_url($term_link) . '">' . $term->name . '</a></li>'; */
            /* } */
            /*   echo '</ul>' */

          ?>
      </div> <!-- /card-body -->
    </div> <!-- /card -->
</div> <!-- /col -->

