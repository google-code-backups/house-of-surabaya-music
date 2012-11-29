<?php
mysql_connect("localhost","root","");
mysql_select_db("hos");

$Username=$_POST['username']; 
$Password=$_POST['password']; 

$sql="SELECT * FROM user WHERE username='$Username' and password='$Password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
	if($count == true){
	
	session_register("username");
	session_register("password");
		
	$_SESSION['daftar']='true';
	
	header("location:home.php?success");
	}
	else {
	echo "<script>alert('Username atau password ada yang salah !');
			javascript:history.go(-1);</script>";	
	}

?>