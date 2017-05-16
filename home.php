<?php 
if(!isset($_COOKIE['username'])) 
{
	$url="login.php";
	header('Location: ' . $url, false, 302);
  	exit;
}
include 'homeFunctions.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="style.css?ts=<?=time()?>&quot" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery-1.11.2.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   

<title>Travel Book-Home</title>
</head>
<body id="d">
<div class="container-fluid">
			<div class="row" id="sub2">

				<div class="col-xs-12 col-md-4">
				</div>

				<div class="col-xs-12 col-md-4">
					
				</div>

				<div class="col-xs-4 col-md-1">
				<a id="as" href="home.php">Home</a>
				</div>
				<div class="col-xs-4 col-md-1">
				<a id="a" href="Profile.php">Profile</a>
				</div>
				<div class="col-xs-4 col-md-1">
				<a id="a" href="logout.php">Logout</a>
				</div>

			</div>
	</div>

<div class="container-fluid">
			<div class="row" id="nav">

				<div class="col-xs-4 col-md-4">
<!-- 					<a id="as" href="home.php">Home</a><
 -->				
 				<h1>Home</h1>
 				</div>

				<div class="col-xs-4 col-md-4">
<!-- 					<a id="a" href="Profile.php">Profile</a>
 -->				</div>

				<div class="col-xs-4 col-md-4">
<!-- 				<a id="a" href="logout.php">Logout</a>
 -->				</div>

			</div>
	</div>
<!-- </div>	
 -->	<div class="container-fluid">
			<div class="row" id="space">
				<div class="col-xs-12 col-md-12">
				</div>
			</div>
		</div>

<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-3">
				</div>
				<div class="col-xs-12 col-md-6" id="t">
				<form method="post" id="men">  
  					Title<input type="text" name="title" id="inputT">
					<br>
					Post<textarea type="text" name="post" id="inputP"></textarea> 
					<br>
					<input type="submit" name="submit" value="submit" id="submit">  
					</form>
				</div>
				<div class="col-xs-12 col-md-3">
			</div>
			</div>
	</div>

	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-3">
				</div>
				<div class="col-xs-12 col-md-6" id="t">

				<?php 
				if ($arrL>0)
				{
				for ($i=$arrL; $i>0 ;$i--)
					{ ?>
						<h1 id="title"> <?php echo $titles[$i-1];?></h1>
						<p id="un"> by: <?php echo $users[$i-1];?></p>
						<p id="post"> <?php echo $posts[$i-1];?></p>
					<?php 
					}
				}	
					 ?>
				</div>
				<div class="col-xs-12 col-md-3">
			</div>
			</div>
	</div>


</div>

    
</body>
    
    

</html>