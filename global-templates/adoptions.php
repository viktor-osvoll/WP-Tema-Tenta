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
            <h1 class="adopt-title">How to adopt</h1> <br>
        </div>

<? $adopting = new WP_Query([
    'post_type'     => 'adoptions',
    'order'         => 'ASC',
]); ?>

<div class="container">
    <div class="row">

<? while($adopting->have_posts()) : $adopting->the_post(); ?>
<div class="col-12 col-md-6 col-lg-3 mx-auto">
    <div class="card adoption-card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><? the_title(); ?></h5>
                       <hr>
            <p class="card-text"><? the_field('how_to_adopt'); ?></p>
        </div> <!-- /card-body -->
    </div> <!-- /card -->
</div> <!-- /col-div -->
<? endwhile; ?>
  </div> <!-- /row -->
</div><!-- /container -->
<? wp_reset_postdata(); ?>