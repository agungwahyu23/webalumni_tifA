<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$NAMA = $_POST['NAMA'];
$DESKRIPSI = $_POST['DESKRIPSI'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into grup values('','$NAMA','$DESKRIPSI')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=data_alumni')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=data_alumni')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $NISN = $_POST['NISN'];
    $ID_USER = $_POST['ID_USER'];
    $id_status = $_POST['id_status'];
    $NM_LENGKAP = $_POST['NM_LENGKAP'];
    $JENKEL= $_POST['JENKEL'];
    $TEMPAT_LAHIR= $_POST['TEMPAT_LAHIR'];
    $TGL_LAHIR= $_POST['TGL_LAHIR'];
    $ALAMAT= $_POST['ALAMAT'];
    $NO_TELP= $_POST['NO_TELP'];
    $NM_AYAH= $_POST['NM_AYAH'];
    $PEKERJAAN_AYAH= $_POST['PEKERJAAN_AYAH'];
    $NM_IBU= $_POST['NM_IBU'];
    $PEKERJAAN_IBU= $_POST['PEKERJAAN_IBU'];
    $THN_MASUK= $_POST['THN_MASUK'];
    $THN_LULUS= $_POST['THN_LULUS'];
    $NO_IJAZAH= $_POST['NO_IJAZAH'];
    $NO_SKHUN= $_POST['NO_SKHUN'];

    // update data ke database
    $query = mysqli_query($koneksi,"update profil set ID_USER='$ID_USER', id_status='$id_status', NM_LENGKAP='$NM_LENGKAP', JENKEL='$JENKEL', TEMPAT_LAHIR='$TEMPAT_LAHIR', TGL_LAHIR='$TGL_LAHIR', ALAMAT='$ALAMAT', NO_TELP='$NO_TELP', NM_AYAH='$NM_AYAH', PEKERJAAN_AYAH='$PEKERJAAN_AYAH', NM_IBU='$NM_IBU', PEKERJAAN_IBU='$PEKERJAAN_IBU', THN_MASUK='$THN_MASUK', THN_LULUS='$THN_LULUS', NO_IJAZAH='$NO_IJAZAH', NO_SKHUN='$NO_SKHUN' where NISN='$NISN'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=home')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=data_profil')</script>";
    }

    //proses delete
}elseif(isset($_GET['NISN'])){
    $NISN = $_GET['NISN'];
    $query = mysqli_query($koneksi, "delete from profil where NISN='$NISN'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('data_alumni.php')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('data_alumni.php')</script>";
    }
}


 

 
?>