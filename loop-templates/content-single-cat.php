<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<? $image = get_field('cat_image'); ?>

<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-7 col-mb-7 col-lg-7 mx-auto">


					<!-- image -->
			<?if(!empty($image) ) : ?>
           <img class="img-fluid z-depth-1-half mb-4 single-cat-object" src="<? echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); ?>">
           <? endif;  ?>

                    <!--Card-->
                    <div class="card mb-4 single-cat-object">

                        <!--Card content-->
                        <div class="card-body">

                            <p>by <b><? the_author(); ?></b> - <? the_date(); ?></p>

                            <hr>

                            <p class="h5 my-4"><b><? the_title(); ?></b> </p>

                            <p>Born on: <b><? the_field('cat_age'); ?></b></p>

                            <blockquote class="blockquote">
                                <p class="mb-0">Lives in: <? $cities = get_the_terms($post->ID, 'cities'); /* Fetching the cats gender */

                                    foreach ($cities as $city) {

                                        echo  $city->name;

                                    } ?></p>
                                <footer class="blockquote-footer">Adopted:
                                    <cite title="Source Title"><? the_field('cat_adopted'); ?></cite>
                                </footer>
                            </blockquote>

							<p class="h5 my-4"><? the_title(); ?> is a <? the_field('cat_color') ?>
							 <?  $genders = get_the_terms($post->ID, 'genders'); /* Fetching the cats gender */

							foreach ($genders as $gender) {

 								 echo  $gender->name;

							} 
							?> cat <br> and weighs <? the_field('cat_weight'); ?> Kg</p>

                            <p>About <? the_title(); ?>: <br> <? the_field('cat_description'); ?></p>

                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                   

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

