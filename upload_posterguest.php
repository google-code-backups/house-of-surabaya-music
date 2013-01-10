<?php
mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db ("hos");

	@$namae=$_POST ['namaevent'];
	@$deskripsi=$_POST ['deskripsi'];
	@$tanggal=$_POST ['tanggal'];
	@$tempat=$_POST ['tempat'];
	@$catatan=$_POST ['catatan'];
	@$PosterName=null; 
		
		@$PosterName = $_FILES['posterevent']['name']; //get the file name
		@$PosterSize = $_FILES['posterevent']['size']; //get the size
		@$PosterError = $_FILES['posterevent']['error']; //get the error when upload
		@$PosterType = $_FILES ['posterevent']['type'];
		
			if ((($PosterType == "image/jpeg")|| ($PosterType == "image/png")|| ($PosterType == "image/jpg"))&& ($PosterError == 0)) {
			if($PosterSize > 5000000) {
				echo "<script>alert('Ukuran file terlalu besar!');
				javascript:history.go(-1);</script>";
			}
		else {
			if (file_exists("poster_guest/" . $PosterName)) {
				echo "<script>alert('Poster sudah pernah di upload!');
				javascript:history.go(-1);</script>";
			}
			else {
				move_uploaded_file($_FILES["posterevent"]["tmp_name"], "poster_guest/" . $PosterName);
				$poster = "poster_guest/" . $PosterName;
			}
		}
	}
		
		
		if (mysql_query("INSERT INTO event (nama_event, deskripsi_event, tanggal_event, tempat_event, poster_event, catatan_tambahan_event )
			VALUES('$namae', '$deskripsi', '$tanggal', '$tempat', '$PosterName', '$catatan')"))
			{
			header("location: login.php");
			}else{
			echo "<script>alert('Upload Poster Gagal!');
			javascript:history.go(-1);</script>";
			}
?>