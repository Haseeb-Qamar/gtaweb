<?php

include 'connection.php';
 $var = $_GET['q'];
 $sql = "SELECT * FROM gta3 WHERE c_type ='$var'  ";
 $result = $conn->query($sql) or die($conn->error);
 echo "<table id='mytable'>
 <tr id='desc'>
 <th>CHEAT DESCRIPTION</th>
 <th>CHEAT CODE</th>
 <th>CHEAT CATEGORY</th>

 </tr>"

 ;
 while($row = $result->fetch_assoc()) {

     echo "

     <tr>

     <td>".$row['c_desc']."</td>
     <td>".$row['c_code']."</td>
     <td>".$row['c_type']."</td>



     </tr>



     ";

 }

echo '';
 ?>
