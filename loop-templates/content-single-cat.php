<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
    <? if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h1><? the_title(); ?></h1>
    <?
           $image = get_field('cat_image');
           if(!empty($image) ) : ?>
           <img src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
           <? endif; ?>
           <p><? the_field('cat_description'); ?></p>
           <p><? the_field('cat_city'); ?></p>
           <p><? the_field('cat_color'); ?></p>
           <p><? the_title(); ?> was born <? the_field('cat_age'); ?></p>
           <p><? the_field('cat_gender'); ?></p>
           <p><? the_field('cat_weight'); ?> KG</p>
           <p>Is adopted: <? the_field('cat_adopted'); ?></p>
           
<? endwhile; endif; ?>
</div>