
<?php
//class ezpdf yg di panggil
include "pdf/class.ezpdf.php"; 
$pdf = new Cezpdf('A4','lanscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('images.jpg',30,768,70);

//Teks di tengah atas untuk judul header
$pdf->addText(195, 820, 12,'<b>Pemerintah Kabupaten Jember</b>');
$pdf->addText(230, 805, 12,'<b>Dinas Pendidikan</b>');
$pdf->addText(160, 790, 14,'<b>Sekolah Menengah Kejuruan Trunojoyo</b>');
$pdf->addText(90, 775, 10,'Jl. Danau Toba, Lingkungan Panji, Tegalgede, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124');
//Garis atas untuk header
$pdf->line(2, 770, 590, 770);
$pdf->addText(210, 760, 10,'<b>Laporan Data Alumni</b>');
//Garis bawah untuk footer
$pdf->line(2, 50, 590, 50);

//Teks kiri bawah
date_default_timezone_set("Asia/Jakarta");
$pdf->addText(410,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

//Koneksi ke database dan tampilkan datanya
mysql_connect("localhost", "root", "");
mysql_select_db("alumni_test");

$Dari=$_POST['Dari'];
$Sampai=$_POST['Sampai'];

$tampil = "SELECT * FROM profil WHERE (THN_LULUS BETWEEN '$Dari' AND '$Sampai');";
$sql = mysql_query($tampil);  
$jml = mysql_num_rows($sql);
if ($jml > 0){
$i = 1;
while($r = mysql_fetch_array($sql)) {
//Format Menampilkan data di ezPdf
 $data[$i]=array('No'=>$i,
          'NISN'=>"$r[NISN]",
       'Nama Lengkap'=>"$r[NM_LENGKAP]",
       'Jenis Kelamin'=>"$r[JENKEL]",
       'No HP'=>"$r[NO_TELP]",
       'Tahun Lulus'=>"$r[THN_LULUS]"
       );
 $i++;

}

//Tampilkan Dalam Bentuk Table
$pdf->ezTable($data);

$pdf->ezText("\nPeriode: $Dari s/d $Sampai");

// Penomoran halaman
$pdf->ezStartPageNumbers(700, 20, 8);
$pdf->ezStream();
}

else{

 echo "
 <script>
 alert('Tidak Di Temukan Data Pelamar');
 </script>
 ";

}
?>