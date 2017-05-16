<?php 
session_start();

include 'signupFunctions.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="style2.css?ts=<?=time()?>&quot" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.11.2.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
    
<title>Sign up</title>
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
  					Email: <input type="text" name="email" id="inputText">
					  <br>
					  Username: <input type="text" name="name" id="inputText">
					  <br>
					  Password: <input type="text" name="pass" id="inputText">
					  <br>
					  <input type="submit" name="submit" value="Submit" id="submit"> 
<!-- 					<a href="register.php"> Not a user? Register</a>
 -->				</div>

				<div class="col-xs-12 col-md-4">

				</div>
			</div>
	</div>
    
</body>
    
    

</html>