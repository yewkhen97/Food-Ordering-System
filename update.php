<?php
	include "includes/session.php";
	if (isset($_POST['update'])) {
		$name=$_POST['name'];
		$address=$_POST['address'];
		$pwd=$_POST['password'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];

		$sql1="UPDATE customer SET Name='$name', Address='$address', Password='$pwd', phoneNum='$phone', email='$email'  WHERE Username='".$_SESSION['user']."'";
		$result1=$conn->query($sql1);
		$sql2="UPDATE user SET Password='$pwd' WHERE Username='".$_SESSION['user']."'";
		$result2=$conn->query($sql2);
		if($result1===true && $result2===true)
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "profile.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "profile.php";
					</script>

<?php		}
	}
	elseif (isset($_POST['delete'])) {
		$id=$_POST['delete'];
		
		$sql="DELETE FROM Voucher WHERE VoucherID='$id'";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Delete Successfully");
					window.location.href = "voucher.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Delete Failed");
					window.location.href = "voucher.php";
					</script>

<?php		}

	}

?>