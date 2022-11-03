<?php
include("database.php");


// $query = mysqli_query($conn,"select * from zoom_meeting_code");

// while ($result = mysqli_fetch_array($query)) {
// }
	
?>

<form action="add_zoom_meeting_code.php" method="POST">
	<input name="zoom_api_key" placeholder="ZOOM API KEY">
	<br>
	<input name="zoom_api_secret_key" placeholder="ZOOM API SECRET KEY">
	<br>
	<button type="submit" name="submit">save</button>
</form>


<!-- value="<?php echo $result['zoom_api_key']?>"
value="<?php echo $result['zoom_api_secret_key']?>" -->