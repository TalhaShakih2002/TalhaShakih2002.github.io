
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="DisplayStyle.css">
	<title></title>
</head>
<body>
<?php
	include("..\CateringApp\connection.php");
	//date query
    $sql="SELECT DATE_FORMAT(Date, '%b %e, %Y') FROM cateringdata ORDER BY ID DESC LIMIT 0, 1;";
    $result = mysqli_query( $connection, $sql);
    $all =mysqli_fetch_assoc($result);
    echo $all["DATE_FORMAT(Date, '%b %e, %Y')"];
?>
<div class="outbox">
	<div id="show">
		<h1>Current Activity</h1>
		<?php  ?>
		<h1>Main Description</h1>
		<?php?>
		<h1>Caterer</h1>
		<?php?>
		<h1>Number of Attendees</h1>
		<?php?>
		<h1>...</h1>
	</div>
	<div id="selector">
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
		<div id="shrtcntt"></div>
	</div>


<img src="dshop-logo-small.png">

</div>
<?php
	include("C:\Users\Dshop\Desktop\maybexampp\htdocs\Iristestproject\connection.php");
    $sql = "SELECT * FROM iris;";
    $result = mysqli_query( $connection, $sql );
	?>
</body>
</html>