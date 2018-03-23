<?php 
$pageTitle = 'Home';

include("includes/header.html.php"); 

?>

<link href="css/slideShow.css" type="text/css" rel="stylesheet">
<script src="javascript/slideShow.js"></script>

  <section>
    <article class="left_article">
      <h3>Know Your Famous Landmarks</h3>
      <p>Know your places around the globe. Someday when you make a ton of dang money take your mommma, take your dadda, take your brotha, take your sista, take your ahty, take your acle, take your niesy and nefew, and travel to these picturesque destinations around the WORLD. Take a look at these places to see if you can learn a few things and take a quiz. You can win a prize. Sometime in the near future :D</p>
    </article>
  </section>
  </div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/MachuPiccu3.jpg" alt="" width="1000" height="500" class="thumbnail"/>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/MountRushmore3.jpg" alt="" width="1000" height="500" class="thumbnail"/>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/SagradaFamilia4.jpg" alt="" width="1000" height="500" class="thumbnail"/>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/SheikhZayed4.jpg" alt="" width="1000" height="500" class="thumbnail"/>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Uluru3.jpg" alt="" width="1000" height="500" class="thumbnail"/>
  <div class="text"></div>
</div>

<a class="prev" onClick="plusSlides(-1)">&#10094;</a>
<a class="next" onClick="plusSlides(1)">&#10095;</a>
<p>This modal is taken from w3schools, only to demonstrate modal design ideas</p>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span> 
  <span class="dot" onClick="currentSlide(2)"></span> 
  <span class="dot" onClick="currentSlide(3)"></span> 
  <span class="dot" onClick="currentSlide(4)"></span> 
  <span class="dot" onClick="currentSlide(5)"></span> 
</div>


<?php include('includes/footer.html.php'); ?>
