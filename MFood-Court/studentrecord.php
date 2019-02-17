<?php
include("database/connection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Muet Food Court</title>

<link href="CSS/home.css" type="text/css" rel="stylesheet" />


</head>
<body>
<header>
<div>
<div class="header"> 
<img src="Images/logo.png" align="left" height="200px" width="220px" style="padding:10px;" />
<center><h1>MUET FOOD COURT</h1></center>

</div>
</div>

</header>
<div class="centerdiv">


  <?php
  if(isset($_SESSION['std_id']))
{
			
			$rollno=$_SESSION['std_id'];
	$queryselect="select * from std_data where std_id='".	$rollno."'";
	$result=mysql_query($queryselect);
		if(!$result)
			echo "error".$rollno;
	$getdata=mysql_fetch_assoc($result);
	$stname=$getdata['name'];
	$stroomno=$getdata['roomno'];
	$stamount=$getdata['amount'];
				

}



?>
<br><br>
<div>
<center><img src="Images/seedata.png" align="center" height="136" width="192" style="padding:10px;" /></center>
</div>


   <div class="SUBcenterdiv" >
  	<h1 align=center> Student Record  </h1><br>
    <?php
		if(isset($_SESSION['std_id']))
	{
		//if(empty($_POST['name']))
		{
	
	
    echo("<form method='post'>
    <table style='font-size:20px;'>
    	<tr> <td>Rollno: </td><td>
        <input type='text' name='rollno' value='$rollno'
         </td></tr>
		 <tr> <td>Name: </td><td>
        <input type='text' name='name' value='$stname'
         </td></tr>
		 <tr> <td>Room No: </td><td>
        <input type='text' name='roomno' value=$stroomno
         </td></tr>
		 <tr> <td>Balance : </td><td>
        <input type='text' name='amount' value=$stamount
         </td></tr>
		<tr> <td colspan=2 align=center>
    	<input type='submit' name='form' class='donebutton'  value='Update'></td></tr>
    </table>
 
   </form>
   ");
	} }
	if(isset($_POST['form']))
	{echo "<h1> Successfully Updated .. ... </h1>";
	 echo("<img src='dataimages/loader.gif' height=60 width=180 align='center' >");
		$stname=$_POST['name'];
	$stroomno=$_POST['roomno'];
	$stamount=$_POST['amount'];
	$rollno=$_POST['rollno'];
	
	$queryupdate="update std_data set std_id='$rollno',  name='$stname',  roomno='$stroomno' , amount=$stamount where std_id='".$rollno."'";
	
	$result=mysql_query($queryupdate);
	if(!$result)
			echo "error".mysql_error($conn);
	header("Refresh:1");
	}
    ?>
  
  </div>
		 <div align="right">
	<form method="post" align="right">
    <h3 style="color:#FF0000;">Set all amounts to 2000 </h3>
    <input type="submit" class="donebutton" value="Deposit 2000 RS." name='getd' title="All the Amounts set to 2000" >
    </form>
    </div>
    
<?php
	if(isset($_POST['getd']))
	{echo "<h1> Successfully Updated All set Deposit 2000.. ... </h1>";
	
		
	$stamount='2000';
	
	
	$queryupdate="update std_data set amount=$stamount ";
	
	$result=mysql_query($queryupdate);
	if(!$result)
			echo "error".mysql_error($conn);
	}
    ?>
   
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
