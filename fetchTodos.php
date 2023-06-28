<?php

$con = mysqli_connect("localhost", "root", "", "todo_db");
$q = "select * from todos ORDER BY id DESC;";
$r = mysqli_query($con, $q);

if (mysqli_num_rows($r) > 0) {

  while ($data = mysqli_fetch_assoc($r)) {
    $id = $data['id'];
    echo "<h3 class='todo'>";
    echo "<p id='update$id'>";
    echo $data['todo'];
    echo "</p>";
    echo "<div class='btns'>";
    echo "<button onclick='UpdateTodo($id , this)' class='update-btn'>Edit</button>";
    echo "<button onclick='DeleteTodo($id)' class='del-btn'>Delete</button>";
    echo "</div>";
    echo "</h3>";
  }
} else {
  echo "<h2> No Record Found !!!";
}
