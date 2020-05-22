<?
/**
 * How to Adopt
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
  <div class="adopt">
            <h1 class="adopt-title">How to adopt</h1>
        </div>

<? $adopting = new WP_Query([
    'post_type'     => 'adoptions',
    'order'         => 'ASC',
]); ?>

<div class="container">
    <div class="row">

<? while($adopting->have_posts()) : $adopting->the_post(); ?>
    <div class="card col-3 col-md-3 col-lg-3 mx-auto adoption-card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><? the_title(); ?></h5>
                       <hr>
            <p class="card-text"><? the_field('how_to_adopt'); ?></p>
        </div>
    </div>
<? endwhile; ?>
  </div> <!-- /row -->
</div><!-- /container -->
<? wp_reset_postdata(); ?>