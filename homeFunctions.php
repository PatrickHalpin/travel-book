<?php

$posts=array();
$titles=array();
$users=array();
$arrL=0;
$id=2;

$call;
$call2;

$dbh = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');
$query="SELECT title, post, username FROM Posts";

$data = $dbh->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	$res= $output['title'];
	$res2= $output['post'];
	$res3= $output['username'];
	array_push($titles,$res);
	array_push($posts,$res2);
	array_push($users,$res3);
	
	$arrL=count($posts);
}
$uId;
$name=$_COOKIE["username"];
try
{
	$dbh = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');
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
	getData($title,$post,$name,$uId);
	echo "<meta http-equiv='refresh' content='0'>";

}


function getData($title,$post,$name,$Id)
{
try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');

	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Posts (id, username,userID,title,post)
	    VALUES ('EMPTY', '$name' ,'$Id','$title','$post' )";

	    $conn->exec($sql);

    }

catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }
}






?>