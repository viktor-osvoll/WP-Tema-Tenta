<?
/**
 * Latest Cats
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?
// Get the Cat Items

$maxCatItems = the_field('max_cats_shown', 'option');

$cat_items = new WP_Query([
    'post_type'         => 'cat',
    'post_per_page'     => 2,
]);



?>
