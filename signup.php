<?php 

session_start();

include_once './db.php';
include_once './insert.php';

?>


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

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
:root {
	--vs-primary: 29 92 255;
}
dialog {
	padding: 1rem 3rem;
	background: white;
	max-width: 400px;
	padding-top: 2rem;
	border-radius: 20px;
	border: 0;
	box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
	animation: fadeIn 1s ease both;
	&::backdrop {
		animation: fadeIn 1s ease both;
		background: rgb(255 255 255 / 40%);
		z-index: 2;
		backdrop-filter: blur(20px);
	}
	.x {
		filter: grayscale(1);
		border: none;
		background: none;
		position: absolute;
		top: 15px;
		right: 10px;
		transition: ease filter, transform 0.3s;
		cursor: pointer;
		transform-origin: center;
		&:hover {
			filter: grayscale(0);
			transform: scale(1.1);
		}
	}
	h2 {
		font-weight: 600;
		font-size: 2rem;
		padding-bottom: 1rem;
	}
	p {
		font-size: 1rem;
		line-height: 1.3rem;
		padding: 0.5rem 0;
		a {
			&:visited {
				color: rgb(var(--vs-primary));
			}
		}
	}
}

button.primary {
	display: inline-block;
	font-size: 0.8rem;
	color: #fff !important;
	background: rgb(var(--vs-primary) / 100%);
	padding: 13px 25px;
	border-radius: 17px;
	transition: background-color 0.1s ease;
	box-sizing: border-box;
	transition: all 0.25s ease;
	border: 0;
	cursor: pointer;
	box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
	&:hover {
		box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
		transform: translateY(-5px);
	}
}

@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
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
    <h2 class="h2">REGISTER </h2><hr>
   <form action="insert.php" method="POST">
  <div class="mb-3 animate__animated animate__backInLeft form__group field">
    <label for="exampleInputEmail1" class="form-label color"><b>Email address</b></label><br>
    <input type="email" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div><p class="h2">we will not share your information</p>
  <div class="mb-3  animate__animated animate__backInRight form__group field">
    <label for="exampleInputPassword1" class="form-label color"><b>Password</b></label><br>
    <input type="password" name="password" id="exampleInputPassword1">
  </div>

<br>
<br>
  <button onclick="window.dialog.showModal(); type="submit" name="submit"  class="btn btn-primary">SIGN UP </button>

<dialog id="dialog">
	<h2>U ARE SUCCESFULLY REGISTERED ! 🥳</h2>
	<!-- <p>A CSS-only modal based on the <a href="https://developer.mozilla.org/es/docs/Web/CSS/::backdrop" target="_blank">::backdrop</a> pseudo-class. Hope you find it helpful.</p> -->
	<!-- <p>You can also change the styles of the <code>::backdrop</code> from the CSS.</p> -->
	<button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
</dialog>
  
</form> 







