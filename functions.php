<?php


// Portfoio search by keyword
function portfolio_search ($where, $query) {    
    //  global $wpdb;
    // $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like( 'attacks' ) . '%\'';
    $post_type = $query->query['post_type'] ?? '';
    $project_type = $query->query['project-type'];

    global $wpdb;
   // print_r($query);
    if($post_type === 'portfolio' && isset( $_GET['search'])) {
       $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . $wpdb->esc_like( $_GET['search'] ) . '%\'';
    }

    return $where;
}

add_filter('posts_where', 'portfolio_search', 10, 2);

?>
