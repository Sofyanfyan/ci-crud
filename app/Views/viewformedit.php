<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Form Tambah Mahasiswa</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Form Edit Mahasiswa</span>
  </div>
</nav>

<br>
<br>
    <p>
    <button type="button" class="btn btn-secondary" onclick="window.location='<?php echo site_url('mahasiswa/Index')?>'"> 
        Kembali
    </button>
    </p>
<br>
    <p>
        <?=form_open('mahasiswa/updatedata') ?>
        <table>
            <tr>
            <td>NRP :</td>
            <td>
                <input type="text" name="nim" maxlength="14" readonly value="<?= $nim; ?>">
            </td>
            </tr>

            <tr>
            <td>Nama Lengkap :</td>
            <td>
                <input type="text" name="nama" size="60" value="<?= $nama; ?>">
            </td>
            </tr>

            <tr>
                <td>Tempat/Tanggal Lahir :</td>
                 <td>
                    <input type="text" name="tempat" size="30" value="<?= $tempat; ?>" > / <input type="date"
                    name="tanggal" value="<?= $tanggal; ?>">
                </td>
            </tr>

            <tr>
                <td>Alamat :</td>
                 <td>
                    <textarea name="alamat" cols="50" rows="5"> <?= $alamat; ?> </textarea>
                </td>
            </tr>

            <tr>
                <td>Telp :</td>
                 <td>
                    <input type="text" name="telp" pattern="{0-9}+" value="<?= $telp; ?>">
                </td>
            </tr>

            <tr>
                <td></td>
                 <td>
                    <input type="submit" class="btn btn-success" value="Update Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
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