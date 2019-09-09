<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="she";
	$conn = mysqli_connect($servername,$username,$password,$db);
			if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
	if (isset($_POST['submit'])) {
		$user_id = $_POST['user_id'];
		$time_stramp = $_POST['time_stramp'];
		$location = $_POST['location'];
		$activity = $_POST['activity'];
		$status = $_POST['status'];
		$sql = "INSERT INTO `emergency_request`(`user_id`, `time_stramp`, `location`, `activity`, `status`) VALUES ('$user_id','$time_stramp','$location','$activity','$status')";
		if (mysqli_query($conn,$sql)) {
				echo "New Record Inserted Sucessfully....";
			}
			else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);

	}
?>