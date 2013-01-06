<?php
mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db ("hos");

	@$namae=$_POST ['namaevent'];
	@$deskripsi=$_POST ['deskripsi'];
	@$tanggal=$_POST ['tanggal'];
	@$tempat=$_POST ['tempat'];
	@$PosterName=null;
	@$catatan=$_POST ['catatan'];
	if ((($_FILES["posterevent"]["type"] == "image/jpeg")|| ($_FILES["posterevent"]["type"] == "image/png"))) {
		if($_FILES["posterevent"]["size"] > 5242880){
			echo "<script>alert('Ukuran file terlalu besar!');
			javascript:history.go(-1);</script>";}
				if($_FILES["posterevent"]["error"] > 0) {
					echo "<script>alert('File Poster Corrupt!');
					javascript:history.go(-1);</script>";}
					if (file_exists("poster_guest/" . $_FILES["posterevent"]["name"])) {
						echo "<script>alert('Poster sudah pernah di upload!');
						javascript:history.go(-1);</script>";}
						
			}else {
				move_uploaded_file($_FILES["posterevent"]["tmp_name"], "poster_guest/" . $_FILES["posterevent"]["name"]);
				$posterevent = "poster_guest/" . $_FILES["posterevent"]["name"];
			}

		if(mysql_query("INSERT INTO event (nama_event, deskripsi_event, tanggal_event, tempat_event, catatan_tambahan_event, poster_event)
			VALUES('$namae', '$deskripsi', '$tanggal', '$tempat', '$catatan', '$PosterName')"));{
			header("location: login.php");;
		}
?>