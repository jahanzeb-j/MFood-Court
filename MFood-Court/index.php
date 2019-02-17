<?php
session_start();

include('database/connection.php');
if(empty($_SESSION['username']))
header("location:login.php");


if(isset($_POST['monday']))
{
	$_SESSION['day']="monday";
	header("location:day.php");


}
if(isset($_POST['tuesday']))
{
	$_SESSION['day']="tuesday";
	header("location:day.php");
}
if(isset($_POST['wednesday']))
{
	$_SESSION['day']="wednesday";
	header("location:day.php");


}
if(isset($_POST['thursday']))
{
	$_SESSION['day']="thursday";
	header("location:day.php");
}	
if(isset($_POST['friday']))
{
	$_SESSION['day']="friday";
	header("location:day.php");


}
if(isset($_POST['saturday']))
{
	$_SESSION['day']="saturday";
	header("location:day.php");
}	
if(isset($_POST['sunday']))
{
	$_SESSION['day']="sunday";
	header("location:day.php");


}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Muet Food Court</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
<style>
html,body
	{ height:100%;}
	 </style>
<link href="CSS/home.css" type="text/css" rel="stylesheet" />
</head>
<body>
<header>
<div>
<div class="header">
<img src="Images/logo.png" align="left" height="200px" width="220px" />
<center><h1>  MUET FOOD COURT</h1></center>

</div>
</div>
<br>
<div class"bdiv">

<form method="POST" >
<input class="button" type="submit" name="monday" value="Monday">
</form>
<form method="POST" >
<input class="button" type="submit" name="tuesday" value="Tuesday">
</form>
<form method="POST" >
<input  class="button" type="submit" name="wednesday" value="Wednesday">
</form>
<form method="POST" >
<input class="button" type="submit" name="thursday" value="Thursday">
</form>
<form method="POST" >
<input class="button" type="submit" name="friday" value="Friday">
</form>
<form method="POST" >
<input class="button" type="submit" name="saturday" value="Saturday">
</form>
<form method="POST" >
<input class="button" type="submit" name="sunday" value="Sunday">
</form>
</div>
</header>

	
	<!----begin------Insert to your webpage where you want to display the slider-->
        <div id='hislider1' style=" max-width:2000px;  max-height:500px;height:200%; margin: 0 auto; alignment-baseline:middle;>
        	
        	<noscript>The slider is powered by <strong>Hi Slider</strong>, a easy jQuery image slider from <a target="_blank" href="hislider.com"></a></noscript><div class="hi-about-text" style="display:none">This jQuery slider was created with the free <a style="color:#FFF;" href="http://hislider.com" target="_blank">Hi Slider</a> for WordPress plugin,Joomla & Drupal Module from hislider.com.<br /><br /><a style="color:#FFF;" href="#" class="hi-about-ok">OK</a></div>
        </div>
      <!----end------Insert to your webpage where you want to display the slider-->
      
     <!----start get student -->
      
      <div class="fodiv"> 
      <div align=right style="padding:4px" >   
      <a href="insertrecord.php" ><input type="button" value="ADD New" class="donebutton" ></a>
      <a href="print.php" ><input type="button" value="Print" class="donebutton" ></a>

<a href="logout.php" ><input type="button" value="Logout" class="donebutton" ></a>
</div>
  
      <div class="inputrdiv" style="padding-top:20px;">
<form method="POST" >
<input type="text" name="rollno" class="inputr" placeholder="Enter rollno" >
<input type="submit" name="rolln" value="Get Student Data" class="donebutton" >
</form>

</div>
<?php
	if(isset($_POST['rolln'])) 
{
	$_SESSION['std_id']=strtoupper($_POST['rollno']);
			getdata();
		//	$_SESSION['std_id']=$_POST['rollno'];
		//echo "  roll no  ".$_SESSION['std_id'];
}


	function getdata(){
	
	$rollno=$_SESSION['std_id'];
	$queryget="select * from std_data where std_id='".strtoupper($_POST['rollno'])."'";
	$result=mysql_query($queryget);
	$getstudent=mysql_fetch_array($result);
	$name=$getstudent[1];
	$price=$getstudent[3];
	$_SESSION['name']=$name;
	$_SESSION['price']=$price;
	if(empty($name)) 
	echo "<h1 style='color:red;'> &nbsp; Not Registered </h1>";			
	else {
	echo "<h1 style='color:red;'>Name: $name  have Amaount: $price  </h1>";
	echo(" <form method='post'>
  <center>
  <input type='submit' name='seestd' value='See Student Record' class='donebutton'> </center>
</form> "); 
	
	}
	}
	if(isset($_POST["seestd"]))
		header("location:studentrecord.php");
	
?>

      </div>
      
      
      
      
    
      <footer>
     <?php
	 
	 	include('footer.php');
	 
	 ?> 
      </footer>
     
</body> 
</html>
