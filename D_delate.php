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
<div align="center">[<a href="D_view.php">Despatcher page</a>]
<title><h2></h2></title>

<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "ubung") or die(mysqli_error());?>
<?php 
	if (isset($_GET['DespatcherID'])) {
		$DespatcherID = $_GET['DespatcherID'];

		$record = mysqli_query($link, "DELETE FROM despatcher WHERE DespatcherID='$DespatcherID' ");
	}
?>

<p>Confirm delate Despatcher?</p>
<center>
	<form action= "D_view.php" method="post">
	<table border = "0" align="center">

</form>
</table>

<tr><td colspan="2"><h2 align="center"></h2></td></tr>
<br>
<button class="delete_btn" id='Back' type="submit" name="save" >Confirm</button>


</center>
</body>
