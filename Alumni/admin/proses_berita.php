<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$ID_KATEGORIBERITA = $_POST['ID_KATEGORIBERITA'];
$ID_USER = $_POST['ID_USER'];
$JUDUL = $_POST['JUDUL'];
$ISI = $_POST['ISI'];
$TANGGAL_UPLOAD = $_POST['TANGGAL_UPLOAD'];
$ekstensi_boleh = array('png','jpg');
$nama = $_FILES['GAMBAR']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['GAMBAR']['size'];
$file_tmp = $_FILES['GAMBAR']['tmp_name'];
    if(in_array($ekstensi, $ekstensi_boleh)==true){
        if ($ukuran<1044070) {
        move_uploaded_file($file_tmp, '../img/'.$nama);
        $query = mysqli_query($koneksi,"insert into berita values('','$ID_KATEGORIBERITA','$ID_USER','$JUDUL','$ISI','$TANGGAL_UPLOAD','$nama')");
        if($query){
            echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=berita')</script>";
        }else{
            echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=berita_add')</script>";
        }
        }else{
            echo "<script>alert('Ukuran terlalu besar .');window.location=('media.php?halaman=berita_add')</script>";
        }
    }else{
        echo "<script>alert('ekstensi tidak cocok .');window.location=('media.php?halaman=berita_add')</script>";
    }
//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_BERITA = $_POST['ID_BERITA'];
    $ID_KATEGORIBERITA = $_POST['ID_KATEGORIBERITA'];
    $ID_USER = $_POST['ID_USER'];
    $JUDUL = $_POST['JUDUL'];
    $ISI = nl2br($_POST['ISI']);
    $GAMBAR = $_FILES['GAMBAR']['name'];
    //CEK APAKAH GAMBAR DIUBAH?
    if ($GAMBAR==" ") {
        $query = mysqli_query($koneksi,"UPDATE berita SET ID_KATEGORIBERITA='$ID_KATEGORIBERITA',ID_USER='$ID_USER',JUDUL='$JUDUL',ISI='$ISI' WHERE ID_BERITA='$ID_BERITA'");
    }else{
        $userfile = $_FILES['GAMBAR']['tmp_name'];
        move_uploaded_file($userfile, '../img/'.$GAMBAR);
        $query = mysqli_query($koneksi,"UPDATE berita SET ID_KATEGORIBERITA='$ID_KATEGORIBERITA',ID_USER='$ID_USER',JUDUL='$JUDUL',ISI='$ISI', GAMBAR='$GAMBAR' WHERE ID_BERITA='$ID_BERITA'");
        }          

            if($query){
			    //pemberitahuan dengan metode javascript dan redirect halaman
				echo"<script>alert('Data Berhasil Di Update.');window.location=('media.php?halaman=berita')</script>";
				}else{
				//jika tidak maka 
				echo"<script>alert('Data Gagal Di Update.');window.location=('media.php?halaman=berita_edit')</script>";
				}
    //proses delete
}elseif(isset($_GET['ID_BERITA'])){
    $ID_BERITA = $_GET['ID_BERITA'];
    $query = mysqli_query($koneksi, "delete from berita where ID_BERITA='$ID_BERITA'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=berita')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=berita')</script>";
    }
}


 

 
?>