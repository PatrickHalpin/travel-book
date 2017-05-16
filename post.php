<?php 

include 'postFunctions.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.11.2.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   

<title>Travel Book-Post</title>
</head>
<body id="home">
<div>
<div class="container-fluid">
			<div class="row" id="nav">
				<div class="col-xs-4 col-md-4">
					<a href="home.php">Home</a>
				</div>

				<div class="col-xs-4 col-md-4">
					<a href="post.php">Post</a>
				</div>

				<div class="col-xs-4 col-md-4">
					<a href="Profile.php">Profile</a>
				</div>
			</div>
	</div>
	<div class="container-fluid">
			<div class="row" id="space">
				<div class="col-xs-12 col-md-12">
				</div>
			</div>
	</div>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-12">
				<form method="post" id="men">  
  					Title<input type="text" name="title" id="inputT">
					<br>
					Post<input type="text" name="post" id="inputP">
					<br>
					<input type="submit" name="submit" value="post" id="submit">  
					</form>
				</div>
			</div>
	</div>

</div>

    
</body>
    
    

</html>