<?php
include "includes/session.php"; 
$dbh = new PDO("mysql:host=localhost;dbname=ca17054","ca17054","ca17054");




	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$Name=$_POST['Name'];
		$address=$_POST['address'];
		$phone_no=$_POST['phone_no'];
		$name = $_FILES['myfile']['name'];
		$type = $_FILES['myfile']['type'];
		$data =file_get_contents($_FILES['myfile']['tmp_name']);
		$stmt = $dbh->prepare("insert into record values(?,?,?,?)");
		$stmt->bindParam(1,$username);
		$stmt->bindParam(2,$name);
		$stmt->bindParam(3,$type);
		$stmt->bindParam(4,$data);
		$stmt->execute();


			$sql = "SELECT * FROM restaurant WHERE Username = '".$username."'";
			$query = $conn->query($sql);
			if($query->num_rows < 1){
				$sql1="INSERT INTO user VALUES ('$username','$password','restaurant')";
				$query1= $conn->query($sql1);
				$sql2="INSERT INTO restaurant (Username, Name, Password, RegStatus,address,phone_no) VALUES ('$username','$Name','$password', 'Pending','$address','$phone_no')";
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