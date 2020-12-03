<?php
include "includes/session.php";

$CartID=$_POST['CartID'];
$newquantity=$_POST['newquantity'];

if($newquantity == 0)
{
	echo "<script>alert('Please enter quantity')</script>";
	echo "<script>location.href='cart.php'</script>";  
}
else if($newquantity < 0)
{
	echo "<script>alert('Please enter positive value')</script>";
	echo "<script>location.href='cart.php'</script>";  

}
else{
	$query = "UPDATE cart SET Quantity=$newquantity, Total=(Price*$newquantity) WHERE CartID=$CartID";
	$result = mysqli_query($conn,$query);
	if($result) 
	{
		echo "<script>alert('Edit successful')</script>";
		echo "<script>location.href='cart.php'</script>";     
	}
	else 
	{           
    die("Update failed");
	}
}
?>
