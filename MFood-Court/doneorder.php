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

  <div >
  <?php
  if(isset($_SESSION['totalorder']))
{
			$totalprice=$_SESSION['totalorder'];
			$stdamount=$_SESSION['price'];
			$amount=$stdamount-$totalprice;			
				
				//check amount
					if($amount <-500)
						{
							header("location:day.php");
break;
						}
				
				
			$rollno=$_SESSION['std_id'];
	$queryupdate="update std_data set amount=".$amount." where std_id='".$rollno."'";
	$result=mysql_query($queryupdate);
		if(!$result)
			echo "error".$rollno;
	echo "Updated";			

} ?>
   <div class="SUBcenterdiv" >
  	<h1 > Successfuly Done Order  </h1>
   <?php echo "<h2>  Ammount Deducted: ".$totalprice ."<br>".
	" From Account. ".$rollno ."<br>".
	" You have now : Rs. ".$amount ."</h2>"; ?> 
  </div>
  </div>



<form method="get">
    <input type="submit" class="button" value=" <- back" name='back'>
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
