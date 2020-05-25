<? 
function cptui_register_my_cpts() {

	/**
	 * Post Type: Cats.
	 */

	$labels = [
		"name" => __( "Cats", "katt-kommando-syd" ),
		"singular_name" => __( "Cat", "katt-kommando-syd" ),
		"menu_name" => __( "My Cats", "katt-kommando-syd" ),
		"all_items" => __( "All Cats", "katt-kommando-syd" ),
		"add_new" => __( "Add new", "katt-kommando-syd" ),
		"add_new_item" => __( "Add new Cat", "katt-kommando-syd" ),
		"edit_item" => __( "Edit Cat", "katt-kommando-syd" ),
		"new_item" => __( "New Cat", "katt-kommando-syd" ),
		"view_item" => __( "View Cats", "katt-kommando-syd" ),
		"view_items" => __( "View Cat", "katt-kommando-syd" ),
		"search_items" => __( "Search Cats", "katt-kommando-syd" ),
		"not_found" => __( "No Cats found", "katt-kommando-syd" ),
		"not_found_in_trash" => __( "No Cats found in trash", "katt-kommando-syd" ),
		"parent" => __( "Parent Cat:", "katt-kommando-syd" ),
		"featured_image" => __( "Featured image for this Cat", "katt-kommando-syd" ),
		"set_featured_image" => __( "Set featured image for this Cat", "katt-kommando-syd" ),
		"remove_featured_image" => __( "Remove featured image for this Cat", "katt-kommando-syd" ),
		"use_featured_image" => __( "Use as featured image for this Cat", "katt-kommando-syd" ),
		"archives" => __( "Cat archives", "katt-kommando-syd" ),
		"insert_into_item" => __( "Insert into Cat", "katt-kommando-syd" ),
		"uploaded_to_this_item" => __( "Upload to this Cat", "katt-kommando-syd" ),
		"filter_items_list" => __( "Filter Cats list", "katt-kommando-syd" ),
		"items_list_navigation" => __( "Cats list navigation", "katt-kommando-syd" ),
		"items_list" => __( "Cats list", "katt-kommando-syd" ),
		"attributes" => __( "Cats attributes", "katt-kommando-syd" ),
		"name_admin_bar" => __( "Cat", "katt-kommando-syd" ),
		"item_published" => __( "Cat published", "katt-kommando-syd" ),
		"item_published_privately" => __( "Cat published privately.", "katt-kommando-syd" ),
		"item_reverted_to_draft" => __( "Cat reverted to draft.", "katt-kommando-syd" ),
		"item_scheduled" => __( "Cat scheduled", "katt-kommando-syd" ),
		"item_updated" => __( "Cat updated.", "katt-kommando-syd" ),
		"parent_item_colon" => __( "Parent Cat:", "katt-kommando-syd" ),
	];

	$args = [
		"label" => __( "Cats", "katt-kommando-syd" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "cat", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
		"taxonomies" => [ "genders", "cities" ],
	];

	register_post_type( "cat", $args );

	/**
	 * Post Type: Adoptions.
	 */

	$labels = [
		"name" => __( "Adoptions", "katt-kommando-syd" ),
		"singular_name" => __( "Adoption", "katt-kommando-syd" ),
		"menu_name" => __( "My Adoptions", "katt-kommando-syd" ),
		"all_items" => __( "All Adoptions", "katt-kommando-syd" ),
		"add_new" => __( "Add new", "katt-kommando-syd" ),
		"add_new_item" => __( "Add new Adoption", "katt-kommando-syd" ),
		"edit_item" => __( "Edit Adoption", "katt-kommando-syd" ),
		"new_item" => __( "New Adoption", "katt-kommando-syd" ),
		"view_item" => __( "View Adoption", "katt-kommando-syd" ),
		"view_items" => __( "View Adoptions", "katt-kommando-syd" ),
		"search_items" => __( "Search Adoptions", "katt-kommando-syd" ),
		"not_found" => __( "No Adoptions found", "katt-kommando-syd" ),
		"not_found_in_trash" => __( "No Adoptions found in trash", "katt-kommando-syd" ),
		"parent" => __( "Parent Adoption:", "katt-kommando-syd" ),
		"featured_image" => __( "Featured image for this Adoption", "katt-kommando-syd" ),
		"set_featured_image" => __( "Set featured image for this Adoption", "katt-kommando-syd" ),
		"remove_featured_image" => __( "Remove featured image for this Adoption", "katt-kommando-syd" ),
		"use_featured_image" => __( "Use as featured image for this Adoption", "katt-kommando-syd" ),
		"archives" => __( "Adoption archives", "katt-kommando-syd" ),
		"insert_into_item" => __( "Insert into Adoption", "katt-kommando-syd" ),
		"uploaded_to_this_item" => __( "Upload to this Adoption", "katt-kommando-syd" ),
		"filter_items_list" => __( "Filter Adoptions list", "katt-kommando-syd" ),
		"items_list_navigation" => __( "Adoptions list navigation", "katt-kommando-syd" ),
		"items_list" => __( "Adoptions list", "katt-kommando-syd" ),
		"attributes" => __( "Adoptions attributes", "katt-kommando-syd" ),
		"name_admin_bar" => __( "Adoption", "katt-kommando-syd" ),
		"item_published" => __( "Adoption published", "katt-kommando-syd" ),
		"item_published_privately" => __( "Adoption published privately.", "katt-kommando-syd" ),
		"item_reverted_to_draft" => __( "Adoption reverted to draft.", "katt-kommando-syd" ),
		"item_scheduled" => __( "Adoption scheduled", "katt-kommando-syd" ),
		"item_updated" => __( "Adoption updated.", "katt-kommando-syd" ),
		"parent_item_colon" => __( "Parent Adoption:", "katt-kommando-syd" ),
	];

	$args = [
		"label" => __( "Adoptions", "katt-kommando-syd" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "adoption", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "custom-fields" ],
	];

	register_post_type( "adoptions", $args );

	/**
	 * Post Type: Success Stories.
	 */

	$labels = [
		"name" => __( "Success Stories", "katt-kommando-syd" ),
		"singular_name" => __( "Success Story", "katt-kommando-syd" ),
		"menu_name" => __( "My Success Stories", "katt-kommando-syd" ),
		"all_items" => __( "All Success Stories", "katt-kommando-syd" ),
		"add_new" => __( "Add new", "katt-kommando-syd" ),
		"add_new_item" => __( "Add new Success Story", "katt-kommando-syd" ),
		"edit_item" => __( "Edit Success Story", "katt-kommando-syd" ),
		"new_item" => __( "New Success Story", "katt-kommando-syd" ),
		"view_item" => __( "View Success Story", "katt-kommando-syd" ),
		"view_items" => __( "View Success Stories", "katt-kommando-syd" ),
		"search_items" => __( "Search Success Stories", "katt-kommando-syd" ),
		"not_found" => __( "No Success Stories found", "katt-kommando-syd" ),
		"not_found_in_trash" => __( "No Success Stories found in trash", "katt-kommando-syd" ),
		"parent" => __( "Parent Success Story:", "katt-kommando-syd" ),
		"featured_image" => __( "Featured image for this Success Story", "katt-kommando-syd" ),
		"set_featured_image" => __( "Set featured image for this Success Story", "katt-kommando-syd" ),
		"remove_featured_image" => __( "Remove featured image for this Success Story", "katt-kommando-syd" ),
		"use_featured_image" => __( "Use as featured image for this Success Story", "katt-kommando-syd" ),
		"archives" => __( "Success Story archives", "katt-kommando-syd" ),
		"insert_into_item" => __( "Insert into Success Story", "katt-kommando-syd" ),
		"uploaded_to_this_item" => __( "Upload to this Success Story", "katt-kommando-syd" ),
		"filter_items_list" => __( "Filter Success Stories list", "katt-kommando-syd" ),
		"items_list_navigation" => __( "Success Stories list navigation", "katt-kommando-syd" ),
		"items_list" => __( "Success Stories list", "katt-kommando-syd" ),
		"attributes" => __( "Success Stories attributes", "katt-kommando-syd" ),
		"name_admin_bar" => __( "Success Story", "katt-kommando-syd" ),
		"item_published" => __( "Success Story published", "katt-kommando-syd" ),
		"item_published_privately" => __( "Success Story published privately.", "katt-kommando-syd" ),
		"item_reverted_to_draft" => __( "Success Story reverted to draft.", "katt-kommando-syd" ),
		"item_scheduled" => __( "Success Story scheduled", "katt-kommando-syd" ),
		"item_updated" => __( "Success Story updated.", "katt-kommando-syd" ),
		"parent_item_colon" => __( "Parent Success Story:", "katt-kommando-syd" ),
	];

	$args = [
		"label" => __( "Success Stories", "katt-kommando-syd" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "success_stories", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail", "custom-fields" ],
	];

	register_post_type( "success_stories", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
?>