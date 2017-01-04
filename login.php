<!DOCTYPE html>
<html >
  <head>
  	<title>Log-in</title>
  	<link rel="stylesheet" href="css/style.css">
  </head>

  <body>
	  <div class="containe">
		<h3><a href="index.php">Home</a></h3>
		<div class="login-card">
		    <h1>Log-in</h1><br>

			<form action="indexhome.php" method="POST">
			    <input type="text" name="user" placeholder="Username Here">
			    <input type="password" name="pass" placeholder="Enter Password">
			    <input type="submit" name="login" class="login login-submit" value="login">
			</form>
		    
			<div class="login-help">
				<a href="#">Register</a> . <a href="#">Forgot Password</a>
			</div>

		</div> 

	  </div>
  </body>
</html>
