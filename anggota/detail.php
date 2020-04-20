<?php

include '../koneksi.php';

include '../aset/header.php';

$id_anggota = isset($_GET['id_anggota']) ? $_GET['id_anggota'] : '';


$query =  "SELECT * FROM anggota INNER JOIN level USING(id_level) WHERE anggota.id_anggota = '$id_anggota' ";
$res = mysqli_query($kon, $query);
$anggota = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card-body">

                <table class="table">
                

                       
                    <tr>
                        <td>ID</td>
                        <td><?= $anggota['id_anggota']?></td>
                    </tr>
                    <tr>
                        <td>nama</td>
                        <td><?= $anggota['nama']?></td>
                    </tr>
                    <tr>
                        <td>kelas</td>
                        <td><?= $anggota['kelas']?></td>
                    </tr>
                    <tr>
                        <td>telepon</td>
                        <td><?= $anggota['telepon']?></td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td><?= $anggota['username']?></td>
                    </tr>
                    <tr>
                        <td>level</td>
                        <td><?= $anggota['level']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_anggota=<?= $anggota["id_anggota"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_anggota=<?= $anggota["id_anggota"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                 

                </table>
            </div>
        </div>
</body>
</html>
<?php
include '../aset/footer.php';
?>