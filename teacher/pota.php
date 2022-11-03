<?php
include('database.php');

if (isset($_POST['wala'])) {
	$wala = $_POST['wala'];

	$query = mysqli_query($conn, "insert into zoom_meeting (title) values('$wala')");
}


?>
<form action="pota.php" method="POST">
	
	<input type="text" name="wala">
	<button type="submit" name="wala">wala
	</button>
</form>