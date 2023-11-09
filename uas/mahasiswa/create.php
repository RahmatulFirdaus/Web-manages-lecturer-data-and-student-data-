<?php
include 'Database/connection.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($con, "INSERT INTO
mahasiswa(nim,nama,prodi,alamat,email,telepon)
VALUES('$nim','$nama','$prodi','$alamat','$email','$telepon')");
    echo $nim . '<br>';
    echo $nama . '<br>';
    echo $prodi . '<br>';
    echo $alamat . '<br>';
    echo $email . '<br>';
    echo $telepon . '<br>';
    header("Location:?page=show-mahasiswa");
}
?>
<h2>Tambah Data Mahasiswa</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="prodi">
                        <option value="">- pilih jurusan -</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="telepon" name="telepon" required>
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