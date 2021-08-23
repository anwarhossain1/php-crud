<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

session_start();
$fetched1stName = "";
$fetched2ndName = "";
$update=false;
$id=0;

$mysqli = new mysqli('localhost','root','root', 'crud') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){

    $name1 = $_POST['1stname'];
    $name2= $_POST['2ndname'];

    $mysqli->query("INSERT INTO data (1stname, 2ndname) VALUES ('$name1', '$name2')") or die($mysqli->error());
    $_SESSION['message'] = "Record Has Been Added!";
    $_SESSION['msg_type'] = "success";
    header('location: index.php');

}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die(mysqli->error);
    $_SESSION['message'] = "Record Has Been Deleted!";
    $_SESSION['msg_type'] = "danger";
    header('location: index.php');
}

if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $update=true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    
    if(!empty($result)){
        $row = $result->fetch_array();
        $fetched1stName = $row['1stname'];
        $fetched2ndName = $row['2ndname'];
        //print_r($fetched1stName);

    }
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name1 = $_POST['1stname'];
    $name2= $_POST['2ndname'];
    $mysqli->query("UPDATE data set 1stname='$name1', 2ndname='$name2' WHERE id=$id") or die($mysqli->error());
    $update= false; 
    header('location: index.php');
    $_SESSION['message'] = "Record Has Been Updated!";
    $_SESSION['msg_type'] = "success";

}
