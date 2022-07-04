<?php
session_start();
if ($_SESSION['username'] == '') {
  header('location:../index.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <base href="praktikum2020"> -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <title>UNISKA</title>
  <style>
    body {
      margin-bottom: 6em;
    }

    * {
      font-size: 14px;
    }

    .title {
      font-size: 28px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      text-shadow: 0px 0.5px 2px;
    }

    footer {
      position: fixed;
      background-color: rgb(12, 87, 131);
      bottom: 0;
      width: 100%;
      padding: 10px 0;
      color: #fff;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: 1.5px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <h3 class="mt-4 mb-4 title">Aplikasi Data Mahasiswa</h3>
    <div class="row">
      <div class="col-md-3 col-sm-12 mb-4">
        <?php include 'nav.php'; ?>
      </div>
      <div class="col-md-9 col-sm-12">
        <?php include '../koneksi.php'; ?>
        <?php
        error_reporting(0);
        switch ($_GET['page']) {
          default:
            include "dashboard.php";
            break;
          case "dashboard";
            include "dashboard.php";
            break;
            // mahasiswa 
          case "mahasiswa-show";
            include "../mahasiswa/mahasiswa_show.php";
            break;
          case "mahasiswa-add";
            include "../mahasiswa/mahasiswa_add.php";
            break;
          case "mahasiswa-edit";
            include "../mahasiswa/mahasiswa_edit.php";
            break;
          case "mahasiswa-delete";
            include "../mahasiswa/mahasiswa_delete.php.php";
            break;
          case "mahasiswa-update";
            include "../mahasiswa/mahasiswa_update.php";
            break;
            // user 
          case "user-add";
            include "../user/user_add.php";
            break;
          case "user-show";
            include "../user/user_show.php";
            break;
          case "user-edit";
            include "../user/user_edit.php";
            break;
          case "user-update";
            include "../user/user_update.php";
            break;
            // dosen
          case "add-dosen";
            include "../dosen/add_dosen.php";
            break;
          case "show-dosen";
            include "../dosen/show_dosen.php";
            break;
          case "delete-dosen";
            include "../dosen/delete_dosen.php";
            break;
          case "print-dosen";
            include "../dosen/print_dosen.php";
            break;
          case "edit-dosen";
            include "../dosen/edit_dosen.php";
            break;
          case "update-dosen";
            include "../dosen/update_dosen.php";
            break;
        }
        ?>
      </div>
    </div>
  </div>
  <footer>
    <div class="container ">
      <span>&copy; 2022 - FTI UNISKA</span>
    </div>
  </footer>
</body>