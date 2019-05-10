<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="DisplayStyle.css">
	<link rel="stylesheet" href="globalStyle.css">
	<meta http-equiv="refresh" content="300">
<?php 
if(!isset($_GET['shrtNum'])){
  header('Location: ../CateringApp/display.php?shrtNum=0');
}
?>
</head>

<body>
<div class="header">
	  <div class="header-right">
	  		<a class="active" href="../CateringApp/Settings.php">Settings</a>
	  		<button value="Refresh Page" onClick="window.location.reload()">Refresh</button></br>
	  		<p id="dateTime"></p>
	  		<script> let d = new Date(); document.getElementById("dateTime").innerHTML ="Last Refreshed:"+ d;</script>
	</div>
</div>

<?php
	include("..\CateringApp\connection.php");
?>
<!-- Below is right sidebar for short description content -->
<div class="outbox">
	<div id="selector">
		<div class="shrtcntt shrtcntt0" onclick="replaceShow('0')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 0, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 0, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 0, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt1" onclick="replaceShow('1')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 1, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 1, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 1, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>

		</div>
		<div class="shrtcntt shrtcntt2" onclick="replaceShow('2')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 2, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 2, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 2, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt3" onclick="replaceShow('3')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 3, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 3, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 3, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt4" onclick="replaceShow('4')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 4, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 4, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 4, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt5" onclick="replaceShow('5')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 5, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 5, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 5, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt6" onclick="replaceShow('6')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 6, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 6, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 6, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt7" onclick="replaceShow('7')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 7, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 7, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 7, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
		<div class="shrtcntt shrtcntt8" onclick="replaceShow('8')">
			<?php
				echo"<h1>Date:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT 8, 1;");
		    	$allT =mysqli_fetch_assoc($resultT);
		    	echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
				echo"<h1>Time:</h1>";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 8, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
				echo " to ";
				$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT 8, 1;");
				$allT =mysqli_fetch_assoc($resultT);
				echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
			?>
		</div>
	</div>
<script type="text/javascript">
function replaceShow(shrtNum){
  	for (var i = 0; i < 9; i++) {
    	document.getElementsByClassName("shrtcntt"+i)[0].style.backgroundColor = "white";
  	}
	document.getElementsByClassName("shrtcntt"+shrtNum)[0].style.backgroundColor = "lightgrey";
	window.location.href = "../CateringApp/display.php?shrtNum="+shrtNum;
	return;
}
</script>
<!-- Below is main display -->
<?php
	$showNum = $_GET['shrtNum'];
	$all=mysqli_fetch_assoc(mysqli_query( $connection, "SELECT * FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;"));
?>

<div class="show">

	<div id="DateID">
		<h1>Date</h1>
		<?php
		    $resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
		    $allT =mysqli_fetch_assoc($resultT);
		    echo $allT["DATE_FORMAT(Date, '%b %e, %Y')"];
		?>
</div>
	<div id="TimeID">
		<h1>Time(start to end)</h1>
		<?php
			$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(StartTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
			$allT =mysqli_fetch_assoc($resultT);
			echo $allT["DATE_FORMAT(StartTime, '%h:%i %p')"];
			echo " to ";
			$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
			$allT =mysqli_fetch_assoc($resultT);
			echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
    ?>
</div>
	<div id="dTimeID">
		<h1>Delivery Time</h1>
	<?php
		$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
		$allT =mysqli_fetch_assoc($resultT);
		echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
	?>
</div>
	<div id="MBreakID">
		<h1>Morning Break</h1>
		<?php
			$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
			$allT =mysqli_fetch_assoc($resultT);
			echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
		?>
</div>
<div id="ABreakID">
	<h1>Afternoon Break</h1>
	<?php
		$resultT = mysqli_query( $connection, "SELECT DATE_FORMAT(EndTime, '%h:%i %p') FROM cateringdata ORDER BY date DESC LIMIT $showNum, 1;");
		$allT =mysqli_fetch_assoc($resultT);
		echo $allT["DATE_FORMAT(EndTime, '%h:%i %p')"];
	?>
	</div>
	<div id="RoomID">
		<h1>Room</h1>
		<?php
			echo $all["Room"];
		?>
	</div>
	<div id="FloorID">
		<h1>Floor</h1>
		<?php
			echo $all["Floor"];
		?>
</div>
	<div id="AttendeesID">
		<h1>Number of Attendees</h1>
		<?php
			echo $all["Attendees"]. " people";
		?>
</div>
	<div id="PurposeID">
		<h1>Purpose</h1>
		<?php
			echo $all["Purpose"];
		?>
</div>
	<div id="RestrictionsID">
		<h1>Restrictions</h1>
		<?php
			echo $all["Restrictions"];
		?>
</div>
	<div id="HotColdID">
		<h1>Hot/Cold</h1>
		<?php
			echo $all["HotCold"];
		?>
</div>
	<div id="DrinksID">
		<h1>Drinks</h1>
		<?php
			echo $all["Drinks"];
		?>
</div>
	<div id="VendorID">
		<h1>Vendor</h1>
		<?php
			echo $all["Vendor"];
		?>
</div>
	<div id="FoodID">
		<h1>Food</h1>
		<?php
			echo $all["Food"];
		?>
</div>
</div>
<img src="dshop-logo-small.png">
</div>


</body>
</html>
