<!-- CONFIGURATION -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die("Something Went Wrong");
}
?>