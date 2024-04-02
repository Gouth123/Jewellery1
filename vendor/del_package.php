<?php  
include ('db_conn.php');
	$id=$_GET['id'];
	$sql=mysqli_query($con,"DELETE FROM Rings WHERE id='$id'") or die(mysqli_error($conn));
	if ($sql==true) 
		{
			echo'<script>alert("Deleted successfully");
			</script>';
      header('location:Rings.php');

		}
		else
		{
			echo'<script>alert("Failed");</script>';
      header('location:Rings.php');
		}
?>