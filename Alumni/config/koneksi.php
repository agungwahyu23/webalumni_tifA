<?php

$koneksi = mysqli_connect("localhost","root","","alumni_test_new");

// check koneksi
if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>