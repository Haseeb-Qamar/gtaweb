<?php

include "connection.php";
if (isset($_GET['desc'])) {
  $description = $_GET['desc'];
}
if (isset($_GET['code'])) {
  $code = $_GET['code'];
}
if (isset($_GET['category'])) {
  $category = $_GET['category'];
}
if (isset($_GET['game'])) {
  $game = $_GET['game'];
}
echo $description;
echo $category;
echo $code;
echo $game;

$sql = "INSERT INTO $game(game, c_desc, c_code, c_type) values('$game','$description','$code','$category') ";
$result  = $conn->query($sql) or die($conn->error);

header("Location:index.php");

 ?>
