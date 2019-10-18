<?php

$servername = "localhost";
    $username = "";
    $password = "!";

    // Create MySQL connection
    $conn = mysqli_connect($servername, $username, $password, "lolyrealty");

    $username = $_POST["user_name"];
    $pwd = $_POST["password"];
    $date = date("Y-m-d H:i:s");

    $sql1 = "SELECT * FROM users LEFT JOIN passwords t2 ON users.user_tid = t2.user_tid WHERE t2.password = '$pwd' AND users.user_name ='$username'";

   $result1 = $conn->query($sql1);
   $row1 = $result1->fetch_assoc();
   $user_tid = $row1["user_tid"] ;


   if($result1->num_rows == 1 ){
      header("Location: portal.php");
     
   }else{
      include("wrong.html");
   }

?>
