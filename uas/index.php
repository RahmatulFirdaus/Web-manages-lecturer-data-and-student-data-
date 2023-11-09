<?php include 'template/header.php' ?>
<div class="container mt-4">
  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
      case 'show-mahasiswa':
        include "mahasiswa/show.php";
        break;
      case 'create-mahasiswa':
        include "mahasiswa/create.php";
        break;
      case 'edit-mahasiswa':
        include "mahasiswa/edit.php";
        break;
      case 'delete-mahasiswa':
        include "mahasiswa/delete.php";
        break;
      case 'profile':
        include "profile.php";
        break;
      case 'show-dosen':
        include "dosen/show.php";
        break;
      case 'create-dosen':
        include "dosen/create.php";
        break;
      case 'edit-dosen':
        include "dosen/edit.php";
        break;
      case 'delete-dosen':
        include "dosen/delete.php";
        break;
      default:
        include "home.php";
        break;
    }
  } else {
    include "home.php";
  }
  ?>
</div>
<?php include 'template/footer.php' ?>
