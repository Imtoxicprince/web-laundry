<?php
if ($_POST) {
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $alamat=$_POST['alamat'];

        include "koneksi.php";
        if (empty($password)) {
            $update=mysqli_query($koneksi,"update member set nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', tlp='".$tlp."', alamat='".$alamat."' where id_member = '".$id_member."'") or die(mysqli_error($koneksi));
            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='pelanggan.php';</script>";
            }
            else {
                echo "<script>alert('Gagal update pelanggan');location.href='edit_pelanggan.php?id_member=".$id_member."';</script>";
            }
        }
    }
?>