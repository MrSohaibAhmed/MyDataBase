<?php 


session_start();
if(!isset($_SESSION['email'])){
  header("Location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    
</head>
<style>
body{
  background-color:rgb( 176, 196, 222);
  padding:18px;
}
.border{
  border:6px solid black;
  font-size:30px;
}
a {
        border: none;
        padding: 8px 8px;
        font-size: 20px;
        position: relative;
        background: black;
        color: #ffa500;
        text-transform: uppercase;
        border: 3px solid #ffa500;
        cursor: pointer;
        transition: all 0.7s;
        overflow: hidden;
        border-radius: 50px;
        margin:10px;
      }

      a:hover {
        color: white;
      }
      span {
        transition: all 0.7s;
        z-index: -1;
      }

      a .first {
        content: "";
        position: absolute;
        right: 100%;
        top: 0;
        width: 25%;
        height: 100%;
        background: #ffa500;
      }

      a:hover .first {
        top: 0;
        right: 0;
      }
      a .second {
        content: "";
        position: absolute;
        left: 25%;
        top: -100%;
        height: 100%;
        width: 25%;
        background: #ffa500;
      }

      a:hover .second {
        top: 0;
        left: 50%;
      }

      a .third {
        content: "";
        position: absolute;
        left: 50%;
        height: 100%;
        top: 100%;
        width: 25%;
        background: #ffa500;
      }

      a:hover .third {
        top: 0;
        left: 25%;
      }

      a .fourth {
        content: "";
        position: absolute;
        left: 100%;
        top: 0;
        height: 100%;
        width: 25%;
        background: #ffa500;
      }

      a:hover .fourth {
        top: 0;
        left: 0;
      }
      .set{
          border: 6px solid black;
          text-align:center;
          padding: 10px;
          color:blue;
          background-color:black;
          font-size:20px;

      }
      h2{
        color:red;
      }
</style>
<body >
  <h1><?php include_once 'db.php';
  ?></h1>


      <a href="./logout.php">LOGOUT</a>
      <br><br>
  <div class="set">
    <h2>USER'S DATA</h2><hr style="color:white;">
   <form action="insert.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" style="color:red" >We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b> ID</b></label>
    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 

</div>

<table>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>

        </tr>


<?php 
include_once './db.php';
include_once './insert.php';

$sql="SELECT * FROM users";

$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_assoc($result)){
  
// echo "<tr>ID</tr><td class='border'>$row[ID]</td><br>";
// echo "<tr>EMAIL</tr><td class='border'>$row[email]</td>";
// echo "<tr>PASSWORD</tr><td class='border'>$row[password]</td>";
echo "<tr>";
echo "<td class='border'>{$row['ID']}</td>";  
echo "<td class='border'>{$row['email']}</td>";
echo "<td class='border'>{$row['password']}</td>";
echo "<td><a class='button' href='delete.php?hello=$row[ID]'>DELETE</a></td>";
echo "<td><a class='button' href='edit.php?id=$row[ID]'>EDIT</a></td>";

echo "</tr>";
}   
?>



  



</table>
</body>
</html>