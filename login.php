<?php 

session_start();
if (isset($_SESSION['email'])) {
  header('location: index.php');
}


include_once './db.php';


?>

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<style>
body {
  font-family: 'Poppins', sans-serif; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  
  font-size: 1.5rem;
  background-color:#222222;
}

.set{
          border: 3px solid black;
          text-align:center;
          padding: 10px;
          color:blue;
          background-color:white;
          font-size:30px;
          /* width:50%; */

      }
.color{
    color:blue;
}      
      .h2{
        color:red;
      }
      input{
        width:400px;
        height:30px;
      }
      button{
        width: 100px;
        height: 30px;
      }

</style>

<div>
    <h2 class="h2">LOGIN </h2><hr>
   <form action="login.php" method="POST">
  <div class="mb-3 animate__animated animate__backInLeft form__group field">
    <label for="exampleInputEmail1" class="form-label color"><b>Email address</b></label><br>
    <input type="email" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div><br><br>
  <div class="mb-3  animate__animated animate__backInRight form__group field">
    <label for="exampleInputPassword1" class="form-label color"><b>Password</b></label><br>
    <input type="password" name="password" id="exampleInputPassword1">
  </div>

<br>
<br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 

</div>

<p style="color:white;">Donot have an account yet ! <a href="./signup.php">REGISTER</a></p>


<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $query = mysqli_query($con, $sql);

    // if (empty($email) || empty($name)) {
    //     $emailError = 'Enter your email';
    //     $NameError = 'Enter Your Name';
    // } else {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) { 
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
            }

            header('location:index.php');
        } else {
            echo 'No result found';
        }
    }
// }
?>