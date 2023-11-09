<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Dosen</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
            border-color: #000;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1 align="center">Laporan Data Dosen</h1>
    <table border="1" cellpadding="4">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jenis kelamin</th>
                <th>Agama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../Database/connection.php';
            $query = mysqli_query($con, "SELECT * FROM dosen");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td align="center" width="10%"><?php echo $data['nidn']; ?></td>
                    <td width="20%"><?php echo $data['nama']; ?></td>
                    <td width="30%"><?php echo $data['alamat']; ?></td>
                    <td width="13%"><?php echo $data['email']; ?></td>
                    <td align="center" width="12%"><?php echo $data['telepon']; ?></td>
                    <td align="center" width="10%"><?php echo $data['jenisKelamin']; ?></td>
                    <td width="20%"><?php echo $data['agama']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>