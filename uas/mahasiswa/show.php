<h2>Data Mahasiswa</h2>
<div class="card">
    <div class="card-body">
        <a href="?page=create-mahasiswa" class="btn btn-primary mb-4">Tambah Data</a>
        <a href="mahasiswa/print.php" class="btn btn-success mb-4" target="_blank">Cetak</a>
        <div class="table-responsive p-2">
            <table class="table table-bordered table-hover" id="data-mahasiswa" width="100%">
                <thead class="table-light">
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'Database/connection.php';
                    $query = mysqli_query($con, "SELECT * FROM mahasiswa");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['prodi']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['telepon']; ?></td>
                            <td>
                                <a class="btn btn-sm btn-success" href="?page=edit-mahasiswa&id=<?php echo $data['id']; ?> ">Edit</a>
                                <a class="btn btn-sm btn-danger" href="?page=delete-mahasiswa&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>