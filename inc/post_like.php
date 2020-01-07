<?php 
require_once( '../../../../wp-load.php' );
$postID = $_POST['post_id'];


$check = get_post_meta(get_the_ID(), 'post_like_count', true);
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
}
if(isset($_POST['funcName'])) {
    if($_POST['funcName'] == 'set_post_like'){
        set_post_like($postID);
    }
}
   // echo $check;   



function get_post_like($postID) {
    $liked_meta_key = 'post_like_count';
    $liked = get_post_meta($postID, $liked_meta_key, true);
    echo $liked;
}

if(isset($_POST['funcName'])) {
    if($_POST['funcName'] == 'get_post_like'){
        get_post_like($postID);
    }
}