<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	getData($name,$pass);

}

function getData($name,$pass)
{
// echo $name; 
// echo $pass;
try
	{
		$conn = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt=$conn->prepare('SELECT * FROM Users WHERE uName = :name AND password = :pass');

		$stmt->execute(array('name'=>$name,'pass'=>$pass));

		if($stmt->fetch(PDO::FETCH_ASSOC) )
		{	
			setcookie("username", $name, time()+120000);
			// $arr=array();
			// array_push($arr,$name,$pass);
			// // echo $arr[0].$arr[1];
			// $_SESSION['my_session']=$arr;
			// echo "success";
			echo '<script type="text/javascript"> document.location = "home.php";</script>';

		}
		else
		{
			echo "Wrong Username or Password";
		}

	}
	catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
}