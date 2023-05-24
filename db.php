<?php 

$host="localhost";
$username="root";
$password="";
$db_name="form_data";


$con=mysqli_connect($host,$username,$password,$db_name);

if($con){
    echo "Connected successfully";
}else{
    echo "Connection failed";
}



?>