<?php
$con=mysqli_connect("localhost","root","","todo_db");
$id=$_GET["id"];
$q="DELETE FROM `todos` WHERE id=$id";
$r=mysqli_query($con,$q);

?>