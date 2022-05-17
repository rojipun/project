<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,
  Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../core/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  $post->post_id = isset($_GET['post_id']) ? $_GET['post_id'] : die()
  $post->read_single();

  $post_item = array(
    'profile_id' =>$post->profile_id,
    'post_id' =>$post->post_id,
    'horoscope_id'=>$post->horoscope_id,
    'caption' =>$post->caption,
    'public' =>$post->public,
    'likes_id'=>$post->likes_id,
    'comments_id'=>$post->comments_id,
    'user_id' =>$post->user_id
  );
  
  //json
  print_r(json_encode($post_arr));