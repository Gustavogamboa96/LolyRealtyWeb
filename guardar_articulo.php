<?php
  
      $servername = "localhost";
      $username = "";
      $password = "";

    // Create MySQL connection
      $conn = mysqli_connect($servername, $username, $password, "lolyrealty");

      $titulo = $_POST['titulo'] ;
      $articulo = $_POST['articulo'] ;
      $path = basename($_FILES["fileToUpload"]["name"][0]) ;

      $target_file = "/var/www/html/lolyrealty.com/public_html/test1/youragent/articles_img/".$path;

      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][0], $target_file);

      $sql = "INSERT INTO articles (titulo, articulo, path) VALUES ('$titulo', '$articulo', 'articles_img/".$path."')";

      $result = $conn->query($sql);

      include("new_article_saved.html");
      

      header("refresh: 2 url =articles.php");

?>
