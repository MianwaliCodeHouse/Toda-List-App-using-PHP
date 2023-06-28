<?php
$db=mysqli_connect("localhost","root","","todo_db");
$id=$_GET['id'];
$msg=$_GET['msg'];

$q="UPDATE todos SET todo = '$msg' WHERE id = $id;";

$rq=mysqli_query($db,$q);

?>