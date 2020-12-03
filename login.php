<?php
session_start();
include "includes/conn.php";
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];



			$sql = "SELECT * FROM user WHERE Username = '".$username."'";
			$query = $conn->query($sql);
			if(mysqli_num_rows($query) < 1){
							?>
							<script type="text/javascript">
							alert("Cannot find account with the username");
							window.location.href = "index.php";
							</script>
							<?php
			}
			else{
				$row=mysqli_fetch_array($query);
				if($row['Usertype']=="restaurant")
				{
					$sql = "SELECT * FROM restaurant WHERE Username = '".$username."'";
					$query = $conn->query($sql);
					if($query->num_rows < 1){
						?>
							<script type="text/javascript">
							alert("Cannot find account with the username");
							window.location.href = "index.php";
							</script>
							<?php
					}
					else{
						$row = $query->fetch_assoc();
						if ($row['RegStatus']=="Approved") {
								if($password==$row['Password']){
								$_SESSION['user'] = $row['Username'];
								$_SESSION['userType'] = "restaurant";
								header("Location: index.php");
							}
							else{
								?>
								<script type="text/javascript">
								alert("The password Incorrect!");
								window.location.href = "index.php";
								</script>
								<?php
							}
						}
						else
						{
							?>
							<script type="text/javascript">
							alert("The user is not approve yet");
							window.location.href = "index.php";
							</script>
							<?php
						}
						
					}
				}
				elseif ($row['Usertype']=="admin") {
					$sql = "SELECT * FROM admin WHERE Username = '".$username."'";
					$query = $conn->query($sql);
					if($query->num_rows < 1){
						?>
							<script type="text/javascript">
							alert("Cannot find account with the username");
							window.location.href = "index.php";
							</script>
							<?php
					}
					else{
						$row = $query->fetch_assoc();
							if($password==$row['Password']){
								$_SESSION['user'] = $row['Username'];
								$_SESSION['userType'] = "admin";
								header("Location: index.php");
							}
							else{
								?>
								<script type="text/javascript">
								alert("The password Incorrect!");
								window.location.href = "index.php";
								</script>
								<?php
							}
					}
				}
				elseif ($row['Usertype']=="despatcher") {
					$sql = "SELECT * FROM despatcher WHERE Username = '".$username."'";
					$query = $conn->query($sql);

					if($query->num_rows < 1){
						?>
							<script type="text/javascript">
							alert("Cannot find account with the username");
							window.location.href = "index.php";
							</script>
							<?php
					}
					else{
						$row = $query->fetch_assoc();
							if ($row['RegStatus']=="Approved") {
								if($password==$row['Password']){
								$_SESSION['user'] = $row['Username'];
								$_SESSION['userType'] = "despatcher";
								header("Location: index.php");
							}
							else{
								?>
								<script type="text/javascript">
								alert("The password Incorrect!");
								window.location.href = "index.php";
								</script>
								<?php
							}
						}
						else
						{
							?>
							<script type="text/javascript">
							alert("The user is not approve yet");
							window.location.href = "index.php";
							</script>
							<?php
						}
						
					}
				}
				else
				{
					$sql = "SELECT * FROM customer WHERE Username = '".$username."'";
					$query = $conn->query($sql);
					if($query->num_rows < 1){
						?>
							<script type="text/javascript">
							alert("Cannot find account with the username");
							window.location.href = "index.php";
							</script>
							<?php
					}
					else{
						$row = $query->fetch_assoc();
							if($password==$row['Password']){
								$_SESSION['user'] = $row['Username'];
								$_SESSION['userType'] = "customer";
								header("Location: index.php");
							}
							else{
								?>
								<script type="text/javascript">
								alert("The password Incorrect!");
								window.location.href = "index.php";
								</script>
								<?php
							}
					}
				}

			}
	}

	

?>