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
<title><h2>Despatcher Approve</h2></title>

<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "ubung") or die(mysqli_error());?>
<?php 
	if (isset($_GET['DespatcherID'])) {
		$DespatcherID = $_GET['DespatcherID'];

		$record = mysqli_query($link, "UPDATE despatcher SET RegStatus='Approved' WHERE DespatcherID=$DespatcherID ");
	}
	   if($record==true)
				{
					?>
					<script type="text/javascript">
					alert("Approved");
					window.location.href = "index.php";
					</script>
					<?php
				}
				else {
					die("Insert Failed");
				}
?>

<center>D_approve.php" method="post">
	<table border = "0" align="center">

<tr><td colspan="2"><h2 align="center">Approve Despatcher request?</h2></td></tr>

</form>
</table>

<br>
<button class="delete_btn" type="submit" name="save" >Confirm</button>
<br><br>

</center>
</body>