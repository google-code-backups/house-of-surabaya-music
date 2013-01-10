<?php

	mysql_connect("localhost","root","");
	mysql_select_db("hos");
	
	@$nama = $_POST['nama'];
	@$alamat = $_POST['alamat'];
	@$wilayah = $_POST['wilayah'];
	@$telepon = $_POST['telepon'];
	@$time = $_POST['time'];
	@$sewa = $_POST['sewa'];
	@$note = $_POST['note'];
	@$id = $_GET['id'];

	//lakukan query update
	
		$pilih	= mysql_query("SELECT * FROM toko_alat_musik WHERE id_member_tam = '$id'");
		$pilih2	= mysql_fetch_assoc($pilih);
	
		$update = "UPDATE toko_alat_musik
					SET 
						nama_tam 			='$nama' ,
						alamat_tam			='$alamat' ,
						wilayah_tam 		='$wilayah' ,
						tlpn_tam			='$telepon' ,
						available_time_tam	='$time' ,
						catatan_tambahan_tam='$note' 
					WHERE 
						id_member_tam			='$id'
					";

		mysql_query($update);
		if (!$update)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else { 
		  					  echo "<script>window.location = 'tokoalatmusikmember.php?id=".$id=$_GET['id']."';</script>";
}
	 
?>