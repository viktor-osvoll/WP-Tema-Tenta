<? get_header(); ?>

        <h1>All cats up for adoption</h1>
       <? 
       $args = array('post_type' => 'cats');
       $query = new WP_Query($args);?>

    <div class="container">
        <div class="row">
     <?  while($query->have_posts()) : $query->the_post();  ?>

            <div class="card" style="width: 18rem;">
           <?
           $image = get_field('cat_image');
           if(!empty($image) ) : ?>
           <img src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
           <? endif; ?>
           
  <div class="card-body">
    <h5 class="card-title"><? the_title(); ?></h5>
    <p class="card-text"><? the_field('cat_gender'); ?></p>
    <a href="<? the_permalink(); ?>" class="btn btn-primary">View Cat</a>
  </div>
</div>
            </div>
       <? endwhile; ?>
<? wp_reset_postdata(); ?>
    </div>
</div>


<? get_footer(); ?>