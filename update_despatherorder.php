<?php 
include "includes/session.php";
if (isset($_POST['updatedeliver'])) {
		$id=$_POST['updatedeliver'];
		$Deliverstatus=$_POST['Status'];

		$sql="UPDATE orderdetail SET Status='$Deliverstatus' WHERE OrderID='$id'";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "Despatcher.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "Despatcher.php";
					</script>

<?php		}


	}
	elseif (isset($_POST['updatedeliver2'])) {
		$id=$_POST['updatedeliver2'];
		$Deliverstatus=$_POST['Status'];

		$sql="UPDATE orderdetail SET Status='$Deliverstatus' WHERE OrderID='$id'";
		$result=$conn->query($sql);
		if($result===true )
		{
					?>
					<script type="text/javascript">
					alert("Update Successfully");
					window.location.href = "Despatcher.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?><script type="text/javascript">
					alert("Update Failed");
					window.location.href = "Despatcher.php";
					</script>

<?php		}


	}

?>