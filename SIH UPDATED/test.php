<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'sih');
  $sql = "UPDATE counter SET visits = visits+1";
$db->query($sql);

$sql = "SELECT visits FROM counter";

$query = mysqli_query($db, $sql);
$rows = mysqli_num_rows($query);
$visits = $rows["visits"];

  if(isset($_SESSION['username'])){
    echo "<script type='text/javascript'>location.href = 'test-login.php';</script>";
  }
 // include_once 'index.html';
  //This file will be included once we have proper Box for it.ind
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 
  
  
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="test.css">
	
	<!-- Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
      <a class="navbar-brand" href="#"> <h4>Shilpakar</h4>      
      </a>
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
          <a class="nav-link" href="Top.html">Top Artists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cards.html">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Sign In.html">Login/Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">My Profile</a>
        </li>
        	<li class="nav-item">
        <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- Slideshow -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h2 class="w3-center">Hand Picked Art</h2>
<center>
<div class="w3-content w3-section" style="position:relative;width:100%;height:500px;">
  <img class="mySlides" src="http://www.hdnicewallpapers.com/Walls/Big/Abstract/Colorful_Texture_Art_Abstract_4K_Wallpaper.jpg" style="width:100%;height:500px;" >
  <img class="mySlides" src="http://hdqwalls.com/wallpapers/small-memory-lp.jpg" style="width:100%;height:500px;" >
  <img class="mySlides" src="https://images.wallpaperscraft.com/image/stains_abstract_dark_122921_1920x1200.jpg" style="width:100%;height:500px;" >
  </div>
  </div>
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
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="images/IMG_20171231_123900_HDR.jpg" alt="Card image cap">
                    <br>
					<br>
          <center>
                    <h4 class="card-title" style="text-align: center;">Mandira Sen</h4>
                    <p class="card-text" style="text-align: center;"> Expertise :Handicrafts, Painting, Sketching, Wall Art </p>
                    </center>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="Card image cap">
                    <br>
					<br>
          <center>
                    <h4 class="card-title" style="text-align: center;">Rahul Vasu</h4>
                    <p class="card-text" style="text-align: center;">Expertise :Art Installation, Calligraphy, Handicrafts, Painting, Sketching, Wall Art</p>
                    </center>   
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="Card image cap">
                    <br>
					<br>
                    <center>
                    <h4 class="card-title">Vini Sharma</h4>
                    <p class="card-text" >Expertise :Art Installation, Calligraphy, Fabric Art, Handicrafts, Murals, Painting and more..</p>
                    </center>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="Card image cap">
                    <br>
					<br>
                  <center>
                    <h4 class="card-title" style="text-align: center;">Kavita Thakur</h4>
                    <p class="card-text" style="text-align: center;">Expertise :Art Installation, Calligraphy, Handicrafts, Metal Art, Murals, Painting and more..</p>
                    </center>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <br>
  <button type="button" class="btn btn-outline-primary" style="float: right;"> <a href="Top.php"> View All </a> </button>
</section>
</div>

<div class="container" id="categories"> 
<section class="py-5">
   <h1 class="font-weight-light">Categories</h1>
    
<div class="container1">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="images\Paintings.jpg" alt="Card image cap">
                    <br>
					<br>
                    <center>
                    <h4 class="card-title" style="text-align: center;"> <a href="ategoryproduct.php?data123='PAINTINGS'">Paintings </a></h4>
                    <p class="card-text" style="text-align: center;">Devoted to Lynchburg’s exceptional artists and craftsman, the Art & Artisan’s Gallery showcases art created by Lynchburg natives as well as objects made by the people of Lynchburg. Fine examples of textiles, silver.....</p>
                    </center>
                    <br>
					</div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="images\HomeProduct.jpg" alt="Card image cap">
                    <br>
					<br>
                    <center>
                    <h4 class="card-title" style="text-align: center;"><a href="ategoryproduct.php?data123='HOMEPRODUCT'"> Home Products </a> </h4>
                    <p class="card-text" style="text-align: center;">Indian handicrafts industry is highly labor intensive, cottage based and decentralized industry. The industry is spread all over the country mainly in rural and urban areas. Most of the manufacturing units are located in rural..</p>
                    </center>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="images\GlassArt.jpg" alt="Card image cap">
                    <br>
					<br>
                    <center>
                    <h4 class="card-title" style="text-align: center;"> <a href="ategoryproduct.php?data123='GLASSWORK'"> Glass Art </a> </h4>
                    <p class="card-text" style="text-align: center;">Bring a brilliant new dimension to your room by incorporating hand crafted glass art. With pieces that are masterfully crafted by our talented community of artisans</p>
                    </center>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-block" style="height:400px;">
                    <img class="card-img-top img-fluid" src="images\jewelery.jpg" alt="Card image cap">
                    <br>
					<br>
                    <center>
                    <h4 class="card-title" style="text-align: center;"> <a href="ategoryproduct.php?data123='JEWELRY'">Jewelry </a> </h4>
                    <p class="card-text" style="text-align: center;">Jewelry have always been associated with elegance, class and exclusivity. From royals to high society divas, celebrities to actresses,jewelry has adorned the necks, wrists and ears of fashionable women..</p>
                    </center>
                    </div>
            </div>
        </div>
    </div>
  </div>
  <br>
  <button class="btn btn-outline-primary" style="float: right;"> <a href="cards.php"> Explore More </a> </button>
</section>
</div>


    <div class="container" id="products">
        <section class="py-5">
            <h1 class="font-weight-light">Trending Products</h1>

            <div class="container1">
                <div class="row">
                    <div class="col-sm-3" >
                        <div class="card" >
                            <div class="card-block" style="height:400px;">
                                <img style="width:100%;height:200px" class="card-img-top img-fluid" src="images\glasses.jpg " alt="Card image cap">
                                <br>
                                <br>
                                <center>
                                <h4 class="card-title"> <a href="HANDICRAFT1">Glass art </a></h4>
                                <p class="card-text">Art Deco is an elegant style of decorative art, design and architecture. It is characterized by the use of angular, symmetrical geometric forms.</p>
                                </center>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block" style="height:400px;">
                                <img style="width:100%;height:200px"class="card-img-top img-fluid" src="images\pot1.jpg" alt="Card image cap">
                                <br>
                                <br>
                                <center>
                                <h4 class="card-title"> <a href="#">Fancy POT </a> </h4>
                                <p class="card-text">Peach Double Shaded Pot Design Fancy Banarasi Silk Fabric per Metre.</p>
                                </center>  
                           </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div  class="card-block" style="height:400px;">
                                <img style="width:100%;height:200px" class="card-img-top img-fluid" src="images\art123.jpg" alt="Card image cap">
                                <br>
                                <br>
                                <center>
                                <h4 class="card-title"> <a href="#"> Free hand painting </a> </h4>
                                <p class="card-text">Free hand drawing is a method of sketching or drawing without using ... believe it can describe styles of art that are larger scale works such as graffiti painting.</p>
                                </center>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div  class="card-block" style="height:400px;">
                                <img style="width:100%;height:200px" class="card-img-top img-fluid" src="images\copper.jpg" alt="Card image cap">
                                <br>
                                <br>
                                <center>
                                <h4 class="card-title"> <a href="#"> Music set </a> </h4>
                                <p class="card-text">Lahıc copper craft is a traditional folk art of Lahıc, Ismailli in Azerbaijan. It includes the production of copper crockery and other products.</div>
                                </center>    
                          </div>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-outline-primary" style="float: right;"> <a href="shop.php"> Explore More </a> </button>
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
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 bg-dark text-white">Azukarin Team</h5>
          <p> Our online art gallery is dedicated to showcasing contemporary artists and their original art, while making it easier for the public to find them. Browse the online gallery for original art, then contact the artists or their galleries. Find art festivals, gallery shows, open studios and workshops.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Support</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Donate Us</a>
            </li>
            <li>
              <a href="about.html">About Us</a>
            </li>
            <li>
              <a href="enquiry.html">Enquiry</a>
            </li>
            <li>
              <a href="faq.html">FAQ</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

    


    <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> Team Azukarin</a>
    </div>


</footer>

	
</body>
</html>


  