<?php
    require "reqAdmin.php";
?>
<html>
<header>
    <link rel="stylesheet" href="globalStyle.css">
    <link rel="stylesheet" href="styletable.css">
</header>
<body>
<!--Burger icon that shows a dropdown to redirect to other pages-->
<div class="burgerTOP">
<div class="burger">
    <button onclick="dropFunction()" class="dropbtn"></button>
    <div id="dropMenu" class="menuContent">
        <a href="form.php">Form</a>
        <a href="showTable.php">Show Table</a>
        <a href="deleteRecord.php">Delete Record</a>
    </div>
</div>
<div class="burger"></div>
<div class="burger"></div>
</div>
<!--JS function that show/hide the dropdown menu form the burger icon-->
<script>function dropFunction(){document.getElementById("dropMenu").classList.toggle("show");}</script>

<div class="formTOP">
<!--Input box for deleting records-->
<form action="" method="POST">
    <input type= "number" name="ID" placeholder="ID">
    <button type="submit">Delete</button>
</form>
</div>

<?php
//Prints out table for record viewing.
	require 'connection.php';
    $sql = "SELECT * FROM cateringdata;";
    $result = mysqli_query( $connection, $sql );
    echo "<table id='datatable'>";
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
	    echo "  <tr><th>ID</th><th>Date</th><th>Start Time</th><th>End Time</th><th>Room</th><th>Delivery Time</th><th>Morning Break</th><th>Afternoon Break</th><th>Floor</th><th>Number of Attendees</th><th>Purpose</th><th>Restrictions</th><th>Hot or Cold</th><th>Drinks</th><th>Vendor</th><th>Food</th></tr>";
	    while($all =mysqli_fetch_assoc($result) ){
	        echo "<tr><td>" .$all['ID'] . "</td><td>" .  $all['Date'] . "</td><td>" . $all['StartTime'] . "</td><td>". $all['EndTime'] . "</td><td>". $all['Room'] . "</td><td>". $all['DeliveryTime'] . "</td><td>". $all['MorningBreak'] . "</td><td>" .$all['AfternoonBreak'] . "</td><td>".$all['Floor'] . "</td><td>".$all['Attendees'] . "</td><td>".$all['Purpose'] . "</td><td>".$all['Restrictions'] . "</td><td>".$all['HotCold'] . "</td><td>".$all['Drinks'] . "</td><td>". $all['Vendor'] . "</td><td>". $all['Food'] . "</td></tr>"; 
}
echo "</table>"; 
	}
    //Gets the id for the record the admin wishes to delete.
	$deleteID=$_POST['ID']??'';
	$dbDelete = "DELETE FROM `cateringdata` WHERE `cateringdata`.`ID` = $deleteID";//DO NOT CHANGE QUOTATION MARKS. REMOVAL OF `` FOR '' RESULTS IN ERROR.
	mysqli_query( $connection, $dbDelete); 
?>
</body>
</html>