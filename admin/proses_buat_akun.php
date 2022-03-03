<?php
if($_POST){
    $nama = $_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='buat_akun.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='buat_akun.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='buat_akun.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into user (nama, username, password, email) value ('".$nama."','".$username."','".md5($password)."','".$email."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses membuat akun');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='buat_akun.php';</script>";
        }
    }
}
?>