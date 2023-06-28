


<?php
if(isset($_GET["todo"])){
$todo=$_GET["todo"];
  $con=mysqli_connect("localhost","root","","todo_db");
  $q="INSERT INTO `todos`(`todo`) VALUES ('$todo')";
  $r=mysqli_query($con,$q);
  echo "1";
}

?>