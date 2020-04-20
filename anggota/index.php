<?php
 include '../koneksi.php';
 $sql = "SELECT * FROM anggota ORDER BY nama";

 $res = mysqli_query( $kon, $sql);

 $pinjam  = array();
 while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[]=$data;
 }


 include '../aset/header.php';
?>
<div class="container">
  <div class="row mt-4>;">
  <div class="col-md">
  </div>
  </div>
</div>

<div class="card">
<div class="card-header">
    <h2 class="card-title"><i class="fas fa-profil"></i>Data Anggota</h2>
 </div>
 <div class="card-body">
    	<table class="table table-striped">
  <thead>
   
      <th scope="col">#</th>
      <th scope="col">Nama </th>
      <th scope="col">Kelas</th>
      <th scope="col">Telp</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi
       
      </tr>

    
  </thead>
<?php
    $no = 1;
    foreach ($pinjam as $p) { ?>
      
      <tr>
      	<th scope= "row"><?=$no?></th>
      	<td><?=$p['nama'] ?></td>
        <td><?=$p['kelas']?></td>
        <td><?=$p['telp'] ?></td>
        <td><?=$p['username'] ?></td>
        <td><?=$p['password'] ?></td>

        <td>
           <a href="detail.php" class="badge badge-success">Detail</a>
           <a href="edit.php" class="badge badge-warning">Edit</a>
           <a href="hapus.php" class="badge badge-danger">Hapus</a>
        	<!-- sementara dikosongkan -->

        </td>
      </tr>
<?php
  $no++;
    }
    ?>
  </div>
</div>
</table>

<a href="tambah.php" class="badge badge-info"> Tambah Anggota</a>

<?php
include'../aset/footer.php';
?>
