<?php
include 'Database/connection.php';
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
    $nim = $data['nim'];
    $nama = $data['nama'];
    $prodi = $data['prodi'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];
    $email = $data['email'];
}
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $update = mysqli_query($con, "UPDATE mahasiswa SET
nim='$nim',nama='$nama',prodi='$prodi',alamat='$alamat',email='$email',telepon='$telepon' WHERE id=$id");
    echo "<script>window.location.href = '?page=show-mahasiswa';</script>";
}
?>
<h2>Edit Data Mahasiswa</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="prodi">
                        <option value="-" disabled>- pilih jurusan -</option>
                        <option value="TI" <?php if ($prodi == "TI") echo 'selected'; ?>>Teknik
                            Informatika</option>
                        <option value="SI" <?php if ($prodi == "SI") echo 'selected'; ?>>Sistem
                            Informasi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-2">
                    <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </div>
            </div>
        </form>
    </div>
</div>