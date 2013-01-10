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
	
		$pilih	= mysql_query("SELECT * FROM studio_recording WHERE id_member_sr='$id'");
		$pilih2	= mysql_fetch_assoc($pilih);
	
		$update = "UPDATE studio_recording
					SET 
						nama_sr 			='$nama' ,
						alamat_sr			='$alamat' ,
						wilayah_sr 			='$wilayah' ,
						tlpn_sr				='$telepon' ,
						available_time_sr	='$time' ,
						sewa_pershift_sr 	='$sewa' ,
						catatan_tambahan_sr	='$note' 
					WHERE 
						id_member_sr			='$id'
					";

		mysql_query($update);
		if (!$update)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else { 
		  					  echo "<script>window.location = 'studiorecordingmember.php?id=".$id=$_GET['id']."';</script>";
}
	 
?>