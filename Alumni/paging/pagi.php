<?php
// Memanggil File Koneksi
require '../config/koneksi.php';

$per_page = 3; // Batas data per halaman

$page = @$_GET['page'];

if($page <= 1) {
  $st = 0;
}else{
  $st = ($page - 1) * $per_page;
}

$prev = $page - 1;
$next = $page + 1;

$st = $st;
$nd = $per_page;

$limit = "limit $st,$nd";

$ambil_data = "SELECT * FROM profil $limit";
$exec = mysql_query($ambil_data);
while($row = mysql_fetch_object($exec)) {
  echo "<h2>" . $row->judul . "</h2>";
  echo "<p>" . $row->isi . "</p>";
  echo "<small>" . $row->penulis . "</small>";
  echo "<hr>";
}

$exec2 = mysql_query("SELECT * FROM profil");
$hitung_data = mysql_num_rows($exec2);
$hitung_data = ceil($hitung_data/$per_page);

if($prev < 1) {
  echo "&laquo; Sebelumnya";
}else{
  echo "<a href='?page=$prev'>&laquo; Sebelumnya</a>";
}
for($i=1; $i<=$hitung_data; $i++) {
  if($page == $i) {
    echo " " . $i . " ";
  }else{
    echo " <a href='?page=$i'>" . $i . "</a> ";
  }
}

if($next > $hitung_data) {
  echo "Selanjutnya &raquo;";
}else{
  echo "<a href='?page=$next'>Selanjutnya &raquo;</a>";
}
?>