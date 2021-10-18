<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $st_class = $_POST['class'];
	 $st_school = $_POST['school'];
	 $sql = "INSERT INTO crud (first_name,last_name,st_class, st_school) VALUES ('$first_name','$last_name','$st_class','$st_school')";
	
     if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
        header('location:index.php');
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }

	 mysqli_close($conn);
}
?>