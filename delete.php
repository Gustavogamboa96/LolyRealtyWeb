<?php

     $servername = "localhost";
     $username = "";
     $password = "";

    // Create MySQL connection
     $conn = mysqli_connect($servername, $username, $password, "lolyrealty");

     $listing_tid = $_GET['listing_tid'];
     $article_tid = $_GET['article_tid'];

     $var = 0;
     $relocation =null;

     if(empty($listing_tid)){
        $var = 2;
     }else{
        $var = 1;
     }

     switch($var){
        case 1:
		$sql = "DELETE FROM listings WHERE listing_tid = '$listing_tid'";
		$relocation = "portal.php";
		break;
	case 2: 
		$sql = "DELETE FROM articles WHERE article_tid = '$article_tid'";
		$relocation = "articles.php";
		break;


     }



     $result = $conn->query($sql);

     header("Location: ".$relocation."");
?>
