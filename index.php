<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>STUDENT PORTAL</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
<style>
	  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }

  .bords{
  	width: 1000px;
  	height: 500px;
  	border: solid gray 2px;
  }
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
<div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">
      <img src="AISAT.png" class="left-block" alt="Logo" style="width:100px; border-radius: 50%;">
  	</a>
    </div>
		<div class="nav navbar-nav">
			<ul class="navbar-nav tab">
				<li class="nav-item"><a class="nav-link disabled" href="#">
        <?php 
				if (isset($_SESSION['useruid'])) {
					echo $_SESSION['useruid'];
				}
				?>    
        </a></li>
				<li class="nav-item"><a class="nav-link" href="#index">Home</a></li>
          <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About Us
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#galery">Galery</a>
        <a class="dropdown-item" href="#events">Events</a>
        <a class="dropdown-item" href="#location">Location</a>
        <a class="dropdown-item" href="#contacts">Contacts</a>
      </div>
    </li>
				<?php
				if (isset($_SESSION['useruid'])) {
					echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
					echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
				}
				else {
					echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log In</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>
</div>
<div id="index" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
<div class="container mt-3">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="aisatc.jpg" style="width:1100px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="AISAT3.jpg" style="width:1100px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="aisatinos.jpg" style="width:1100px; height: 500px;">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>
</div>

<div id="galery" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
    <center><h1>Galery</h1></center>
  <img src="aisatpe.png" class="float-left img-thumbnail" alt="Paris" width="400" height="400">
  <img src="aisatu.jpg" class="float-right img-thumbnail" alt="Paris" width="400" height="400"> 
  <img src="aisatu2.png" class="mx-auto d-block img-thumbnail" alt="Paris" width="400" height="400">
  <img src="aisatr.jpg" class="mx-auto float-left img-thumbnail" alt="Paris" width="400" height="400">
<img src="aisatb.jpg" class="mx-auto d-block img-thumbnail" alt="Paris" width="400" height="400">
   
</div>

<div id="events" class="container-fluid text-center" style="padding-top:70px;padding-bottom:70px">
<h1>Events</h1>
<center><p>Coming Soon</p></center>
<img src="aisatml.jpg" class="mx-auto d-block img-thumbnail col" alt="Paris" width="400" height="400">
</div>



<div id="location" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
  <center><h1>Our Location</h1></center>
  <div class="container mt-3">
  <center><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Show Location Address</button></center>
  <div id="demo" class="collapse">
    <p>Click photo to show location</p>
    <a href="https://www.google.com/maps/place/AISAT+College+-+QC/data=!3m1!4b1!4m2!3m1!1s0x3397b0665b371c63:0xd646231f67e75bd3"><img src="location.jpg" class="mx-auto d-block img-thumbnail" alt="Paris" width="1500" height="1500"></a>
    <br>
    <h4 class="text-center">Address: Aisat Bldg, Neopolitan Business Park
     Regalado Hi-way
     Novaliches, Quezon City
     Metro Manila
     Philippines</h4>
  </div>
</div>
</div>

<div id="contacts" class="container-fluid text-center" style="padding-top:70px;padding-bottom:70px">
  <h1>Call Us</h1>
  <p>Smart +639545123548</p>
  <p>Globe +639452398751</p>
  <p>TNT +639235487950</p>
  <p>TM +639451987568</p>
  <p>Telephone Num: 1915123</p>
</div>

<script>

    window.addEventListener('DOMContentLoaded', (event) => {
        jQuery('div#main-nav.navbar').css("background-color", "rgba(255, 255, 255, 0.2)");
        jQuery(window).scroll(function() {
            if (jQuery(window).scrollTop() > 0) {
                jQuery('div#main-nav.navbar').css("background-color", "#000");              
            } else {
                jQuery('div#main-nav.navbar').css("background-color", "rgba(255, 255, 255, 0.2)");
            }
        });
    }); 
	
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.on('click', function(event) {   

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        // - 70 is the offset/top margin
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 70
        }, 800, function() {

            // Add hash (#) to URL when done scrolling (default click behavior), without jumping to hash
            if (history.pushState) {
                history.pushState(null, null, hash); 
            } else {
                window.location.hash = hash;
            } 
        });
        return false;    
    } // End if
});

$(document).ready(function(){
  // Activate Carousel with a specified interval
  $("#myCarousel").carousel({interval: 1500});
        
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
</body>
</html>