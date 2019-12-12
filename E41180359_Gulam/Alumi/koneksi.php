<?php

$koneksi = mysqli_connect("localhost","root","","alumni22");

// check koneksi
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>