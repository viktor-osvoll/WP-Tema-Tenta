<?
/**
 *  Success Stories
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?  
$success = new WP_Query([
    'post_type'         => 'success_stories',
    'posts_per_page'    => 2,
]);
/* var_dump($success); */
?>
<h1 style="text-align: center;"><? _e('Success Stories', 'katt-kommando-syd'); ?></h1>
<? if($success->have_posts() ) : ?>
    <? while($success->have_posts()) : $success->the_post(); ?>
        <? get_template_part('loop-templates/content-success_stories'); ?>
    <? endwhile; ?>

    <? wp_reset_postdata(); ?>
<? endif; ?>