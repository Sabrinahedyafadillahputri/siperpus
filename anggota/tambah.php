<?php
include '../aset/header.php';
include '../koneksi.php';

$query = mysqli_query($kon,("SELECT * FROM level"));
?>

<html>
<head>
<title>Siperpus</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h2>Tambah Anggota</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="kelas">kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">telp</label>
                                <input type="text" name="telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="level">level</label>
                                <select  class="form-control" name="id_level">
                                    <option>Pilih</option>
                                    <?php while($level=mysqli_fetch_assoc($query)): ?>
                                    <option value="<?php echo $level['id_level']; ?>"><?php echo $level['level']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <button type="submit" name="simpan"  class="btn btn-primary mr-auto">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../aset/footer.php';
?>