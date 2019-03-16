<!DOCTYPE html>
<html lang="en">
<div class="bg">
<div class="container-fluid">
<?php

    include("./header.php");
    include("./database.php");
    include("./table.php");
    include("./gta3class.php");
    $dbo = database::getInstance();
    $dbo->connect('localhost','haseeb','haseeb','gta_web');
    $gta3 = new gta3();

?>
  <div class="container">
    <div class="text-center">
      <img src="assets/gta3.png" class="img-fluid myimg" alt="gta3">
    </div>
    <div class="contents">
        <?php $gta3->iterate(); ?>
    </div>
    <div class="count text-center">
      Number of Cheats:
      <?php $gta3->displayrecords(); ?>

    </div>
  </div>
</div>
</div>
<?php
    include("footer.php");
?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#test li:eq(1)").addClass("active");
        $(".contents").fadeIn("slow");
        $(".count").fadeIn(2000);
    })
</script>
</html>
