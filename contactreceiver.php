<?php

$servername = "localhost";
$username = "";
$password = "";

// Create MySQL connection
$conn = mysqli_connect($servername, $username, $password, "lolyrealty");


if(isset($_POST['email']) && isset($_POST['name'])){
  $name = $_POST['name'];
  $email = $_POST['email'];

  
  $sql = "insert into contacts (name, email) values ('$name', '$email')";
  $result = $conn->query($sql);

  unset($name);
  unset($email);
  
}else{
  $name = $_POST['name1'];
  $email = $_POST['email1'];

  
  $sql = "insert into contacts (name, email) values ('$name', '$email')";
  $result = $conn->query($sql);


  unset($name);
  unset($email);
}



// $name = '';
// $email = '';


?>