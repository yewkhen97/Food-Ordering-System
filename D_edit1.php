<?php 
session_start();
include"includes/conn.php";
include"includes/head.php";
include"includes/header_despatcher.php";
?>

<!DOCTYPE html>
<html>
<body>
<center>
<div align="center">[<a href="index.php">Home page</a>]
<title><h2>Despatcher info</h2></title>

<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "ubung") or die(mysqli_error());?>
<?php 
	if (isset($_GET['edit'])) {
		$DespatcherID = $_GET['edit'];

		$record = mysqli_query($link, "SELECT * FROM despatcher WHERE DespatcherID=$DespatcherID");

			$n = mysqli_fetch_array($record);
			$Username = $n['Username'];
			$DesName = $n['DesName'];
			$Password = $n['Password'];
			$Vehicle = $n['Vehicle'];
	}
?>

<center>
	<form action= "D_edit2.php" method="post">
	<table border = "0" align="center">

<tr><td colspan="2"><h2 align="center"><DETAILS>Despatcher Detail</DETAILS></h2></td></tr>


<tr>
<td>Username :</td>
<td><input type="text" name="Username" value="<?php echo $Username; ?>" readonly></td><br>
</tr>

<tr>
<td>Password :</td>
<td><input type="Password" name="Password" value="<?php echo $Password; ?>"></td><br>
</tr>

<tr>
<td>Vehichle Type :</td>
<td><select name="Vehicle">
	<option Value="<?php echo $Vehicle; ?>">Walking</option>
	<option Value="<?php echo $Vehicle; ?>">Motocycle</option>
	<option Value="<?php echo $Vehicle; ?>">Car</option>
	</select>
	</td><br>
</tr>

<tr>
<td>Full Name :</td>
<td><input type="text" name="DesName" value="<?php echo $DesName; ?>"></td><br>
</tr>



</form>
</table>
<br>
<button class="btn" type="submit" name="save" >Save</button>
<br><br>

<form action="D_view.php" method="post">
<button class="btn" type="submit">Back</button>
</form>

</center>
</body>
</html>