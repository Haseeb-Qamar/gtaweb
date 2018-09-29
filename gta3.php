<?php include 'connection.php';
?>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
  </head>
  <body

style="

background-image: url(gta3.png);
background-repeat: no-repeat;
background-position: 50% 40%; 



"

  >
<div class="container">
  <div class="row">


  </div>
  <div class="row">
    <div class="searchresults">
      <?php

$query = 'SELECT * FROM gta3';
$result = $conn->query($query) or die($conn->error);;

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
    </div>

  </div>
</div>
  </body>
</html>
