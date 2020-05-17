<? get_header(); ?>

<div class="container main-content clearfix">
    <div class="left">
        <h1>All cats up for adoption</h1>
        <? if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="cat">
                <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
                <p><? the_field('age'); ?></p>
            </div>
       <? endwhile; ?>
     <? endif; ?>
    </div>
</div>


<? get_footer(); ?>