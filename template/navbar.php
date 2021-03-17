<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cari</title>

    <!-- CDNs -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />

    <style>
      .paging-button {
        font-size: 1.5em;
      }
    </style>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="bg-light" style="min-height: 100vh;">
    <!-- NAVBAR -->
    <nav
      class="navbar navbar-expand-lg navbar-dark shadow-sm p-3 sticky-top"
      style="background-color: #0a2e36"
    >
      <div class="container">
        <a class="navbar-brand" href="#">DTKS Langonsari</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="berandaNav">
              <a class="nav-link" href="./"
                ><i class="bi bi-speedometer"></i> Beranda<span class="sr-only"
                  >(current)</span
                ></a
              >
            </li>
            <li class="nav-item" id="cariNav">
              <a class="nav-link" href="cari.php"
                ><i class="bi bi-zoom-out"></i> Cek/Cari DTKS</a
              >
            </li>
            <li class="nav-item" id="ajukanNav">
              <a class="nav-link" href="ajukan.php"
                ><i class="bi bi-plus-circle"></i> Pengajuan Baru</a
              >
            </li>
            <li class="nav-item" id="ajukanNav">
              <a class="nav-link" href="logout.php"
                ><i class="bi bi-box-arrow-in-left"></i> Logout</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->