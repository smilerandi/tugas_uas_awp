<?php 
Header("Access-Control-Allow-Origin: *");
?>
<xml>
<?php
 $koneksi = mysqli_connect("localhost","u291493556_awp2","BkUkmOzgf9","u291493556_tugas") 
        or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
    $sql = "select * from tbkaryawan";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $tbkaryawan = array();
	$no = 1;
    while($row = mysqli_fetch_assoc($result))
    {
?>
	<tbkaryawan>
	  <no><?php echo $no; ?></no>
	  <id_pegawai><?php echo $row['id_pegawai']; ?></id_pegawai>
	  <nama><?php echo $row['nama']; ?></nama>
	  <alamat><?php echo $row['alamat']; ?></alamat>
	  <masa_kerja><?php echo $row['masa_kerja']; ?></masa_kerja>
	  <status><?php echo $row['status']; ?></status>
	  <jml_anak><?php echo $row[jml_anak]; ?></jml_anak>
	</tbkaryawan> 
<?php
	$no++;
    }
?>
</xml>
