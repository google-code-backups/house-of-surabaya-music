<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("hos");

$Username=$_POST['username']; 
$Password=$_POST['password']; 

$sql="SELECT * FROM user WHERE username='$Username' and password='$Password'";
$result=mysql_query($sql);
$hasil = mysql_fetch_row($result);
if($hasil){
	$_SESSION ['username'] = $_POST ['username'];
	$_SESSION ['password'] = $_POST ['password'];
	header("location:home.php?success");
}else{
		echo "<script>alert('Username atau password ada yang salah !');
			javascript:history.go(-1);</script>";
	}

?>