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

  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();  

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    $posts_arr['data'] = array();

    while($sum = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($sum);

      $post_item = array(
        'profile_id' => $profile_id,
        'post_id' => $post_id,
        'horoscope_id' => $horoscope_id,
        'caption' => $caption,
        'public' => $public,
        'likes_id' => $likes_id,
        'comments_id' => $comments_id,
        'user_id' => $user_id
      );

      // Push to "data"
       array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($post_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }