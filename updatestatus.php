<?php
include "includes/session.php";

$idURL = $_GET['submit'];
$id=$user['CustID'];


$query = "UPDATE orderdetail SET Status='Received' WHERE CustID='$id' AND OrderID='$idURL'";
$result = mysqli_query($conn,$query);
if($result) 
	{
		echo "<script>alert('Update successful')</script>";
		echo "<script>location.href='orderstatus.php'</script>";     
	}
	else 
	{           
    die("Update failed");
	}

?>
