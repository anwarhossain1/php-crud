<?php

$mysqli = new mysqli('localhost','root','root', 'crud') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){

    $name1 = $_POST['1stname'];
    $name2= $_POST['2ndname'];

    $mysqli->query("INSERT INTO data (1stname, 2ndname) VALUES ('$name1', '$name2')") or die($mysqli->error);

}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die(mysqli->error);
}
