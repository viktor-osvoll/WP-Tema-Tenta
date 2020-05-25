<?
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Genders.
	 */

	$labels = [
		"name" => __( "Genders", "katt-kommando-syd" ),
		"singular_name" => __( "Gender", "katt-kommando-syd" ),
		"menu_name" => __( "Genders", "katt-kommando-syd" ),
		"all_items" => __( "All Genders", "katt-kommando-syd" ),
		"edit_item" => __( "Edit Gender", "katt-kommando-syd" ),
		"view_item" => __( "View Gender", "katt-kommando-syd" ),
		"update_item" => __( "Update Gender name", "katt-kommando-syd" ),
		"add_new_item" => __( "Add new Gender", "katt-kommando-syd" ),
		"new_item_name" => __( "New Gender name", "katt-kommando-syd" ),
		"parent_item" => __( "Parent Gender", "katt-kommando-syd" ),
		"parent_item_colon" => __( "Parent Gender:", "katt-kommando-syd" ),
		"search_items" => __( "Search Genders", "katt-kommando-syd" ),
		"popular_items" => __( "Popular Genders", "katt-kommando-syd" ),
		"separate_items_with_commas" => __( "Separate Genders with commas", "katt-kommando-syd" ),
		"add_or_remove_items" => __( "Add or remove Genders", "katt-kommando-syd" ),
		"choose_from_most_used" => __( "Choose from the most used Genders", "katt-kommando-syd" ),
		"not_found" => __( "No Genders found", "katt-kommando-syd" ),
		"no_terms" => __( "No Genders", "katt-kommando-syd" ),
		"items_list_navigation" => __( "Genders list navigation", "katt-kommando-syd" ),
		"items_list" => __( "Genders list", "katt-kommando-syd" ),
	];

	$args = [
		"label" => __( "Genders", "katt-kommando-syd" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'gender', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "genders",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "genders", [ "cat" ], $args );

	/**
	 * Taxonomy: Cities.
	 */

	$labels = [
		"name" => __( "Cities", "katt-kommando-syd" ),
		"singular_name" => __( "City", "katt-kommando-syd" ),
		"menu_name" => __( "Cities", "katt-kommando-syd" ),
		"all_items" => __( "All Cities", "katt-kommando-syd" ),
		"edit_item" => __( "Edit City", "katt-kommando-syd" ),
		"view_item" => __( "View City", "katt-kommando-syd" ),
		"update_item" => __( "Update City name", "katt-kommando-syd" ),
		"add_new_item" => __( "Add new City", "katt-kommando-syd" ),
		"new_item_name" => __( "New City name", "katt-kommando-syd" ),
		"parent_item" => __( "Parent City", "katt-kommando-syd" ),
		"parent_item_colon" => __( "Parent City:", "katt-kommando-syd" ),
		"search_items" => __( "Search Cities", "katt-kommando-syd" ),
		"popular_items" => __( "Popular Cities", "katt-kommando-syd" ),
		"separate_items_with_commas" => __( "Separate Cities with commas", "katt-kommando-syd" ),
		"add_or_remove_items" => __( "Add or remove Cities", "katt-kommando-syd" ),
		"choose_from_most_used" => __( "Choose from the most used Cities", "katt-kommando-syd" ),
		"not_found" => __( "No Cities found", "katt-kommando-syd" ),
		"no_terms" => __( "No Cities", "katt-kommando-syd" ),
		"items_list_navigation" => __( "Cities list navigation", "katt-kommando-syd" ),
		"items_list" => __( "Cities list", "katt-kommando-syd" ),
	];

	$args = [
		"label" => __( "Cities", "katt-kommando-syd" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'city', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "cities",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "cities", [ "cat" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
?>