<?php

$uId;
$name=$_COOKIE["username"];
try
{
	$dbh = new PDO('mysql:host=localhost:8889;dbname=Shop','patrick','password');
	$query="SELECT * FROM Users WHERE uName= :name";
	$statement=$dbh->prepare($query);
	$statement->execute(array(':name'=> $name));

	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($result as $output) 
{
	$uId= $output['id'];
}
}

catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=$_COOKIE["username"];
	$title=$_POST["title"];
	$post=$_POST["post"];
	// $id=$uId;
	getData($title,$post,$name,$uId);

}


function getData($title,$post,$name,$Id)
{
try
	{
	    $conn = new PDO("mysql:host=localhost:8889;dbname=Shop", 'patrick', 'password');

	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Posts (id, username,userID,title,post)
	    VALUES ('EMPTY', '$name' ,'$Id','$title','$post' )";

	    $conn->exec($sql);
	    // echo '<script type="text/javascript"> document.location = "login.php";</script>';

    }

catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
}









?>