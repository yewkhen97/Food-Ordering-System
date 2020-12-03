<?php
	include "includes/session.php";
	if (isset($_POST['updateres'])) {
		$Username=$_POST['updateres'];
		$RegStatus=$_POST['RegStatus'];
	
		

		$sql1="UPDATE restaurant SET RegStatus='$RegStatus'WHERE Username='$Username'";
		$result1=$conn->query($sql1);
		if($result1===true)
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "admin_ApproveRes.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "admin_ApproveRes.php";
					</script>

<?php		}
	}
	elseif (isset($_POST['deleteres'])) {
		$Username=$_POST['deleteres'];
		
		$sql="DELETE FROM user WHERE Username='$Username'";
		$result=$conn->query($sql);
		
		if($result===true)
		{
					?>
					<script type="text/javascript">
					alert("Delete Successfully");
					window.location.href = "admin_ApproveRes.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Delete Failed");
					window.location.href = "admin_ApproveRes.php";
					</script>

<?php		}

	}



?>