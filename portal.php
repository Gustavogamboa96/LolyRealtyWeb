<!DOCTYPE html>
<html lang="en">
   <head>  
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   </head>
   <body>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Listings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="new_listing.html">Nuevo Listing</a>
</li>
 <li class="nav-item">
    <a class="nav-link" href="articles.php">Articulos</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="new_article.html">Nuevo Articulo</a>
</li>
</ul>
<br><br>


<?php

     $servername = "localhost";
     $username = "";
     $password = "";

    // Create MySQL connection
     $conn = mysqli_connect($servername, $username, $password, "lolyrealty");

     $sql = "SELECT * FROM listings" ;  

     $result = $conn->query($sql);

     while($row = $result->fetch_assoc()){
	 echo '<div class="row">';
	  echo '<div class="col-lg-3" data-aos="fade-up">';
	 echo '<a href="'.$row['link'].'"><img src="'.$row['path'].'" alt="Image placeholder" class="img-fluid rounded"> </a>';	
	 echo '<a href="delete.php?listing_tid='.$row['listing_tid'].'"><button type="button" name="listing_tid" class="btn btn-danger" onclick="return confirm(\'Estas segura de que quieres borrar este listing?\')"  >Remover</button></a>';
	 echo '</div>';
         echo '<div class="col-lg-5" data-aos="fade-up">';
         echo 'Address: ' . $row['address'] .'<br>' ;
         echo 'Type: ' . $row['type'].'<br>' ;
         echo 'Price: ' . $row['price'].'<br>' ;
         echo 'Bedrooms: ' . $row['bedrooms'].'<br>'  ;
         echo 'Bathrooms: ' . $row['bathrooms'].'<br>'  ;
         echo 'Square Ft: ' . $row['squarefeet'] .'<br>' ;
	 echo '</div> ';
	 echo '</div> <br><br> ';



      }

?>
		



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

