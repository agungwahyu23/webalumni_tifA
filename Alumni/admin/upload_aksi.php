<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include '../config/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$NISN     = $data->val($i, 1);
	$NM_LENGKAP   = $data->val($i, 2);
    $JENKEL  = $data->val($i, 3);
    $TEMPAT_LAHIR  = $data->val($i, 4);
    $TGL_LAHIR  = $data->val($i, 5);
    $ALAMAT  = $data->val($i, 6);
    $NO_TELP  = $data->val($i, 7);
    $NM_AYAH  = $data->val($i, 8);
    $PEKERJAAN_AYAH  = $data->val($i, 9);
    $NM_IBU  = $data->val($i, 10);
    $PEKERJAAN_IBU  = $data->val($i, 11);
    $THN_MASUK  = $data->val($i, 12);
    $THN_LULUS  = $data->val($i, 13);
    $NO_IJAZAH  = $data->val($i, 14);
    $NO_SKHUN  = $data->val($i, 15);

$hrup='2';
	
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into profil values('$NISN','','','$NM_LENGKAP','$JENKEL','$TEMPAT_LAHIR','$TGL_LAHIR','$ALAMAT','$NO_TELP',
        '$NM_AYAH','$PEKERJAAN_AYAH','$NM_IBU','$PEKERJAAN_IBU','$THN_MASUK','$THN_LULUS','$NO_IJAZAH','$NO_SKHUN')");
		$berhasil++;
	
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:media.php?halaman=user");
?>