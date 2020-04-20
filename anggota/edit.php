<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_anggota = isset($_GET['id_anggota']) ? $_GET['id_anggota'] : '';
$query= "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota='$id_anggota' ";
$res=mysqli_query($kon,$query);
$anggota=mysqli_fetch_assoc($res);
 ?>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 				<div class="card" style="width: 100%">
 					<div class="card header" style="width: 100%">
 						<h2 class="card-title"><i class="fas fas fa-book"></i> Edit Data Buku</h2>
 					</div>
 					<div class="card-body">
 						<form action="proses-edit.php" method="post">
 							<table class="table">
 								<input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
 								<tr>
 									<td>nama</td>
 									<td><input style="width: 100%" type="text" name="nama" value="<?php echo $anggota['nama']; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Penerbit</td>
 									<td><input style="width: 100%" type="text" name="penerbit" value="<?php echo $buku["penerbit"]; ?>"required></td>
 								</tr>
 								<tr>
 									<td>Pengarang</td>
 									<td><input style="width: 100%" type="text" name="pengarang" value="<?= $buku['pengarang']?>" required></td>
 								</tr>
 								<tr>
 									<td>Ringkasan</td>
 									<td style=""><textarea style="width: 100%; height: 100%;" value="<?= $buku['cover']; ?>" type="textarea" name="ringkasan" required><?= $buku['ringkasan']; ?></textarea></td>
 								</tr>
 								<input style="width: 100%" type="hidden" name="cover" value="<?= $buku['cover']?>">
 								<tr>
 									<td>Stok</td>
 									<td><input style="width: 100%" type="number" name="stok" value="<?= $buku['stok']; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Kategori</td>
 									<td>
 										<select style="width: 100%" name="id_kategori" required>
 											<option value="">--Pilih Kategori--</option>
 											<?php  
 											$sql1 = mysqli_query($kon, "SELECT * FROM kategori");
 											while ($query_kategori = mysqli_fetch_assoc($sql1)) : ?>
 											<option value="<?php echo $query_kategori['id_kategori']; ?>">
 												<?php echo $query_kategori['id_kategori']; ?>
 											</option>
 										<?php endwhile; ?>
 										</select>
 									</td>
 								</tr>
 								<tr>
 									<th></th>
 									<th><button style="width: 100%; height: 70%" type="submit" class="btn btn-primary" name="simpan">EDIT</button></th>
 								</tr>
 							</table>
 						</form>
 					</div>
 				</div>
 		</div>
 	</div>
 </div>
 
 