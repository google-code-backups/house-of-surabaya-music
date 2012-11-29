<?php
mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db ("hos");

	@$namae=$_POST ['namaevent'];
	@$deskripsi=$_POST ['deskripsi'];
	@$tanggal=$_POST ['tanggal'];
	@$tempat=$_POST ['tempat'];
	@$catatan=$_POST ['catatan'];
	//@$poster=$_POST ['picfotoe'];
	
		if (mysql_query("INSERT INTO event (nama_event, deskripsi_event, tanggal_event, tempat_event, catatan_tambahan_event)
			VALUES('$namae', '$deskripsi', '$tanggal', '$tempat', '$catatan')"))
			{
			header("location: home.php");
			}else{
			echo "<script>alert('Upload Poster Gagal!');
			javascript:history.go(-1);</script>";
			}
?>