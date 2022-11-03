<?php
 include('../admin/database.php');
if(isset($_REQUEST['hdn_insert'])){
	$data = array();
$meeting_title=$_REQUEST['meeting_title'];
$meeting_code=$_REQUEST['meeting_code'];
$selector=$_REQUEST['selector'];
$description=$_REQUEST['description'];
$sql="insert into online_meeting values (NULL,'$meeting_title', '$meeting_code','$selector',NOW(),'$description')";
mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn))
{
	$data['status'] = 1;
	
} else {
	$data['status'] = 0;
}

echo json_encode($data);
}
?>