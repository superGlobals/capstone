<?php
include("database.php");

?>


	<form action="add_zoom_meeting.php" method="POST">
		<label>Title</label>
		<input type="text" name="title" placeholder="title">
		<br>
		<label>Meeting ID</label>
		<input type="text" name="meeting_id" placeholder="meeting_id">
		<br>
		<label>Meeting Password</label>
		<input type="password" name="meeting_password" placeholder="meeting_password">
		<br>
		<label>Class</label>
		 <select name="class" required>
				<option></option>
				<?php
	            $query = mysqli_query($conn,"select * from class order by class_id");
			    while($row = mysqli_fetch_array($query)){
												
				?>
				<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php } ?>
			</select>
		<br>
		<label>Description</label>
		<textarea name="description" placeholder="Description"></textarea>
		<br>
		<label>Start time</label>
		<input type="time" name="start_time">
		<br>
		<label>End Time</label>
		<input type="time" name="end_time">
		<br>
		<button type="submit" name="submit">Save</button>
		
	</form>

