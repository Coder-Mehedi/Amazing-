<?php 
require_once( '../../../../wp-load.php' );
$post_id = $_POST['post_id'];



// Post like count
function set_post_like($postID) {
    $liked_meta_key = 'post_like_count';
    $liked = get_post_meta($postID, $liked_meta_key, true);

    if($liked) {
        $liked = false;
        update_post_meta($postID, $liked_meta_key, $liked);
    } else {
        $liked = true;
        update_post_meta($postID, $liked_meta_key, $liked);
    }
    echo $liked; 
    
    // if($count == 1){
    //     add_post_meta($postID, $count_key, true);
    // }else{
    //     delete_post_meta($postID, $count_key);
    // }
}

//To keep the count accurate, lets get rid of prefetching
// remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
set_post_like($post_id);
// echo 'liked';
      

    // echo json_encode($aResult);

