<?php 

include("config.php");

	if(isset($_POST['signup'])) {
		
		try{
			echo "ok";
			if(empty($_POST['user'])){
				throw new Exception("Username can't be empty?");
			}
			if(empty($_POST['roll'])){
				throw new Exception("Roll can't be empty?");
			}
			if(empty($_POST['pass'])){
				throw new Exception("Password can't be empty?");
			}

				$result = mysql_query("insert into login_table (roll, username, password) values('$_POST[roll]', '$_POST[user]', '$_POST[pass]' ");

					header('location: index.php');
					// if ($result){
					// 	header('location: index.php');
					// }

				

		}
		catch(Exception $e){
			$error_message = $e->getMessage();
		}

	}

 ?>


<!DOCTYPE html>
<html >
  <head>
  	<title>Sign Up</title>
  	<link rel="stylesheet" href="css/style.css">
  	<style>
	  	.nas{
	  		color: red;
	  	}
  	</style>
  </head>

  <body>
  <div class="containe">

	<h3><a href="index.php">Home</a></h3>
	<div class="login-card">
	    <h1>Sign Up</h1><br>

<div class="nas">
<p>
		    <?php 
		    	if(isset($error_message)){ 
		    		echo $error_message; 
		    	}

		    ?>
</p>
	</div>
		<form action="" method="POST">

		    <input type="text" name="user" placeholder="Username Here">
		    <input type="text" name="roll" placeholder="Roll Here">
		    <input type="password" name="pass" placeholder="Enter Password">

		    <input type="submit" name="signup" class="login login-submit" value="Sign Up">

		</form>
	    
		<!-- <div class="login-help">
			<a href="#">Register</a> . <a href="#">Forgot Password</a>
		</div> -->

	</div> 

  </div>
  </body>
</html>

