<?php
include('../js/koneksi.php');
require_once("autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from profil");
$html = '<center><h3>Daftar Nama Alumni</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>NISN</th>
 <th>id_status</th>
 <th>NM_LENGKAP</th>
 <th>JENKEL</th>
 <th>TGL_LAHIR</th>
 <th>NO_TELP</th>
 <th>THN_MASUK</th>
 <th>THN_LULUS</th>
 
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['NISN']."</td>
 <td>".$row['id_status']."</td>
 <td>".$row['NM_LENGKAP']."</td>
 <td>".$row['JENKEL']."</td>
 <td>".$row['TGL_LAHIR']."</td>
 <td>".$row['NO_TELP']."</td>
 <td>".$row['THN_MASUK']."</td>
 <td>".$row['THN_LULUS']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>