<?php
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location: index.php');
	}
	if(isset($_SESSION['userType']))
	{
		$userType=$_SESSION['userType'];
		
		if($userType=="admin")
		{
			$sql = "SELECT * FROM admin WHERE Username = '".$_SESSION['user']."'";
			$query = $conn->query($sql);
			$user = $query->fetch_assoc();
		}
		elseif ($userType=="customer")
		{
			$sql = "SELECT * FROM customer WHERE Username = '".$_SESSION['user']."'";
			$query = $conn->query($sql);
			$user = $query->fetch_assoc();
		}
		elseif ($userType=="restaurant")
		{
			$sql = "SELECT * FROM restaurant WHERE Username = '".$_SESSION['user']."'";
			$query = $conn->query($sql);
			$user = $query->fetch_assoc();
		}
		elseif ($userType=="despatcher")
		{
			$sql = "SELECT * FROM despatcher WHERE Username = '".$_SESSION['user']."'";
			$query = $conn->query($sql);
			$user = $query->fetch_assoc();
		}
	}

	
	
?>