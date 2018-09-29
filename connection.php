<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$conn = new mysqli('localhost','root','haseeb','gta');
if ($conn->connect_error) {
  die("<div class='alert alert-danger'>ERROR CONNECTING TO DB!</div>". $conn->connection_error);
}

 ?>
