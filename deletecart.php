<?php
include "includes/session.php";

$idURL = $_GET['id'];


$query = "DELETE FROM cart WHERE CartID=$idURL";

$result = mysqli_query($conn,$query);
if($result) 
{
		echo "<script>alert('Delete successful')</script>";
		echo "<script>location.href='cart.php'</script>"; 			
}
else 
{		        
    die("Delete failed");
}
?>