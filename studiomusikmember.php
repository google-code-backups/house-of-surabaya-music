<?php
@$id = $_GET['id'];
?>

<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>home</title>
<style>
body {
		background-image:url('musik2.jpg');
		background-repeat:no-repeat;
		background-position:bottom right;
	} 
</style>
<body>
</head>

    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
			
	<div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
    <li class="active"><a href="studiomusikmember.php?id=<?php echo $id; ?>">My Profile</a></li>
	<li><a href="postermember_sm.php?id=<?php echo $id; ?>">Event Musik Surabaya</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	</div>

	<center><h3><font face="cambria">MY PROFILE</font></h3></center>
	<center>
	<?php
		session_start();
		mysql_connect("localhost","root","");
		mysql_select_db("hos");
		
		if(!isset($_SESSION['username'])){
			header("location:login.php");
		}else{
		$sql = "Select id,nama_pemilik FROM member WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
		$execute = mysql_query($sql) or die(mysql_error());
		$hasil = mysql_fetch_assoc($execute);
		
		$cari="SELECT * FROM studio_musik where id_member = ".$hasil['id'];
		$hasil=mysql_query($cari);
		while($data=mysql_fetch_row($hasil)){
		
		@$nama 		= $data[1]; 
		@$alamat 	= $data[2];
		@$wilayah 	= $data[3];
		@$telp		= $data[4];
		@$time 		= $data[5];
		@$sewa 		= $data[6];
		@$note 		= $data[7];
		 }
			
		} 
	?>
	<table border="0">
	<tr>
	<th align="left"><font face="cambria">Nama</font></th>
		<th> : </th>
	<th align="left"><font face="cambria"><?php echo @$nama; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Alamat</font></th>
			<th> : </th>
	<th align="left"><font face="cambria"> <?php echo @$alamat; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Wilayah</font></th>
			<th> : </th>
	<th align="left"><font face="cambria"> <?php echo @$wilayah; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Telepon</font></th>
			<th> : </th>
		<th align="left"><font face="cambria"> <?php echo @$telp; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Available Time</font></th>
			<th> : </th>
		<th align="left"><font face="cambria"> <?php echo @$time; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Sewa Per-Shift</font></th>
			<th> : </th>
		<th align="left"><font face="cambria"> <?php echo @$sewa; ?></font></th>
	</tr>
	
	<tr>
	<th align="left"><font face="cambria">Note</font></th>
			<th> : </th>
		<th align="left"><font face="cambria"> <?php echo @$note; ?></font></th>
	</tr>
	</table>
	</center>
		</br>
		</br>
		<center><a href="formedit_sm.php?id=<?php echo $id; ?>"><img src="edit.png" width="40" height="40" title="Edit Profile"/></center>
		
	<script src="js/bootstrap.js"></script>
</body>

    <!-- Footer-->
	<footer class="footer">
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="span12">
        <center>© 2012 House Of Surabaya Music. All rights reserved.</center>
      </div>
    </footer>
</html>