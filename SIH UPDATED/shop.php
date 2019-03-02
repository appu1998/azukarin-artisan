<?php
session_start();
    $db = mysqli_connect('localhost', 'root', '', 'sih');
    $sql="select * from image";
    $result=mysqli_query($db,$sql);
    //while ($row = mysqli_fetch_array($result) ) {
          
   // }
    
?>
<!DOCTYPE html>
<html>
<head>

    <title>Our Products | Azukarin</title>
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="shop.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	
	<style>
	.container8 {
	padding-top: 30px;
	padding-left: 30px;
	padding-right: 30px;
	}
	</style>
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
          <a class="nav-link" href="test.php">Home
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
          <a class="nav-link" href="Sign In.html">Login/Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">My Profile</a>
        </li>
			
      </ul>
    </div>
  </div>
</nav>

            
  <center><h1 style="font-size:80px;padding-top: 50px">Our Products</h1></center>
<br><br>  
<!-- <center style=""><h3 class="" style="position:relative;"> Our Products </h3></center> -->
<div class="container8">
    
   
        <?php
        $sql='select * from image';
        $result=mysqli_query($db,$sql);
        while ($row = mysqli_fetch_array($result) ) {
        if($row['verified']==0){
          echo"
            
        <div class='col-md-3 col-sm-6' style='float:right'>
        <div class='card card-body h-100'>
            <div class='product-grid'>
                <div class='product-image'>
                    <a href=''>
                        <img class='img-responsive' src='$row[location]'>
                        
                </a>
                    </div>
                <div class='product-content'>
                    <h3 class='title'><a href='product.php?data=$row[product_name]'> $row[product_name]</a></h3>
                    <div class='price'>$row[product_cost]
                    </div>
                    
                    <div style='padding-bottom: 75px;'>
                    <button type='button' class='btn btn-outline-primary' style='float: left; padding-bottom: 10px;'> <a href=''>Add to Cart </a> </button>
                    <button type='button' class='btn btn-outline-primary' style='float: right; padding-bottom: 10px;'> <a href=''> Buy Now </a> </button>
                </div>
                </div>
            </div>
            </div>
        </div>";
        }
        else{
          echo"
            
        <div class='col-md-3 col-sm-6' style='float:right'>
        <div class='card card-body h-100'>
            <div class='product-grid'>
                <div class='product-image'>
                    <a href=''>
                        <img class='img-responsive' src='$row[location]'>
                        
                </a>
                    </div>
                <div class='product-content'>
                    <h3 class='title'><a href='product.php?data=$row[product_name]'> $row[product_name]</a></h3>
                    <div class='price'>$row[product_cost]
                    </div>
                    <div style='padding-bottom: 75px;'>
                    <img src='images/assured.jpg' style='width:30%; height: 30px;'>
                    <br>
                    <button type='button' class='btn btn-outline-primary' style='float: left; padding-bottom: 10px;'> <a href=''>Add to Cart </a> </button>
                    <button type='button' class='btn btn-outline-primary' style='float: right; padding-bottom: 10px;'> <a href=''> Buy Now </a> </button>
                </div>
                </div>
            </div>
            </div>
        </div>";

        }
        }
        ?>
		
		
	</div>
</div>
<br>
<br>
<br>

</body>
</html>
		
	