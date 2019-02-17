<?php

	include("database/connection.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUET FOOD COURT</title>
<script>
function printf()
{
	
		window.print() ;
		
}


</script>


</head>

<body>
 <p>
  <input type="button" value="Print" onclick="printf()" />
  <img src="Images/logo.png" align=left height="200px" width="220px" /></p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
<h1 "> Weekly  Report </h1>

<br />
<hr />
<?php

		echo "<table border='2' cellpadding='0' cellspacing='0' >";
		echo "<tr>";
				echo "<th>"."Student ID"."</th>";
				echo "<th>"."Name"."</th>";
				echo "<th>"."Rooom no"."</th>";
				echo "<th>"."Amount"."</th>";
				echo "</tr>";
				
				
	$sql = "SELECT * FROM std_data";
		$result = mysql_query($sql);
		
		if(mysql_num_rows($result) > 0) {
			//output each row
			while($row = mysql_fetch_assoc($result) ){
				echo "<tr>";
				echo "<td>".$row["std_id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["roomno"]."</td>";
				echo "<td>".$row["amount"]."</td>";
				echo "</tr>";
			}
		}
		else {
			echo "0 Results";
		}
			echo "</table >";
?>



</body>
</html>