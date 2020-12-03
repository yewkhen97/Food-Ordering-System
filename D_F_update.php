<?php
	include "includes/session.php";
	if (isset($_POST['submit'])) {
		$CustID=$_POST['CustID'];
		$despatcherID =$_POST['despatcherID'];
		$Comment=$_POST['Comment'];
		$Rating=$_POST['Rating'];

		$sql1="INSERT INTO feedback values('$CustID','$despatcherID','$Comment', '$Rating')";
		$result1=$conn->query($sql1);

		if($result1===true )
		{
					?>
					<script type="text/javascript">
					alert("Feedback accepted");
					window.location.href = "index.php";
					</script>
					<?php
		}
		else {
				die("Insert Failed");
				?>
				<script type="text/javascript">
					alert("Error updating feedback, please try again later.");
					window.location.href = "index.php";
				</script>
				<?php	}
}
?>