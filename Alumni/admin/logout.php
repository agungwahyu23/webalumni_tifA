<?php
session_start();
//menghancurkan session
session_destroy();
echo"<script>alert('Anda Berhasil keluar '); window.location=('index.php')</script>";
?>