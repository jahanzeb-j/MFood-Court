<?php
session_start();

include("database/connection.php");

if(isset($_SESSION['username']))
	{
		header("location:index.php");
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Untitled Document</title>
</head>
<style>
body{
	background-image:url("Images/signin.jpg");	
	background-size:cover;
	}
	
	
	form{
		font-family:"Comic Sans MS", cursive;
		font-style:italic;
		font-style:bold;
		font-size:xx-large;
		color:#FF0000; 
		}
		.button
		{
			font-family:"Comic Sans MS", cursive;
			font-style:italic;
			background-color:#D20000;
			color:#FFFFFF;
			border-radius:50px;
		    width:150px;
            height:50px;
		}
		h2{
			font-family:"Comic Sans MS", cursive;
			font-style:italic; 
			color:#009F00;
			
			}
		
	</style>
<body >


	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center><h2><b>MUET FOOD COURT<b></h2></center>
<br/><br/><br/>
<center>
<form method="post">
<label for="name">Username: </label>
<input type="text" name="username" required/><br/>

<label for="pass">Password: </label>
<input type="password" name="password" required/><br/>
<input type="submit" name="signin"  value="Sign In" class="button">
</form>
<br/>
<br/>
</center>





<?php
	if(isset($_POST['signin']))
	{
		$pass=$_POST['password'];
		$usern=$_POST['username'];
		$query="select * from login where username='".$usern.
		"' and password='".$pass."'"; 
		$result=mysql_query($query);
		if( $result)
		{
			
		//echo "Successful <br>";
		}
		else
		echo "".mysql_error($conn);
		
		//check();
		
		$rowsget=mysql_fetch_row($result);
		if($rowsget==0)
		{
			$error="<center><p>Username is incorrect</center></p>";
			echo $error;
		}
		else{
		$_SESSION['username']=$rowsget[0];
		
		echo $_SESSION['username'];
	}
if(isset($_SESSION['username']))
	{
		header("location:index.php");
	}
	
	
}


?>


</body>
</html>