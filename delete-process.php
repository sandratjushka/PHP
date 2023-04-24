<?php
include_once 'database.php';

if(isset($_GET['Isikud_id']))
{	 
	$id = $_GET['Isikud_id'];
	$sql = "DELETE FROM ISIKUD WHERE Isikud_id = '$id'";
	if (mysqli_query($conn, $sql)) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	header("Location: index.php");
}
?>