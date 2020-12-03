<?php
include "includes/session.php";



$paymentid = $_POST['paymentid'];
$id=$_POST['id'];
$userID=$user['CustID'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$time=date("h:i a");
$new_time = date("H:i:s", strtotime('+15 minutes'));


$query = "UPDATE orderdetail SET Status='Paid', DespatcherID='$id', Time='$time', ETA='$new_time' WHERE CustID='$userID' AND Status='Pending' ";
$result = mysqli_query($conn,$query);
if($result) 
	{
		echo "<script>alert('Despatcher selected successful')</script>";
		echo "<script>location.href='orderstatus.php'</script>";     
	}
	else 
	{           
    die("Update failed");
	}

?>
