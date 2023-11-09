<?php
include 'Database/connection.php';
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE id=$id");
echo "<meta http-equiv='refresh' content='0; url=?page=show-mahasiswa'>";
?>