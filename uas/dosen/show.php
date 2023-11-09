<h2>Data Dosen</h2>
<div class="card">
    <div class="card-body">
        <a href="?page=create-dosen" class="btn btn-primary mb-4">Tambah Data</a>
        <a href="dosen/print.php" class="btn btn-success mb-4" target="_blank">Cetak</a>
        <div class="table-responsive p-2">
            <table class="table table-bordered table-hover" id="data-dosen" width="100%">
                <thead class="table-light">
                    <tr>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'Database/connection.php';
                    $query = mysqli_query($con, "SELECT * FROM dosen");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $data['nidn']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['telepon']; ?></td>
                            <td><?php echo $data['jenisKelamin']; ?></td>
                            <td><?php echo $data['agama']; ?></td>
                            <td>
                                <a class="btn btn-sm btn-success" href="?page=edit-dosen&id=<?php echo $data['id']; ?> ">Edit</a>
                                <a class="btn btn-sm btn-danger" href="?page=delete-dosen&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus data ini?')">Hapus</a>
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