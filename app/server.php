<?php
require_once __DIR__ . '/../database/database.php';

$filtered = [];
$allowed  = $_GET['genre'];
if (empty($allowed)) {
  $filtered = $dischi;
  // header('Content-Type: application/json');
  // echo json_encode($filtered);
}else if(!empty($allowed)){
  $filtered = array_filter($dischi, function($var){
    return ($var['genre']== $_GET['genre']);
  });
      // header('Content-Type: application/json');
      // echo json_encode($filtered);
}

?>
