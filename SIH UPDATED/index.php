<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sih');
  if(isset($_SESSION['username'])){
    echo "<script type='text/javascript'>location.href = 'test-login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>

    <title>Home Page</title>

    <!---<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 -->
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="test.css">
	
	 Fontawesome CDN
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Human Welfare Association Varanasi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="test.html">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#Artists">Top Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop Products</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Sign In.html">Login/Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">My Profile</a>
        </li>
		 </ul>
    </div>
  </div>
</nav>

<!-- Slideshow -->

<h2 class="w3-center">Automatic Slideshow</h2>
<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images\ss1.jpg" style="width:150%" >
  <img class="mySlides" src="images\images (8).jpg" style="width:100%" >
  <img class="mySlides" src="images\images (7).jpg" style="width:100%" >
</div>
</center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<!-- <div class="example1">
<h3>Scrolling text... </h3>
</div> -->

<!-- Page Content -->

<div class="container" id="Artists">
<section class="py-5">
    <h1 class="font-weight-light"> Top Artists </h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="sih\parrot.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;">Manjiri Kanvinde</h4>
                    <p class="card-text" style="text-align: center;"> Expertise :Handicrafts, Painting, Sketching, Wall Art </p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;">Vinita Vasu</h4>
                    <p class="card-text" style="text-align: center;">Expertise :Art Installation, Calligraphy, Handicrafts, Painting, Sketching, Wall Art</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title">Vinu Sharma</h4>
                    <p class="card-text">Expertise :Art Installation, Calligraphy, Fabric Art, Handicrafts, Murals, Painting, Sketching, Wall Art</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;">Kawita Thakur</h4>
                    <p class="card-text" style="text-align: center;">Expertise :Art Installation, Calligraphy, Handicrafts, Metal Art, Murals, Painting, Sculpture, Sketching, Wall Art</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button type="button" class="btn btn-outline-primary" style="float: right;"> <a href="E:\SIH'\Top.html"> View All </a> </button>
</section>
</div>

<div class="container" id="categories"> 
<section class="py-5">
   <h1 class="font-weight-light">Categories</h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="images\Paintings.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;"> <a href="#"> Paintings </a></h4>
                    <p class="card-text" style="text-align: center;">Devoted to Lynchburg’s exceptional artists and craftsman, the Art & Artisan’s Gallery showcases art created by Lynchburg natives as well as objects made by the people of Lynchburg. Fine examples of textiles, silver, furniture, ceramics, and paintings can be found here.</p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="images\HomeProduct.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;"> <a href="#"> Handicrafts </a> </h4>
                    <p class="card-text" style="text-align: center;">Indian handicrafts industry is highly labor intensive, cottage based and decentralized industry. The industry is spread all over the country mainly in rural and urban areas. Most of the manufacturing units are located in rural and small towns, and there is huge market potential in all Indian cities and abroad</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="images\GlassArt.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;"> <a href="#"> Glass Art </a> </h4>
                    <p class="card-text" style="text-align: center;">Bring a brilliant new dimension to your room by incorporating hand crafted glass art. With pieces that are masterfully crafted by our talented community of artisans</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="images\jewelery.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title" style="text-align: center;"> <a href="#"> Jewelry </a> </h4>
                    <p class="card-text" style="text-align: center;">Jewelry have always been associated with elegance, class and exclusivity. From royals to high society divas, celebrities to actresses,jewelry has adorned the necks, wrists and ears of fashionable women across the world for many years.</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button class="btn btn-outline-primary" style="float: right;"> <a href="cards.html"> Explore More </a> </button>
</section>
</div>


<div class="container" id="products"> 
<section class="py-5">
   <h1 class="font-weight-light">Trending Products</h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a></h4>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in. 
                     Aliquam codeply mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block">
                    <img class="card-img-top img-fluid" src="sih\art3.jpg" alt="Card image cap">
                    <br>
					<br>
                    <h4 class="card-title"> <a href="#"> Card title </a> </h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <button class="btn btn-outline-primary" style="float: right;"> <a href="cards.html"> Explore More </a> </button>
</section>
</div>


<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left bg-dark text-white">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 bg-dark text-white">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
  <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Team Azukarin</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
	
</body>
</html>