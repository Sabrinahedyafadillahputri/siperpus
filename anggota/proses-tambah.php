<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama']; 
    $kelas = $_POST['kelas'];
    $tlp = $_POST['tlp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = $_POST['id_level'];

    $query = mysqli_query($kon, "INSERT INTO anggota (nama, kelas, tlp, username, password,id_level) VALUES 
                         ('$nama', '$kelas', '$tlp', '$username', '$password', '$id_level')");
    // $res = mysqli_query($koneksi, $query);
    $count = mysqli_affected_rows($kon);
    // var_dump($query);
    // var_dump($_POST);
    if($query > 0){
        header("location: index.php");
    }
    else{
        header("location: tambah.php");
    }
}
else{
    header ("location: tambah.php");
}
?>