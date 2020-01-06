<?php 

// Post like count
function set_post_like($postID) {
    $count_key = 'post_like_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
if(isset($_POST['functionName']) && isset($_POST['arguments'])){
    print_r('hmm');
}



//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);