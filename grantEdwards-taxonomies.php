<?php

add_action('init', 'create_work_types_hierarchical_taxonomy');

function create_work_types_hierarchical_taxonomy() {
  $labels = array(
    "name" => _x("Work Types", 'taxonomy general name'),
    "singular_name" => _x("Work Type", 'taxonomy singular name'),
    "search_items" => __("Search Work Types"),
    "all_items" => __("All Work Types"),
    "parent_item" => __("Parent Work Type"),
    "parent_item_colon" => __("Parent Work Type:"),
    "edit_item" => __("Edit Work Type"),
    "update_item" => __("Update Work Type"),
    "add_new_item" => __("Add New Work Type"),
    "new_item_name" => __("New Work Type"),
    "menu_name" => __("Work Types")
  );

  register_taxonomy("work_types", array('work'), array(
    "hierarchical" => true,
    "labels" => $labels,
    "show_ui" => true,
    "show_in_rest" => true,
    "show_admin_column" => true,
    "query_var" => true,
    "rewrite" => array("slug" => "work type")
  ));
}
?>