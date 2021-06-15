<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="<width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Daftar Mahasiswa</span>
  </div>
</nav>
    <table border="1">
    <br>
    <br>
    <br>
    <p>
        <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url('mahasiswa/formtambah')?>'"> 
        Tambah Data
        </button>
    </p>
    <thread>
        <tr>
            <th scope='col'>No</th>
            <th  scope='col'>NRP</th>
            <th  scope='col'>Nama Mahasiswa</th>
            <th  scope='col'>Tempat/Tgl.Lahir</th>
            <th  scope='col'>Alamat</th>
            <th  scope='col'>Telp.HP</th>
            <th  scope='col'>Aksi</th>
        </tr>
    </thread>

    <tbody>
        <?php
            $nomor = 0;
            foreach ($tampildata as $row):
                $nomor++;
        ?>
        <tr>
                <th  class="table-secondary" ><?= $nomor; ?></th>
                <td><?= $row->mhsnim ?></td>
                <td><?= $row->mhsnama ?></td>
                <td><?= $row->mhstmplahir . '/' .$row->mhstgllahir ?></td>
                <td><?= $row->mhsalamat ?></td>
                <td><?= $row->mhstelp ?></td>
                <td><button type="button" class="btn btn-danger" onclick = "hapus('<?= $row->mhsnim ?>')">Hapus</button>
                <button type="button" class="btn btn-warning" onclick="window.location='<?php echo site_url('mahasiswa/formedit/'.$row->mhsnim)?>'"> 
                Edit
        </button>
                </td>
        </tr>
        <?php
        endforeach;
        ?> 
    </tbody>
    </table>
    <script>
        function hapus(nim){
            pesan= confirm('Yakin hapus data mahasiswa ?');

            if( pesan) {
                window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + nim;
            } else return false;
        }
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>