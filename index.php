<?php include 'connection.php';
?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
    </style>
  </head>
  <body>
<div class="container">
  <div class="row">

<div class="entries">
  <label for="">Search Cheat: </label>
<input onkeyup="searchcode(this.value)" type="text" name="" id="search">
<div class="text-center radios">
  Category
  <input type="radio" name="query" value="category" checked required>
  Effect
  <input type="radio" name="query" value="desc" required>
</div>
<div class="floater">
<i class="far fa-question-circle fa-2x q"></i>
<div class="help">
  <span id="floaterhelp">Categories:</span>
  <span id="floaterhelp">Weapon</span>
  <span id="floaterhelp">Health</span>
  <span id="floaterhelp">Pedestrian</span>
  <span id="floaterhelp">World</span>
  <span id="floaterhelp">Vehicle</span>
  <span id="floaterhelp">Spawn Vehicle</span>
  <span id="floaterhelp">Wanted Level</span>
</div>
</div>

</div>


  </div>
  <div class="row">
    <div class="searchresults">
      <table id='dtable'>
      <tr id='desc'>
      <th>CHEAT DESCRIPTION</th>
      <th>CHEAT CODE</th>
      <th>CHEAT CATEGORY</th>
      <th>GAME</th>

      </tr>
<span id="test"></span>
    </div>

  </div>
</div>
<script type="text/javascript">
  function searchcode(value){
    var search = document.getElementById('search').value;
    // if (search == '') {
    //   return;
    // }
    var category = document.querySelector('input[name="query"]:checked').value;
    // document.write(category);
    var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
               document.getElementById('test').innerHTML = this.responseText;
               document.getElementById('dtable').style.display='none';

}
           };

           xmlhttp.open("GET", "async.php?q=" + value +"&query=" +category , true);
           xmlhttp.send();
  }

</script>
  </body>
</html>
