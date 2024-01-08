<?php
/*======================/Create post type - Start /=============================*/
function prefix_register_all() {

	/* ========================================================================= */
	if(get_user_locale() == "ja") {
		$name = "導入事例";
		$singular_name = "導入事例";
		$menu_name = "導入事例";
		$name_admin_bar = "導入事例";
		$all_items = "導入事例一覧";
		$add_new = "新規追加";
		$add_new_item = "新規投稿を追加";
		$edit_item = "項目編集";
		$new_item = "新規項目";
		$view_item = "項目閲覧";
		$search_items = "投稿を検索";
		$not_found = "投稿が見つかりませんでした。";
		$not_found_in_trash = "空のゴミ箱";
		$parent_item_colon = "大項目種類:";
	} else {
		$name = "Case";
		$singular_name = "Case";
		$menu_name = "Case";
		$name_admin_bar = "Case";
		$all_items = "All Items";
		$add_new = "Add New";
		$add_new_item = "Add New Item";
		$edit_item = "Edit Item";
		$new_item = "New Item";
		$view_item = "View Item";
		$search_items = "Search Items";
		$not_found = "No items found.";
		$not_found_in_trash = "No items found in Trash.";
		$parent_item_colon = "Parent Items:";
	}
	register_post_type(
		'case',
		array(
			'labels' => array(
					'name' => __( $name, 'text_domain' ),
					'singular_name' => __( $singular_name, 'text_domain' ),
					'menu_name' => __( $menu_name, 'text_domain' ),
					'name_admin_bar' => __( $name_admin_bar, 'text_domain' ),
					'all_items' => __( $all_items, 'text_domain' ),
					'add_new' => _x( $add_new, 'case', 'text_domain' ),
					'add_new_item' => __( $add_new_item, 'text_domain' ),
					'edit_item' => __( $edit_item, 'text_domain' ),
					'new_item' => __( $new_item, 'text_domain' ),
					'view_item' => __( $view_item, 'text_domain' ),
					'search_items' => __( $search_items, 'text_domain' ),
					'not_found' => __( $not_found, 'text_domain' ),
					'not_found_in_trash' => __( $not_found_in_trash, 'text_domain' ),
					'parent_item_colon' => __( $parent_item_colon, 'text_domain' )
				),
			'public' => true,
			'menu_position' => 20,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'revisions'
			),
            'taxonomies' => array(
				'case-category'
			),
			'has_archive' => true,
			'menu_icon' => 'dashicons-welcome-write-blog'
		)
	);

	
	// FOR TAXONOMY
	if(get_user_locale() == "ja") {
		$tax_name = "カテゴリー";
		$tax_singular_name = "カテゴリー";
		$tax_menu_name = "カテゴリー";
		$tax_all_items = "全カテゴリ";
		$tax_edit_item = "カテゴリ編集";
		$tax_view_item = "カテゴリ閲覧";
		$tax_update_item = "Update Categories";
		$tax_add_new_item = "新規カテゴリーを追加";
		$tax_parent_item = "親カテゴリー";
		$tax_parent_item_colon = "親カテゴリー:";
		$tax_search_items = "カテゴリーを検索";
	} else {
		$tax_name = "Categories";
		$tax_singular_name = "Categories";
		$tax_menu_name = "Categories";
		$tax_all_items = "All Categories";
		$tax_edit_item = "Edit Categories";
		$tax_view_item = "View Categories";
		$tax_update_item = "Update Categories";
		$tax_add_new_item = "Add New Categories";
		$tax_parent_item = "Parent Category";
		$tax_parent_item_colon = "Parent Category:";
		$tax_search_items = "Search Categories";
	}
    register_taxonomy(
		'case-category',
		array(
			'case'
		),
		array(
			'labels'            => array(
				'name'              => _x($tax_name, 'case', 'text_domain'),
				'singular_name'     => _x($tax_singular_name, 'case', 'text_domain'),
				'menu_name'         => __($tax_menu_name, 'text_domain'),
				'all_items'         => __($tax_all_items, 'text_domain'),
				'edit_item'         => __($tax_edit_item, 'text_domain'),
				'view_item'         => __($tax_view_item, 'text_domain'),
				'update_item'       => __($tax_update_item, 'text_domain'),
				'add_new_item'      => __($tax_add_new_item, 'text_domain'),
				'parent_item'       => __($tax_parent_item, 'text_domain'),
				'parent_item_colon' => __($tax_parent_item_colon, 'text_domain'),
				'search_items'      => __($tax_search_items, 'text_domain')
			),
			'show_admin_column' => true,
			'hierarchical'      => true
		)
	);
	/* ==================================== END - Case ===================================== */

	/* ========================================================================= */
	if(get_user_locale() == "ja") {
		$name = "コラム";
		$singular_name = "コラム";
		$menu_name = "コラム";
		$name_admin_bar = "コラム";
		$all_items = "コラム一覧";
		$add_new = "新規追加";
		$add_new_item = "新規投稿を追加";
		$edit_item = "項目編集";
		$new_item = "新規項目";
		$view_item = "項目閲覧";
		$search_items = "投稿を検索";
		$not_found = "投稿が見つかりませんでした。";
		$not_found_in_trash = "空のゴミ箱";
		$parent_item_colon = "大項目種類:";
	} else {
		$name = "Column";
		$singular_name = "Column";
		$menu_name = "Column";
		$name_admin_bar = "Column";
		$all_items = "All Items";
		$add_new = "Add New";
		$add_new_item = "Add New Item";
		$edit_item = "Edit Item";
		$new_item = "New Item";
		$view_item = "View Item";
		$search_items = "Search Items";
		$not_found = "No items found.";
		$not_found_in_trash = "No items found in Trash.";
		$parent_item_colon = "Parent Items:";
	}
	register_post_type(
		'column',
		array(
			'labels' => array(
					'name' => __( $name, 'text_domain' ),
					'singular_name' => __( $singular_name, 'text_domain' ),
					'menu_name' => __( $menu_name, 'text_domain' ),
					'name_admin_bar' => __( $name_admin_bar, 'text_domain' ),
					'all_items' => __( $all_items, 'text_domain' ),
					'add_new' => _x( $add_new, 'column', 'text_domain' ),
					'add_new_item' => __( $add_new_item, 'text_domain' ),
					'edit_item' => __( $edit_item, 'text_domain' ),
					'new_item' => __( $new_item, 'text_domain' ),
					'view_item' => __( $view_item, 'text_domain' ),
					'search_items' => __( $search_items, 'text_domain' ),
					'not_found' => __( $not_found, 'text_domain' ),
					'not_found_in_trash' => __( $not_found_in_trash, 'text_domain' ),
					'parent_item_colon' => __( $parent_item_colon, 'text_domain' )
				),
			'public' => true,
			'menu_position' => 20,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'revisions'
			),
            'taxonomies' => array(
				'column-category'
			),
			'has_archive' => true,
			'menu_icon' => 'dashicons-welcome-write-blog'
		)
	);

	
	// FOR TAXONOMY
	if(get_user_locale() == "ja") {
		$tax_name = "カテゴリー";
		$tax_singular_name = "カテゴリー";
		$tax_menu_name = "カテゴリー";
		$tax_all_items = "全カテゴリ";
		$tax_edit_item = "カテゴリ編集";
		$tax_view_item = "カテゴリ閲覧";
		$tax_update_item = "Update Categories";
		$tax_add_new_item = "新規カテゴリーを追加";
		$tax_parent_item = "親カテゴリー";
		$tax_parent_item_colon = "親カテゴリー:";
		$tax_search_items = "カテゴリーを検索";
	} else {
		$tax_name = "Categories";
		$tax_singular_name = "Categories";
		$tax_menu_name = "Categories";
		$tax_all_items = "All Categories";
		$tax_edit_item = "Edit Categories";
		$tax_view_item = "View Categories";
		$tax_update_item = "Update Categories";
		$tax_add_new_item = "Add New Categories";
		$tax_parent_item = "Parent Category";
		$tax_parent_item_colon = "Parent Category:";
		$tax_search_items = "Search Categories";
	}
    register_taxonomy(
		'column-category',
		array(
			'column'
		),
		array(
			'labels'            => array(
				'name'              => _x($tax_name, 'column', 'text_domain'),
				'singular_name'     => _x($tax_singular_name, 'column', 'text_domain'),
				'menu_name'         => __($tax_menu_name, 'text_domain'),
				'all_items'         => __($tax_all_items, 'text_domain'),
				'edit_item'         => __($tax_edit_item, 'text_domain'),
				'view_item'         => __($tax_view_item, 'text_domain'),
				'update_item'       => __($tax_update_item, 'text_domain'),
				'add_new_item'      => __($tax_add_new_item, 'text_domain'),
				'parent_item'       => __($tax_parent_item, 'text_domain'),
				'parent_item_colon' => __($tax_parent_item_colon, 'text_domain'),
				'search_items'      => __($tax_search_items, 'text_domain')
			),
			'show_admin_column' => true,
			'hierarchical'      => true
		)
	);
	/* ==================================== END - COLUMN ===================================== */


}

add_action( 'init', 'prefix_register_all', 0 );
function prefix_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'prefix_flush_rewrite_rules' );


/* change color for icon menu admin */
function replace_admin_menu_icons_css() { ?>
	<style>
		#adminmenu #menu-posts,
		#adminmenu #menu-comments {
			display: none;
		}

		/*#adminmenu #menu-posts-blog div.wp-menu-image::before,
		#adminmenu #menu-posts-blog div.wp-menu-name {
			color: #f0f300;
		}*/
	</style>
<?php }
add_action( 'admin_head', 'replace_admin_menu_icons_css' );


/*======================/Create post type - end /=============================*/
// Add theme option
// if( function_exists('acf_add_options_page') ) {
//     $option_page = acf_add_options_page(array(
//         'page_title'    => 'Option_Name',
//         'menu_title'    => 'Option_Name',
//         'menu_slug'     => 'theme-general-settings',
//         'capability'    => 'edit_posts',
//         'redirect'  => false,
//         'position' => 20,
//         'icon_url' => 'dashicons-media-spreadsheet',
//     ));
// }
?>