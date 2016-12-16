    <?php 
	header("Access-Control-Allow-Origin: *");
    //Koneksi database MySQL
    $koneksi = mysqli_connect("localhost","u291493556_awp2","BkUkmOzgf9","u291493556_tugas") 
        or die("Error ".mysqli_error($koneksi));
    //Mengambil data pada table dari database MySQL
    $sql = "select * from tbkaryawan";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $tbkaryawan = array();
    while($row = mysqli_fetch_assoc($result))
    {
      $tbkaryawan[] = $row;
    }
    //Menampilkan konversi data pada tabel identitas ke format JSON
    echo json_encode($tbkaryawan);
	
    //close the db connection
    mysqli_close($koneksi);
    ?>
