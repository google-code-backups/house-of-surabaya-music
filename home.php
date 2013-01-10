<?php
session_start();
if  (!isset($_SESSION['username'])){
	header('location:loginforadmin.php');
	exit;
	}
?>

<html>
<title>HOS</title>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>
    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
	
    <div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
	<li class="active"><a href="home.php">Home</a></li>
    <li><a href="studiomusik.php">Studio Musik</a></li>
	<li><a href="studiorecording.php">Studio Recording</a></li>
	<li><a href="tokoalatmusik.php">Toko Alat Musik</a></li>
    <li><a href="event.php">Upload Poster Event</a></li>
	<li><a href="logout_admin.php">Logout</a></li>
    </ul>
	</div>
	</div>
	
					<form align="right" class="form-search pull-right" method="post" action="search-admin.php">
				<input name="name" type="text" class="input-medium search-query" placeholder="Search for...">
				<button type="submit" class="btn">Go</button>
				</form></br>
<style>
body
		{
		background-image:url('musik2.jpg');
		background-repeat:no-repeat;
		background-position:bottom right;
		}

#list
{
font-family:"Cambria";
width:70%;
border-collapse:collapse;
}
#list td, #list th 
{
font-size:1em;
border:2px solid black;
padding:3px 7px 2px 7px;
}
#list th 
{
font-size:1.1em;
text-align:center;
padding-top:5px;
padding-bottom:4px;
background-color:#B0E0E6;
color:black;
}
#list tr.alt td 
{
color:white;
background-color:#EAF2D3;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<tr class="alt">
<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">
<center><h2>DAFTAR EVENT MUSIK SURABAYA</h2></center>
<th align="center"><b>Nama</b></th>
<th align="center"><b>Deskripsi</b></th>
<th align="center"><b>Tanggal</b></th>
<th align="center"><b>Tempat</b></th>
<th align="center"><b>Poster</b></th>
<th align="center"><b>Catatan Tambahan</b></th>
<th align="center"><b>Action</b></th>
</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("hos");
$cari="SELECT * FROM event";
$hasil=mysql_query($cari);
while($data=mysql_fetch_row($hasil)){
		echo"<tr>

		<td><center>$data[1]</center></td>
		<td><center>$data[2]</center></td>
		<td><center>$data[3]</center></td>
		<td><center>$data[4]</center></td>
		<td align=center><img src='$data[5]'></td>
		<td><center>$data[6]</center></td>
		<td><center><img src='del.jpg' width='40' height='40' onclick='del($data[0])' title='delete'></center></td>	
		</td>	
		</tr>";

		}

?>
</table>
</br>

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
	  <br>
   	  <br>
	  <br>
	  <br>
      <div class="span12">
        <center>© 2012 House Of Surabaya Music. All rights reserved.</center>
      </div>
    </footer>


<script src="js/bootstrap.js"></script>
<script type="text/JavaScript">
function del(id){
var agree=confirm("Are you sure you want to delete this file?");
if(agree==true){
       window.location = 'delete_event.php?id=' + id;
}
}
</script>
</body>
</html>