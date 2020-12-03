<?php
include "includes/conn.php";
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$name=$_POST['name'];

			$sql = "SELECT * FROM user WHERE Username = '".$username."'";
			$query = $conn->query($sql);
			if($query->num_rows < 1){
				$sql1="INSERT INTO user VALUES ('$username','$password','customer')";
				$query1= $conn->query($sql1);
				$sql2="INSERT INTO customer (Username, Name, Password) VALUES ('$username','$name','$password')";
				$query2= $conn->query($sql2);
				if($query1===true && $query2===true)
				{
					?>
					<script type="text/javascript">
					alert("Register Successfully");
					window.location.href = "index.php";
					</script>
					<?php
				}
				else {
					die("Insert Failed");
				}
			}
			else{
				?>
					<script type="text/javascript">
					alert("Username has been registed");
					window.location.href = "index.php";
					</script>
					<?php
			}
	}
?>