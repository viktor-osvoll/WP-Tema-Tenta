<? $image = get_field('cat_image'); ?>
<div class="card col-6 col-md-4 col-lg-3"  style="width: 18rem;">
<? if(!empty($image) ) : ?>
    <img class="card-img-top" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
<? endif; ?>
 <div class="card-body">
    <h5 class="card-title"><? the_title(); ?></h5>
    <p class="card-text"><? the_field('cat_gender'); ?></p>
    <a href="<? the_permalink(); ?>" class="btn btn-primary">View cat</a>
  </div>
</div>