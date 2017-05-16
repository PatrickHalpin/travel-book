<?php 
session_start();

include 'loginFunctions.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="style2.css?ts=<?=time()?>&quot" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.11.2.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
    
<title>Login</title>
</head>
<body>
<div id="header">
<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-12">
				</div>

				<div class="col-xs-12 col-md-12" >
				<img src="images/logo.png" id="logo">
				</div>

				<div class="col-xs-12 col-md-12">

				</div>
			</div>
	</div>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-12">
				</div>

				<div class="col-xs-12 col-md-12" >
				</div>

				<div class="col-xs-12 col-md-12">

				</div>
			</div>
	</div>

	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4">
				</div>

				<div class="col-xs-12 col-md-4" >
					<form method="post" id="input">  
  					Username<input type="text" name="name" id="inputText">
					<br>
					Password<input type="password" name="pass" id="inputText">
					<br>
					<input type="submit" name="submit" value="Login" id="submit">  
					</form>
<!-- 					<a href="register.php"> Not a user? Register</a>
 -->				</div>

				<div class="col-xs-12 col-md-4">

				</div>
			</div>
	</div>
    
</body>
    
    

</html>