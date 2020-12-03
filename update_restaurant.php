<?php
	include "includes/session.php";
	if (isset($_POST['update'])) {
		$name=$_POST['name'];
		$address=$_POST['address'];
		$pwd=$_POST['password'];
		$phone=$_POST['phone'];
		

		$sql1="UPDATE restaurant SET Name='$name', address='$address', Password='$pwd', phone_no='$phone'  WHERE Username='".$_SESSION['user']."'";
		$result1=$conn->query($sql1);
		$sql2="UPDATE restaurant SET Password='$pwd' WHERE Username='".$_SESSION['user']."'";
		$result2=$conn->query($sql2);
		if($result1===true && $result2===true)
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "restaurant_profile.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "restaurant_profile.php";
					</script>

<?php		}
	}
	elseif (isset($_POST['insert'])) {
		$sql="SELECT ResID FROM restaurant WHERE Username='".$_SESSION['user']."'";
	                                		$result=$conn->query($sql);
	                                		$row = $result->fetch_assoc();
		$ItemName=$_POST['ItemName'];
		$ItemDesc=$_POST['ItemDesc'];
		$categoty=$_POST['categoty'];
		$Price=$_POST['Price'];
		$sql="INSERT INTO item (ResID,ItemName,ItemDesc,category,Price,Status)
VALUES ('".$row["ResID"]."','$ItemName','$ItemDesc','$categoty','$Price','Available')";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Insert Successfully");
					window.location.href = "deletefood.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Insert Failed");
					window.location.href = "managefood.php";
					</script>

<?php		}

	}
	elseif (isset($_POST['updatefood'])) {
		$id=$_POST['updatefood'];
		$ItemName=$_POST['ItemName'];
		$ItemDesc=$_POST['ItemDesc'];
		$category=$_POST['category'];
		$Price=$_POST['Price'];
		$Status=$_POST['Status'];

		$sql="UPDATE item SET ItemName='$ItemName', ItemDesc='$ItemDesc', category='$category', Price='$Price', Status='$Status'  WHERE ItemID='$id'";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "deletefood.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "deletefood.php";
					</script>

<?php		}

	}
elseif (isset($_POST['updateprepared'])) {
		$id=$_POST['updateprepared'];
		$Status=$_POST['Status'];

		$sql="UPDATE orderdetail SET Status='$Status' WHERE OrderID='$id'";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "manageorder_res.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "manageorder_res.php";
					</script>

<?php		}

	}

?>