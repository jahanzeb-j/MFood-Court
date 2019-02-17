<?php
session_start();
if(isset($_POST['backin']))
			{
				unset($_SESSION["cart_item"]);
				unset($_SESSION["day"]);
				//header("location:index.php");
				header("Refresh:0");
			}


		if(empty($_SESSION['day']))
			header("location:index.php");
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
<img src="Images/logo.png" align="left" height="200px" width="220px" />
<center><h1 style="border-color:rgba(153,153,153,1);">MUET FOOD COURT</h1>
<p style="color:rgba(255,0,0,1)"> <?php echo  strtoupper($_SESSION["day"]); ?></p></center>
<h6 align="right"> <?php  echo date("d-m-Y"); ?> </h6>
</div>
</div>

</header>

<div class="centerdiv">
<?php

	$day=$_SESSION["day"];
	require_once("database/dbcontroller.php");
	$db_handle = new DBController();
	if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM $day WHERE name='" . $_GET["code"] . "'");

			$itemArray = array($productByCode[0]["name"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["name"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["name"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["name"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<link href="CSS/style.css" type="text/css" rel="stylesheet" />
<div align=right style="padding:4px" >   
<a href="logout.php" >
<input type="button" value="Logout" class="donebutton" align="right" >
</a>
</div>
<div class="inputrdiv" >
<form method="POST" >
	<input type="text" name="rollno" class="inputr" placeholder="Enter rollno" >
	<input type="submit" name="rolln" value="Get Student Data" class="donebutton" >
</form>
</div>
<?php

	if(isset($_POST['rolln'])) 
{ 
	$_SESSION['std_id']=strtoupper($_POST['rollno']);
	$rollno=strtoupper($_POST['rollno']);
			getdata();
}


	function getdata()
{
	$rollno=strtoupper($_SESSION['std_id']);
	$queryget="select * from std_data where std_id='".$rollno."'";
	$result=mysql_query($queryget);
	$getstudent=mysql_fetch_array($result);
	$name=$getstudent[1];
	$price=$getstudent[3];
	$_SESSION['name']=$name;
	$_SESSION['price']=$price;
	if(empty($name)) {
	echo "<h1 style='color:red;'> &nbsp; Not Registered </h1>";	
	unset($_SESSION['std_id']);
	
		}
	else {
	echo "<h1 style='color:red;'>  $name  have Amaount: $price  </h1>";
	
		if($price<=0 & $price> -500)
		echo "<h1 style='color:blue; align='center''> Your amount is not in Deposit </h1>";
		
		if($price<= -500) {
		echo "<h1 style='color:blue; align='center''> Sorry you can't Order </h1>";
		unset($_SESSION['std_id']);
		
		}
	
	echo(" <form method='post'>
  <center>
  <input type='submit' name='seestd' value=' See Student Record ' class='donebutton' > </center>
</form> "); 
	
	}
	}
	if(isset($_POST["seestd"]) & isset($_SESSION['std_id'])){
	
		header("location:studentrecord.php"); }
	
?>

<div id="shopping-cart">
<div class="txt-heading">Total Ordered <a id="btnEmpty" href="day.php?action=empty">Empty Cart</a></div>
<?php
		if(isset($_SESSION["cart_item"])){
			$item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
    <th><strong>Name</strong></th>
    <th><strong>Quantity</strong></th>
    <th><strong>Price</strong></th>
    <th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				
				<!--<td><?php echo $item["code"]; ?></td> -->
				<td><?php echo $item["quantity"]; ?></td>
				<td align="center"><?php echo "Rs.".$item["price"]; ?>/item</td>
				<td  align="right"><a href="day.php?action=remove&code=<?php echo $item["name"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		
?>

<tr>
	<td colspan="5" align=right><strong>Total:</strong> <?php echo "RS.".$item_total; ?></td>
</tr>
</tbody>
</table>
<form method="post">
  <center>
  <input type="submit" name="doneorder" value="DONE ORDER" class="donebutton"> </center>
</form>		
  <?php
	if(isset($_POST['doneorder']))
{		if(!empty($_SESSION['std_id'])) {
			$_SESSION['totalorder']=$item_total;
			//echo $item_total;
			header("location:doneorder.php");
}		else
			echo "<h1 style='color:red;'>Please Enter Student </h1>";
			

}
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Dishes</div>
<?php
	$product_array = $db_handle->runQuery("SELECT * FROM $day ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
?>
		<div class="product-item">
			<form method="post" action="day.php?action=add&code=<?php echo $product_array[$key]["name"]; ?>">
			<div class="product-image"><img class="product-image" src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "Rs. ".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
<?php
			}
	}
	echo "</div>";
?>
    <br>
   
    
   
<div>
 <form method="post">
  
<input class="donebutton" type="submit"  name="backin" value=" <- back">
  </form>
</div>
 <?php
			
	?>
    
</div>
</div>





	
      <footer>
     <?php
	 
	 	include('footer.php');
	 
	 ?> 
      </footer>
     
</body> 
</html>
