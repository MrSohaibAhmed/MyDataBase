<?php 
include_once './db.php';


$id=$_GET['hello'];

$sql = "DELETE  FROM users WHERE id='$id'";

$result = mysqli_query($con,$sql);

if($result){
    header("Location:index.php");
}else{
    echo "No deletion possible";
}



?>