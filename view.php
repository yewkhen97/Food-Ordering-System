<?php
$dbh = new PDO("mysql:host=localhost;dbname=ca17054","ca17054","ca17054");
$username = isset($_GET['username'])?$_GET['username']:"";
$stat = $dbh-> prepare("select * from record where username=?");
$stat->bindParam(1,$username);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:'.$row['type']);
echo $row['data'];