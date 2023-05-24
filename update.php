<?php 

include_once './db.php';



if(isset($_POST["submit"])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];

    $sql3="UPDATE `users` SET `email`='$email',`password`='$password' WHERE id='$id'";

    $query3=mysqli_query($con,$sql3);


    if($query3){
        header("Location:index.php");
    }else{

        "sorry DEAR'$email' not inserted";
    }

}

?>