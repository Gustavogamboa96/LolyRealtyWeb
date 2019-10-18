<?php

      $servername = "localhost";
      $username = "";
      $password = "";

    // Create MySQL connection
      $conn = mysqli_connect($servername, $username, $password, "lolyrealty");

      $address = $_POST['address'] ;
      $type1 = $_POST['type1'];
      $type = $_POST['type'] ;
      $price =$_POST['price'] ;
      $path = basename($_FILES["listing"]["name"][0]) ;
      $split = explode(".", $path);
      $name = $split[0] . rand() .".". $split[1];
      $bedrooms = $_POST['beds'] ;
      $bathrooms = $_POST['baths'];
      $squarefeet = $_POST['squarefeet'];
      $link = $_POST['mls'];

      $target_file = "/var/www/html/lolyrealty.com/public_html/test1/youragent/listings_img/".$path;

      move_uploaded_file($_FILES["listing"]["tmp_name"][0], $target_file);
      
      $sql = "INSERT INTO listings (address, type1, type, price, path, bedrooms, bathrooms, squarefeet, link) VALUES ('$address', '$type1', '$type', '$price', 'listings_img/".$path."', '$bedrooms', '$bathrooms', '$squarefeet', '$link')";

      $result = $conn->query($sql);
      //echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
      //exit;
      include("new_listing_saved.html");

      header("refresh: 2 url =portal.php");

?>
