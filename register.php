<?php
mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db ("hos");

	@$namaf=$_POST ['nama_fasilitas'];
	@$namap=$_POST ['nama_pemilik'];
	@$noktp=$_POST ['no_KTP'];
	@$password=$_POST ['password'];
	@$tipef=$_POST ['tipef'];
	@$SipuName=null;
	@$FotoName=null;
			
		@$SipuName = $_FILES['picsipu']['name']; //get the file name
		@$SipuSize = $_FILES['picsipu']['size']; //get the size
		@$SipuError = $_FILES['picsipu']['error']; //get the error when upload
			if($SipuSize > 0 || $SipuError == 0){ //check if the file is corrupt or error
				$move = move_uploaded_file($_FILES['picsipu']['tmp_name'], 'image/'.$SipuName); //save image to the folder
				}
				
		@$FotoName = $_FILES['picfoto']['name']; //get the file name
		@$FotoSize = $_FILES['picfoto']['size']; //get the size
		@$FotoError = $_FILES['picfoto']['error']; //get the error when upload
			if($FotoSize > 0 || $FotoError == 0){ //check if the file is corrupt or error
				$move = move_uploaded_file($_FILES['picfoto']['tmp_name'], 'picture/'.$SipuName); //save image to the folder
				}
								

		if (mysql_query("INSERT INTO member (nama_fasilitas, nama_pemilik, no_KTP, Password, Tipe_Fasilitas, nama_sipu, foto_fasilitas)
			VALUES('$namaf', '$namap', '$noktp', '$password', '$tipef', '$SipuName', '$FotoName')"))
			{
				if ($tipef='Studio Musik') {
					header("location: formstudiomusik.html");}
				if($tipef='Studio Recording'){
					header("location: formstudiorecording.html");}
				if($tipef='Toko Alat Musik') {
					header ("location: formtokoalatmusik.html");}
			
			}else{
			echo "<script>alert('Registerasi gagal!');
			javascript:history.go(-1);</script>";
			}
?>