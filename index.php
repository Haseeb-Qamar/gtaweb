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
<!-- <div class="outer text-center">
  <div class="inner">
    <img src="assets/left.png" class="prev" alt="">
    <img src="assets/slide3.jpg" class="active" alt="">
    <img src="assets/slidevc.jpg"  alt="">
    <img src="assets/slide5.jpg"  alt="">
    <img src="assets/right.png" class="next" alt="">
  </div>
  </div> -->

  <div class="row">

    <div class="slidecontainer">
      <div class="box">

        <div class="slides img-fluid">
          <img src="assets/slide3.jpg" alt="">
        </div>
        <div class="slides img-fluid hidden">
          <img src="assets/slidevc.jpg" alt="">
        </div>
        <div class="slides img-fluid hidden">
          <img src="assets/slide4.jpg" alt="">
        </div>
        <div class="slides img-fluid hidden">
          <img src="assets/slide5.jpg" alt="">
        </div>
        <div class="marquee">
          <marquee direction="" width="292px" height="100px"><img src="assets/logoalphaS.png"></marquee>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
    include("footer.php");
    ?>
    <script type="text/javascript">
    var slideIndex = 0;
    showSlides();
      $(document).ready(function(){
        $("#test li:eq(0)").addClass("active");
        // document.write(screen.width);
      })
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1;}
          console.log(slideIndex);
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
</html>
