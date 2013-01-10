<!--Studio Musik Wilayah Selatan-->

<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>HOS</title>
<style>
body
{
background-image:url('musik2.jpg');
background-repeat:no-repeat;
background-position:bottom left;
} 

#list
{
font-family:"Cambria";
width:90%;
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
</head>
<body>

	<img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
	
    <div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand" href="login.php">HOS</a>
	<ul class="nav">
	<li class="active"><a href="studiomusikguest.php">Studio Musik</a></li>
	<li><a href="studiorecordingguest.php">Studio Recording</a></li>
	<li><a href="tokoalatmusikguest.php">Toko Alat Musik</a></li>
	<li><a href="eventguest.php">Upload Poster Event</a></li>
    </ul>
	</div>
	</div>
	
	<div class="container-fluid">
    <div class="row-fluid">
	
		<div class="span2">
			<!--Sidebar content-->
			<ul class="nav nav-list">
			<li class="nav-header"><font face="cambria">WILAYAH</font></li>
			<li><a href="studiomusikguest.php"><font face="cambria">Semua wilayah</font></a></li>
			<li><a href="sm_guest_utara.php"><font face="cambria">Surabaya Utara</font></a></li>
			<li><a href="sm_guest_barat.php"><font face="cambria">Surabaya Barat</font></a></li>
			<li class="active"><a href="sm_guest_selatan.php"><font face="cambria">Surabaya Selatan</font></a></li>
			<li><a href="sm_guest_timur.php"><font face="cambria">Surabaya Timur</font></a></li>
			</ul>
		</div>
		
    <div class="span10">
    <!--Body content-->
				<form align="right" class="form-search pull-right" method="post" action="search_exe.php">
				<input name="name" type="text" class="input-medium search-query" placeholder="Search for...">
				<button type="submit" class="btn">Go</button>
				</form></br>

		<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">
		<center><h3><font face="cambria">DAFTAR STUDIO MUSIK SURABAYA</font></h3></center>
		<tr class="alt">
		<th align="center"><b>Nama</b></th>
		<th align="center"><b>Alamat</b></th>
		<th align="center"><b>Wilayah</b></th>
		<th align="center"><b>Telepon</b></th>
		<th align="center"><b>Available Time</b></th>
		<th align="center"><b>Sewa Per Shift</b></th>
		<th align="center"><b>Catatan Tambahan</b></th>
		</tr>

		<?
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		@$namasm = $_POST['nama_sm'];
		@$alamatsm = $_POST['alamat_sm'];
		@$wilayahsm = $_POST['wilayah_sm'];
		@$tlpnsm = $_POST['tlpn_sm'];
		@$time = $_POST['available_time_sm'];
		@$sewa = $_POST['sewa_pershift_sm'];
		@$catatan = $_POST['catatan_tambahan'];

		$cari="SELECT * FROM studio_musik where wilayah_sm like 'Selatan'";
		$hasil=mysql_query($cari);
		while($data=mysql_fetch_row($hasil)){
				echo"<tr>

				<td>$data[1]</td>
				<td>$data[2]</td>
				<td>$data[3]</td>
				<td>$data[4]</td>
				<td>$data[5]</td>
				<td>$data[6]</td>
				<td>$data[7]</td>
					
				</tr>";
		}
		?>
		</table>
		
    </div>
    </div>
    </div>

		
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
</br><script src="js/bootstrap.js"></script>
</body>
</html>