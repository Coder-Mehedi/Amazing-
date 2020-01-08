<?php 
require_once( '../../../../wp-load.php' );
$postID = $_POST['post_id'];
$user_id = $_POST['user_id'];

$check = get_post_meta(get_the_ID(), 'post_like_count', true);

// Post like count
function set_post_like($postID, $user_id) {
    $liked_meta_key = 'post_like_count';
    $liked = get_post_meta($postID, $liked_meta_key, true);
    $liked_arr = unserialize($liked);
        if($liked_arr['liked']) {
            $liked = array('user_id' => $user_id, 'post_id' => $postID, 'liked' =>false);
            $liked= serialize($liked);
            update_post_meta($postID, $liked_meta_key, $liked);
        } else {
            $liked = array('user_id' => $user_id, 'post_id' => $postID, 'liked' =>true);
            $liked= serialize($liked);
            update_post_meta($postID, $liked_meta_key, $liked);
        }
    // print_r($liked);
    echo json_encode(unserialize($liked));

}

if(isset($_POST['funcName'])) {
    if($_POST['funcName'] == 'set_post_like'){
        set_post_like($postID, $user_id);
    }
}
   // echo $check;   

function check_post_like($postID) {
    $liked_meta_key = 'post_like_count';
    $liked = get_post_meta($postID, $liked_meta_key, true);
    
}

function get_post_like($postID) {
    $liked_meta_key = 'post_like_count';
    $liked = get_post_meta($postID, $liked_meta_key, true);

    // print_r(json_encode(unserialize($liked)));
    echo json_encode(unserialize($liked));
}

if(isset($_POST['funcName'])) {
    if($_POST['funcName'] == 'get_post_like'){
        get_post_like($postID);
    }
}