<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-name" content="focus" />
    <title>SMT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.rtl.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.rtl.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-grid.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-grid.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-grid.rtl.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-grid.rtl.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-reboot.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-reboot.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-reboot.rtl.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-reboot.rtl.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-utilities.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-utilities.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-utilities.rtl.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-utilities.rtl.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>" type="text/css">
</head>
<?php
$uri = service('uri');
?>
<body>
    <div class="container">
        <br>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a <?= ($uri->getSegment(1) == '') ? 'class="nav-link active"' : 'class="nav-link"' ?> aria-current="page" href="<?= site_url('/') ?>">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a <?= ($uri->getSegment(1) == 'datajurusan') ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('datajurusan') ?>">Data Jurusan</a>
            </li>
            <li class="nav-item">
                <a <?= ($uri->getSegment(1) == 'tambahdata') ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('tambahdata') ?>">Tambah Data Mahasiswa</a>
            </li>
        </ul>
        <br>
    </div>
    <?= $this->renderSection('content') ?>
</body>

</html>