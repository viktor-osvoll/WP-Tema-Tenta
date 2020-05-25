<?php
/**
 * Showing content for Blog Page-template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="col-12 col-md-6 col-lg-6">
	<div class="card one-cat" style="margin-top: 2%;">
  		<? echo get_the_post_thumbnail();  ?>
  		<div class="card-body">
		<p class="card-text"><? the_title(); ?></p>
		<a href="<? the_permalink(); ?>" class="btn btn-primary"><? _e('View Post', 'katt-kommando-syd'); ?></a>
 	 </div>
	</div>
</div>