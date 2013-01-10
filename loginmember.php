<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("hos");

$Username=$_POST['username']; 
$Password=$_POST['password']; 

$sql="SELECT * FROM member WHERE username='$Username' and password='$Password'";
$result=mysql_query($sql) or die(mysql_error());
$hasil = mysql_fetch_assoc($result);
if($hasil['ID']!=""){
	$_SESSION ['username'] = $_POST ['username'];
	$_SESSION ['password'] = $_POST ['password'];
	
	if($hasil['Tipe_Fasilitas']=="Studio Musik") {
	$sql = "SELECT id FROM member where username = '".$Username."' and password = '".$Password."'";
					$execute = mysql_query($sql) or die(mysql_error());
					$hasil = mysql_fetch_assoc($execute);
					echo "<script>window.location = 'studiomusikmember.php?id=".$hasil['id']."';</script>";
					};
	if($hasil['Tipe_Fasilitas']=="Studio Recording") {
	$sql = "SELECT id FROM member where username = '".$Username."' and password = '".$Password."'";
					$execute = mysql_query($sql) or die(mysql_error());
					$hasil = mysql_fetch_assoc($execute);
					echo "<script>window.location = 'studiorecordingmember.php?id=".$hasil['id']."';</script>";
					};

	if($hasil['Tipe_Fasilitas']=="Toko Alat Musik") {
	$sql = "SELECT id FROM member where username = '".$Username."' and password = '".$Password."'";
					$execute = mysql_query($sql) or die(mysql_error());
					$hasil = mysql_fetch_assoc($execute);
					echo "<script>window.location = 'tokoalatmusikmember.php?id=".$hasil['id']."';</script>";
					};
					}
		else{
		echo "<script>alert('Username atau password ada yang salah !');
			javascript:history.go(-1);</script>";
	}

?>