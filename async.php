<?php

include 'connection.php';
 $var = $_GET['q'];
 $search = $_GET['query'];
 echo $search;
 if ($search =='category') {
   $sql = "SELECT * FROM gta3 WHERE c_type LIKE '{$var}%'  ";
 }elseif ($search == 'desc') {
   $sql = "SELECT * FROM gta3 WHERE c_desc LIKE '%{$var}%'  ";
 }

 $result = $conn->query($sql) or die($conn->error);
 echo "<table id='mytable'>
 <tr id='desc'>
 <th>CHEAT DESCRIPTION</th>
 <th>CHEAT CODE</th>
 <th>CHEAT CATEGORY</th>
 <th>GAME</th>

 </tr>"

 ;
 if ($var != '') {
   $rowcount=mysqli_num_rows($result);
  if ($rowcount > 0) {
    while($row = $result->fetch_assoc()) {

        echo "

        <tr>

        <td>".$row['c_desc']."</td>
        <td>".$row['c_code']."</td>
        <td>".$row['c_type']."</td>
        <td>".$row['game']."</td>



        </tr>



        ";

    }
  }else{
    // echo "0asda";
  }


  // echo $rowcount;
 }else {
   echo "empty";
 }

 ?>
