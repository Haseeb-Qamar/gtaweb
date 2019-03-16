<?php

$host = "localhost";
$user = "haseeb";
$pass = "haseeb";
$db = "gta_web";

$sql = "SELECT * FROM gta3";
$conn = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($conn, $sql);
$response = array();
while($row = mysqli_fetch_assoc($result)){
array_push($response, array("info"=>$row['info'],"type"=>$row['type'],"code"=>$row['code']));

}
echo json_encode(array("server_response"=>$response));
mysqli_close($conn);
?>
