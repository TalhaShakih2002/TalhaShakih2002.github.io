<?php
	require "reqAdmin.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="globalStyle.css">
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>
<?php
	require 'loginSystemConn.php';
    $sql = "SELECT * FROM users;";
    $result = mysqli_query( $conn, $sql );
	echo "<table id='datatable'>";
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
	    echo "  <tr><th>ID</th><th>UID</th></tr>";
	    while($all =mysqli_fetch_assoc($result) ){
	        echo "<tr><td>" .$all['id'] . "</td><td>" .  $all['uid'] . "</td></tr>"; 
}
echo "</table>"; //Close the table in HTML
	}
	?>
	
	<form action="" method="post">
		<input type="number" name="id" placeholder="ID">
		<button type="submit">Delete</button>
	</form>

<?php
	$deleteID=$_POST['id']??'';
	$dbDelete = "DELETE FROM `users` WHERE `id` = $deleteID";
	mysqli_query( $conn, $dbDelete); 
?>
	<form action="admin.php" method="post">
		<button type="submit">Back</button>
	</form>
</body>
</html>

