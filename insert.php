<?php 
include_once './db.php' ;

if(isset($_POST["submit"])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];



    $sql2="INSERT INTO users(ID,email,password) VALUES('$id','$email' , '$password' )";
    $query2=mysqli_query($con,$sql2);

    if($query2){
        header("location:index.php");  

    }else{
        echo "not inserted";
    }

}


?>