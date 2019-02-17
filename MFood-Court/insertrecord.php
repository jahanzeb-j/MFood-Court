<?php
include("database/connection.php");
session_start();




?>
<!DOCTYPE html>
<html>
<head>
	<title>Muet Food Court</title>

<link href="CSS/home.css" type="text/css" rel="stylesheet" />
<style>
*{
padding:0px;
margin:0px;

}
</style>

</head>
<body>
<header>
<div>
<div class="header">
<img src="Images/logo.png" align="left" height="200px" width="220px" style="padding:10px;" />
<center><h1>MUET FOOD COURT</h1></center>

</div>
</div>
<div class"bdiv">

</div>
</header>
<div class="centerdiv">

<br><br>
<div>
<center><img src="Images/insert.png" align="center" height="100px" width="100px" style="padding:10px;" /></center>
</div>
   <div class="SUBcenterdiv" >
  	<h1 align=center> Insert New Record  </h1><br>
  <form method='post'>
    <table style='font-size:20px;'>
    	<tr> <td>Rollno: </td><td>
        <input type='text' name='rollno' required>
         </td></tr>
		 <tr> <td>Name: </td><td>
        <input type='text' name='name' required>
         </td></tr>
		 <tr> <td>Room No: </td><td>
        <input type='text' name='roomno' required>
         </td></tr>
		 <tr> <td>Balance : </td><td>
        <input type='text' name='amount' required>
         </td></tr>
		<tr> <td colspan=2 align=center>
    	<input type='submit' name='insert' value='Insert' class="donebutton" ></td></tr>
    </table>
 
   </form>
   
   
   <?php
   	if(isset($_POST['insert']))
	{echo "<h1> Successfully Inserted .. ... </h1>";
	 echo("<img src='dataimages/loader.gif' height=60 width=180 align='center' >");
	 
		$stname=$_POST['name'];
		$stroomno=$_POST['roomno'];
		$stamount=$_POST['amount'];
		$rollno=strtoupper($_POST['rollno']);
	
	$queryupdate="insert into std_data (std_id,name,roomno,amount) VALUES ('$rollno','$stname','$stroomno',$stamount)";
	
	$result=mysql_query($queryupdate);
	if(!$result)
			echo "error".mysql_error($conn);
	header("Refresh:1");
	}
    ?>
  
  
  
  </div>











<form method="get">
    <input type="submit" class="donebutton" value=" <- back" name='back'>
    </form>
    
    <?php
			if(isset($_GET['back']))
			{
				unset($_SESSION["std_id"]);
				unset($_SESSION["cart_item"]);
				header("location:day.php");
			}
			?>


</div>



 
      <footer>
     <?php
	 
	 	include('footer.php');
	 
	 ?> 
      </footer>
     

 
</BODY>
</HTML>
