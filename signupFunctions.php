<?php
$continue=true;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{	
	if (empty($_POST["email"]))
  {
    echo (" Email is required.");
    $continue=false;
    
  } 
  else
  {
  	$email = $_POST["email"];
  }
  if (empty($_POST["name"]))
  {
    echo(" Name is required.");
   $continue=false;
  } 
  else
  {
  	$name = $_POST["name"];
  }

if (empty($_POST["pass"]))
  {
    echo(" Name is required.");
  $continue=false;
  } 
  else
  {
  	$pass = $_POST["pass"];
  }
 
  if($continue==true)
  {
	reg($name,$pass,$email);
  }

}

function reg($name,$pass,$email)
{
	try
	{
	    $conn = new PDO('mysql:host=localhost;dbname=id159382_travel','id159382_patrick2','Path1311');

	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO Users (id, uName,password,email)
	    VALUES ('EMPTY', '$name' ,'$pass', '$email' )";

	    $conn->exec($sql);
	    echo '<script type="text/javascript"> document.location = "login.php";</script>';

    }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;
?>