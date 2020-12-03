<?php 
session_start();
include"includes/conn.php";
include"includes/head.php";
include"includes/header_despatcher.php";
?>

<html>
<body>
<center>
<div align="center">[<a href="D_register.php">Register Page</a>]
<header><title>Edit Details</title></header>

<form action= "D_register.php" method="post">
<table border = "1" align="center">
<tr>
<td colspan="2"><h2> Updated Despatcher Info </h2></td>
</tr><br>

<tr>
<td>Username				:</td>
<td><?php echo $_POST["Username"]; ?></td>
</tr>

<tr>
<td>	Password		:</td>
<td><?php echo $_POST["Password"]; ?></input></td>
</tr>
<tr>
<td>Vehicle Type	:</td>
<td><?php echo $_POST["Vehicle"]; ?></td>
</tr>

<tr>
<td>Full Name:</td>
<td><?php echo $_POST["DesName"]; ?></td>
</tr>

</table>

<br>
<center>
<button type = "submit" ><span class="glyphicon glyphicon-check"> Done </span></button>
</center>
</form>

<?php
$link = mysqli_connect("localhost", "root", "");
if (!$link) 
{
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "ubung") or die(mysqli_connect_error());
			$Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Vehicle = $_POST['Vehicle'];
			$DesName = $_POST['DesName'];
			
	 $sql = "UPDATE despatcher SET DesName = '$DesName',Password = '$Password' ,  Vehicle = '$Vehicle' where Username=
	 '$Username'" ;

	if (mysqli_query($link, $sql)) {
		echo "Successful updated!";
	} 
	else {
    echo "Fail to update!" . mysqli_error($link);
	}
	mysqli_close($link);
	?>

</body>
</html>