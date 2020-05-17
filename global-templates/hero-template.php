<?

/* 
    Front Page Hero
*/

?>

<? 
    $image = get_field('hero_image');
    $bg_color = get_field('hero_background_color');
?>

<section id="front-page-hero" style="background-color: <? echo $bg_color ?>">
    <div class="container">
        <h1><? the_field('hero_title'); ?></h1>
        <h2><? the_field('hero_subtitle'); ?></h2>

        <img src="<? echo $image['url']; ?>" alt="<? echo $image['alt']; ?>">
    </div>
</section>