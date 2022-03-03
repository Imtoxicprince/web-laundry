<?php
if($_POST){
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];


    include "koneksi.php";
    $insert=mysqli_query($koneksi,"insert into member (nama, jenis_kelamin, tlp, alamat) 
    value ('".$nama."','".$jenis_kelamin."','".$tlp."','".$alamat."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses menambahkan pelanggan!');location.href='pelanggan.php';</script>";
    } 
    else {
        echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
    }
 }

?>