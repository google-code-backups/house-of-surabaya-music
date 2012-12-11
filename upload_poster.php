<?php
mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db ("hos");

	@$namae=$_POST ['namaevent'];
	@$deskripsi=$_POST ['deskripsi'];
	@$tanggal=$_POST ['tanggal'];
	@$tempat=$_POST ['tempat'];
	@$catatan=$_POST ['catatan'];
	@$PosterName=null;
   
   @$PosterName = $_FILES['picfotoe']['name']; //get the file name
	  @$PosterSize = $_FILES['picfotoe']['size']; //get the size
	  @$PosterError = $_FILES['picfotoe']['error']; //get the error when upload
			if($PosterSize > 0 || $PosterError == 0){ //check if the file is corrupt or error
				$move = move_uploaded_file($_FILES['picfotoe']['tmp_name'], 'poster/'.$PosterName); //save image to the folder
				}
	
		if (mysql_query("INSERT INTO event (nama_event, deskripsi_event, tanggal_event, tempat_event, catatan_tambahan_event, poster_event)
			VALUES('$namae', '$deskripsi', '$tanggal', '$tempat', '$catatan', '$PosterName')"))
			{
			header("location: home.php");
			}else{
			echo "<script>alert('Upload Poster Gagal!');
			javascript:history.go(-1);</script>";
			}
?>