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
	
		$pilih	= mysql_query("SELECT * FROM studio_musik WHERE id_member='$id'");
		$pilih2	= mysql_fetch_assoc($pilih);
	
		$update = "UPDATE studio_musik
					SET 
						nama_sm 			='$nama' ,
						alamat_sm			='$alamat' ,
						wilayah_sm 			='$wilayah' ,
						tlpn_sm				='$telepon' ,
						available_time_sm	='$time' ,
						sewa_pershift_sm	='$sewa' ,
						catatan_tambahan	='$note' 
					WHERE 
						id_member			='$id'
					";

		mysql_query($update);
		if (!$update)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else { 
		  					  echo "<script>window.location = 'studiomusikmember.php?id=".$id=$_GET['id']."';</script>";
}
	 
?>