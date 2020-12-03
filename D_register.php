<html>
<title>Register</title>

<body>
<?php 
session_start();
include"includes/conn.php";
include"includes/head.php";
include"includes/header.php";


?>
<br></br>
<br></br>
<h1 align="center">Register Despatcher</h1>
<form action="D_register.php" method="post">
<table border="0" align="center">


<tr>
	<td>&nbsp;</td>
	<td>Username</td>
	<td>:</td>
	<td><input name="Username" type="text" />
	</td>
	<td>&nbsp;</td>
</tr>
 
<tr>
	<td>&nbsp;</td>
	<td>Password</td>
	<td>:</td>
	<td><input name="Password" type="Password"/>
	</td>
	<td>&nbsp;</td>
 </tr>
 <tr>
	<td>&nbsp;</td>
	<td>Vehicle Type</td>
	<td>:</td>
	<td><select name="Vehicle">
		<option value="Walking">Walking</option>
		<option value="Motocycle">Motocycle</option>
		<option value="Car">Car</option>
	</select>
	</td>
	<td>&nbsp;</td>
 </tr>
 
 <tr>
	<td>&nbsp;</td>
	<td>Full Name</td>
	<td>:</td>
	<td><input name="DesName" type="text"/>
	</td>
	<td>&nbsp;</td>
 </tr>
 
<tr>
	<td></td>
	<td><input type="submit" name="u_btn" value="Submit"></td>
<form action='index.php'>
	<td></td>

	<td><input type="button" onclick="window.location= '<?php echo 'index.php';?>'" value="Back"></td>
	</form>
</tr>

</center>
</table>
</form>
<br></br>
<br></br>
<br></br>
<?php
	include"includes/footer.php";
	if (isset($_POST["u_btn"]) ) {
			$Username = $_POST['Username'];
			$Vehicle = $_POST['Vehicle'];
			$DesName = $_POST['DesName'];
			$Password = $_POST['Password'];

		$sql = "SELECT * FROM despatcher WHERE Username = '".$Username."'";
			$query = $conn->query($sql);
			if($query->num_rows < 1){
				$sql1="INSERT INTO user VALUES ('$Username','$Password','despatcher')";
				$query1= $conn->query($sql1);
				$sql2="INSERT INTO despatcher(`DesName`,`Username`,`RegStatus`,`Vehicle`,`Password`) VALUES (
				'$DesName', '$Username', 'Pending', '$Vehicle', '$Password')";
				$query2= $conn->query($sql2);
				if($query2===true)
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

</body>
</html>