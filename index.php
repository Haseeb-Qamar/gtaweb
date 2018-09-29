<?php include 'connection.php';
?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
  </head>
  <body>
<div class="container">
  <div class="row">

<div class="entries">
  <label for="">Enter Cheat Name: </label>
<input onfocusout="searchcode(this.value)" type="text" name="" id="">
</div>


  </div>
  <div class="row">
    <div class="searchresults">
<span id="test"></span>
    </div>

  </div>
</div>
<script type="text/javascript">
  function searchcode(value){

    var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
               document.getElementById('test').innerHTML = this.responseText;


}
           };

           xmlhttp.open("GET", "async.php?q=" + value, true);
           xmlhttp.send();
  }

</script>
  </body>
</html>
