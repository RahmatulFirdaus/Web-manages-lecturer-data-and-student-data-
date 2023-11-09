<?php
include 'Database/connection.php';
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM dosen WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
    $nidn = $data['nidn'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];
    $email = $data['email'];
    $jenisKelamin = $data['jenisKelamin'];
    $agama = $data['agama'];
}
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $update = mysqli_query($con, "UPDATE dosen SET
nidn='$nidn',nama='$nama',alamat='$alamat',email='$email',telepon='$telepon',jenisKelamin='$jenisKelamin',agama='$agama' WHERE id=$id");
    echo "<script>window.location.href = '?page=show-dosen';</script>";
}
?>
<h2>Edit Data Dosen</h2>
<div class="card mt-4">
    <div class="card-body">
        <form method="post">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo $nidn; ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
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
                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="jenisKelamin">
                        <option value="-" disabled>- pilih jenis kelamin -</option>
                        <option value="Pria" <?php if ($jenisKelamin == "Pria") echo 'selected'; ?>>Pria</option>
                        <option value="Wanita" <?php if ($jenisKelamin == "Wanita") echo 'selected'; ?>>Wanita</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $agama; ?>" required>
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