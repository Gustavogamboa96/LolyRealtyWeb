<!doctype html>
<html lang="en">
  <head>
    <title>YourAgent &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
<style>
img { 
	max-width: 100%;
	max-height: 100%;
	}
</style>
  </head>
  <body>
    
    <header class="site-header">
      <div class="container-fluid">
        <div class="row">
		<div class="col-4 site-logo" data-aos="fade"><img src="loly/loly-05.png" height="150" width="200"><a href="index.html"></a></img></div>
          <div class="col-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6">
                      <ul class="list-unstyled menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li class="active"><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 extra-info">
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <h3>Contact Info</h3>
                          <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                          <p>info@yourdomain.com</p>
                          <p>(+1) 435 3533</p>
                          
                        </div>
                        <div class="col-md-6">
                          <h3>Connect With Us</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay page-inside" style="background-image: url(img/iStock-590299316-small-dark.jpg)">
      <div class="container">
        <div class="row site-hero-inner align-items-center">
	  <div class="col-md-7 text-left mr-auto">

<?php
 $servername = "localhost";
$username = "";
$password = "";

// Create MySQL connection
$conn = mysqli_connect($servername, $username, $password, "lolyrealty");

$sql = "SELECT * FROM articles WHERE article_tid = ".$_GET['article_tid'];

$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo '<br><br><br>';
echo '<h1 class="heading" data-aos="fade-up">'.$row["titulo"].'</h1>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<!-- END section -->';

echo '<div class="col-12">';
echo '<br><br><br>';

echo '<div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up">';
echo '';
echo '<div class="media media-custom d-block mb-4" >';
echo '<a href="blog-single.php?article_tid='.$row["article_tid"].'" class="mb-4 d-block"><img src="'.$row["path"].'" alt="Image placeholder" class="img-fluid"></a>';
echo '<div class="media-body">';
echo '<span class="meta-post">'.$row["date"].'</span>';
echo '</div>';
echo '</div>';
echo '';
echo '</div>';
echo '<p align=center>'.$row["articulo"].'</p>';
echo '<br><br><br>';
echo '</div>';

?>
          <!-- END content -->
          <div class="col-md-4">
            <div class="row">

              <div class="col-md-11 ml-auto">

  

                
              

             

            </div>
            
          </div>
        </div>
    </section>
    
    
    <footer class="section footer-section bg-primary">
<style type="text/css">
               .footer-section { background: #231f20 !important; }
            </style>
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
            <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Sign up for our newsletter</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row bordertop pt-5">
          <p class="col-md-6 text-left">&copy; Copyright 2019. All Rights Reserved. Carefully crafted by <a href="https://colorlib.com/">Colorlib</a></p>
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
