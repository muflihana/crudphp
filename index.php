<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
		<title>Home</title>
    </head>

<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
//print_r(mysqli_fetch_array($result));exit;
?>

<body>
<a href="add.html">Add New Data</a><br/><br/>
UPIL
	<table width='80%' border=0>
	<thead>
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
</thead>
<?php 
echo "upil";
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"user_pdf.php?id=$res[id]\">Pdf</a> | <a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";		
	}
	?>

	</table>
</body>
</html>
