<?php
include 'includes/session.php';

if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
	echo "<script>alert('please login first')</script>";
	echo "<script>location.href='index.php'</script>";
}
else
{
	
	$custID=$user["CustID"];
	$product=$_POST['product'];
	$quantity=$_POST['qtybutton'];
	$price=$_POST['price'];
	$total=$price*$quantity;


	$resID=$_POST['restaurantID'];
	$itemID=$_POST['itemID'];


	$query = "INSERT INTO cart (CustID,Product,ResID,ItemID,Quantity,Price,Total,PayStatus) VALUES ('$custID','$product','$resID','$itemID','$quantity','$price','$total','Unpaid')";
	$result = mysqli_query($conn,$query);

	if($result) {
		echo "<script>location.href='cart.php'</script>";
	}
	else{
		echo "Add failed";
	} 
}
?>