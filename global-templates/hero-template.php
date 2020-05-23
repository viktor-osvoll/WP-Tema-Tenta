<?
/**
 * Hero Template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<? 
    $image = get_field('hero_image');
    $bg_color = get_field('hero_background_color');
?>

<section id="front-page-hero" style="background-color: <? echo $bg_color ?>;
 background-image: url('<? echo $image['url']; ?>');">
  <div class="container d-flex h-100">
    <div class="container hero-text justify-content-center align-self-center">
        <h1 class="hero-title"><? the_field('hero_title'); ?></h1>
        <h2 class="hero-subtitle"><? the_field('hero_subtitle'); ?></h2>
    </div>
  </div>
</section>