<?php 
    add_action('init', 'grantEdwards_post_types');
    function grantEdwards_post_types() {
    //Event Post Type
    register_post_type("event", array(
        "supports" => array("title", "editor", "excerpt"),
        "rewrite" => array(
            "slug" => "events"
        ), 
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Events",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ),
        "menu_icon" => "dashicons-calendar-alt"
    ));

    register_post_type("work", array(
        "supports" => array("title", "editor", "excerpt"),
        "rewrite" => array(
            "slug" => "works"
        ),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Works",
            "edit_item" => "Edit Work",
            "all_items" => "All Works",
            "singular_name" => "Work"
        ),
        "menu_icon" => 'dashicons-media-audio'
    ));


    // //Review Post Type
    // register_post_type("review", array(
    //     "supports" => array("title", "editor", "excerpt"),
    //     "rewrite" => array(
    //         "slug" => "reviews"
    //     ),
    //     "has_archive" => true,
    //     "public" => true,
    //     "labels" => array(
    //         "name" => "Reviews",
    //         "edit_item" => "Edit Review",
    //         "all_items" => "All Reviews",
    //         "singular_name" => "Review"
    //     ),
    //     "menu_icon" => "dashicons-format-status"
    // ));

    // //News Category
    // register_post_type("news", array(
    //     "supports" => array("title", "editor", "excerpt"),
    //     "rewrite" => array(
    //         "slug" => "news"
    //     ),
    //     "has_archive" => true,
    //     "public" => true,
    //     "labels" => array(
    //         "name" => "News",
    //         "edit_item" => "Edit News Item",
    //         "all_items" => "All News Items",
    //         "singular_name" => "News Item"
    //     ),
    //     "menu_icon" => "dashicons-id-alt"
    // ));


}

?>