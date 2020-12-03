<?php
	include "includes/session.php";
	if (isset($_POST['update'])) {
		$DesName=$_POST['DesName'];
		$Vehicle=$_POST['Vehicle'];
		$Password=$_POST['Password'];

		$sql1="UPDATE despatcher SET DesName = '$DesName' , Password = '$Password' ,  Vehicle = '$Vehicle'  WHERE Username='".$_SESSION['user']."'";
		$result1=$conn->query($sql1);
		$sql2="UPDATE user SET Password='$Password' WHERE Username='".$_SESSION['user']."'";
		$result2=$conn->query($sql2);
		if($result1===true && $result2===true)
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "despatcher_profile.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "despatcher_profile.php";
					</script>

<?php		}
	}

?>