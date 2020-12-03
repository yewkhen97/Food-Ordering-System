<?php
// Start the session
session_start();
include"includes/conn.php";
include"includes/head.php";
include"includes/header_admin.php";
?>

<html>
<br><br>
<center>
<div align="center">[<a href="index.php">Home page</a>]
<title><h2>Edit profile</h2></title>
<body>
<center>
<h2 align="middle"> Despatcher info</h2>
<div class="limiter">
									<div class="container-table100">
										<div class="wrap-table100">
											<div class="table100 ver2 m-b-110">
												<table border="2" align="center">

<?php

$link = mysqli_connect("localhost", "ca17054", "ca17054") or die(mysqli_connect_error());

mysqli_select_db($link, "ca17054") or die(mysqli_error());?>

<?php 

$results = mysqli_query($link, "SELECT * FROM despatcher"); ?>

	<?php while ($row = mysqli_fetch_array($results)) { ?>

			<tr><center><th class="cell100 column1">Despatcher ID:</center></th>
			<td class='cell100 column1'><center><?php echo $row['DespatcherID']; ?></center></td>
			<td  rowspan="7" class="cell100 column1" align="center"><center>
				<a href="D_approve.php? DespatcherID=<?php echo $row['DespatcherID']; ?>" class="approve_btn" >Approve</a></center></td> </tr>

			<tr><center><th class="cell100 column2">Name:</center></th>
			<td class='cell100 column1'><center><?php echo $row['DesName']; ?></center></td></tr>

			<tr><center><th class="cell100 column3">Username:</center></th>
			<td class='cell100 column1'><center><?php echo $row['Username']; ?></center></td></tr>

			<tr><center><th class="cell100 column4">Password:</center></th>
			<td class='cell100 column1'><center><?php echo $row['Password']; ?></center></td></tr>


			<tr><center><th class="cell100 column5">Vehicle:</center></th>
			<td class='cell100 column1'><center><?php echo $row['Vehicle']; ?></center></td></tr>

			<tr><center><th class="cell100 column6">Status:</center></th>
			<td class='cell100 column1'><center><?php echo $row['RegStatus']; ?></center></td></tr>

			<tr>
			<td class='cell100 column1' colspan = "3" align="center">
				<form action="D_delate.php" method="post"><center>
				<a href="D_delate.php? DespatcherID=<?php echo $row['DespatcherID']; ?>" class="delete_btn" >Delete</a></center>
			</td>
			

			<br></br>
			</th>
			</td>
			</tr>
	<?php } ?>
</div>
</div>
</div>
</div>
</div>
</table>
<br><br><br>

</center>

<?php include"includes/footer.php";?>
</body>
</html>