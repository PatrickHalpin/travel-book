<?php

$posts=array();
$titles=array();
$arrL=0;
$uId=1;
$str;

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
		$str="images/".$uId.".jpg";
		if (!file_exists($str)) 
		{
			$str="images/uk.jpg";
		}
	}
}
catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

//////////////////////////////////////////////////////////////////////  
$dbh = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');
$query="SELECT title, post FROM Posts WHERE userID=".$uId;
$data = $dbh->query($query);
$result = $data->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $output) 
{
	$res= $output['title'];
	$res2= $output['post'];
	array_push($titles,$res);
	array_push($posts,$res2);
	
	$arrL=count($posts);
}



?>