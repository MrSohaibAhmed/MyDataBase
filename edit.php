
<style>
.input{
  height:50px;
  width:500px;
  font-size:40px;
  border:4px solid black;
}
button{
  height:50px;
  width:100px;
  background-color:black;
  color:white;
}
</style>
<?php 

include_once './db.php';

$id=$_GET['id'];
$sql="SELECT * FROM users WHERE id='$id'";
$query=mysqli_query($con,$sql);


?>                            


<?php
while($row=mysqli_fetch_assoc($query)){  ?>

<?php  echo "<h1>ATTENTION {$row['email']} </h1>  "  ?>



<h2>NOW INSERT YOUR DATA CAREFULLY !!!!!!</h2>
<form action="update.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input class="input" type="email" value='<?php 
    echo $row['email'] ?>' name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div><br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input class="input" type="text"  value='<?php 
    echo $row['password'] ?>'  name="password" class="form-control" id="exampleInputPassword1">
  </div><br>
  <div class="mb-3">
    <!-- <label for="exampleInputEmail1" class="form-label"><b> ID</b></label>    -->
    <input  class="input" type="hidden"  value='<?php 
    echo $row['ID'] ?>' " name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div><br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 



<?php   }  ?>