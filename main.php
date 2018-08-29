<!DOCTYPE html>
<!---------- <?php include 'dbConnect.php'; ?> -------->
<html>

    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel = "stylesheet" href="css/slide.css">
        <link rel = "stylesheet" href="css/tour.css">
        <link rel = "stylesheet" href="css/gethint.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>
    
<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li class="active"><a href="main.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="flight.php">Flights</a></li>
        <li><a href="cruise.php">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
  <div class="center"></div>
  <div class="center copy">
    <input type="text" class="search" placeholder="Enter a country..." id="default" list="languages">

  <datalist id="languages">
    <option value="Thailand">
    <option value="Japan">
    <option value="China">
    <option value="Australia">
    <option value="Spain">
    <option value="Philipines">
    <option value="Italy">
    <option value="Greece">
  </datalist>

    <button class="button" onclick ="location.href='result.php'">Search</button>    
  </div>
</div>

    <script  src="js/gethint.js"></script>


<div id="tour">
  <section class="center">
    <h2>Popular Picks</h2>
    <p>Local and overseas travel deals<span class="sm-hidden">, flights, cruises, holiday packages and many more.</span></p>
  </section>
  <figure><a href = " ">
    <img src="img/bangkok.jpg" alt="Thailand - Bangkok for 6 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Thailand - Bangkok for 6 days&gt;</strong> 
        Special for group travelling, countless scenic spots with no extra cost.
      </div>
      <div>
        <em class="sat">Rating 87%</em>
        <span class="price">From € <strong>850</strong></span>
      </div>
    
    </figcaption></a>
  </figure>
  <figure>
    <a href = " ">
    <img src="img/maldives.jpg" alt="Maldives Island for 4 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Maldives Island for 4 days&gt;</strong> 
        Start from maldives breakfast, lunch, cruise and flight included.
      </div>
      <div>
        <em class="sat">Rating 91%</em>
        <span class="price">From € <strong>799</strong></span>
      </div>

    </figcaption></a>
  </figure>
  <figure>
    <a href = " ">
    <img src="img/beijing.jpg" alt="Beijing for 5 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Beijing for 5 days &gt;</strong> 
        Beautiful routes with all the wonderful scenery, flights included.
      </div>
      <div>
        <em class="sat">Rating 88%</em>
        <span class="price">From € <strong>1299</strong></span>
      </div>
      
    </figcaption></a>
  </figure>
  <figure>
    <a href = " ">
    <img src="img/tokyo.jpg" alt="Toyama-Osaka-Tokyo for 8 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Toyama-Osaka-Tokyo for 8 days&gt;</strong> 
        Enjoy the most authentic Japanese customs, food, drink and landscape.
      </div>
      <div>
        <em class="sat">Rating 96%</em>
        <span class="price">From € <strong>1498</strong></span>
      </div>
    </figcaption></a>
  </figure>
  <figure>
    <a href = " ">
    <img src="img/sydney.jpg" alt="Sydney for 7 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Sydney for 7 days&gt;</strong> 
        Sydney Opera House, National Parks, scuba diving, and golden beach are all here.
      </div>
      <div>
        <em class="sat">Rating 98%</em>
        <span class="price">From € <strong>1499</strong></span>
      </div>
      
    </figcaption></a>
  </figure>
  <figure>
    <a href = " ">
    <img src="img/bali.jpg" alt="Indonesia for 4 days">
    <figcaption>
      <div class="tour_title">
        <strong class="title">&lt;Indonesia for 4 days&gt;</strong> 
        Indonesia has a beautiful ethnical culture and scenary.
      </div>
      <div>
        <em class="sat">Rating 83%</em>
        <span class="price">From € <strong>699</strong></span>
      </div>
     
    </figcaption></a>
  </figure>
 <section class="center">
    <h2>More great deals</h2>
    
  </section>


<div class="slideshow-container">

<div class="mySlides fade">
  <a href = "package.html">
  <img src="img/slide1.jpg" style="height:400px; width:100%;"></a>
  </a>
</div>

<div class="mySlides fade">
  <a href = "register.html">
  <img src="img/slide2.jpg" style="height:400px; width:100%;">
  </a>
</div>

<div class="mySlides fade">
  <a href = "cruise.html">
  <img src="img/slide3.jpeg" style="height:400px; width:100%">
  </a>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>





 
   <footer id="footer">
  <div class="top sm-hidden">
    <div class="column left">
      <h2>About</h2>
      <hr>
      <ul>
        <li><a href ="about.html"> How many Countries? </a></li>
        <li><a href ="about.html"> Best for our guests</a></li>
        <li><a href ="package.html"> Package trips</a></li>
        <li><a href ="about.html"> Travel services</a></li>
      </ul>
    </div>
    <div class="column mid">
      <h2>JOIN US!</h2>
      <hr>
      <ul>
        <button onclick ="location.href='login.php'" class="button active" >Login</button>  
        <button onclick ="location.href='register.php'"class="button" >Register</button>
        <li><a href ="customer.php">My Profile</a></li>
        <li><a href ="mybooking.php">My Bookings</a></li>
      </ul>     
    </div>
    <div class="column right">
      <h2>Contact</h2>
      <hr>
      <ul>
        <li>Email: info@vaykaytravels.ie</li>
        <li>Phone: 01-2233432.</li>
        <li>Address: 44 Merrions Square, Dublin, Ireland.</li>
      </ul>     
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bottom">Copyright &copy; VayKay Travels 2018 | Travel Agency</div>
</footer>


</div>
  <!---<?php include('footer.php'); ?>-->
<!-- footer end -->
 
</body>
</html>