<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
<div class="container">
    <h3>Tambah Pelanggan</h3>

    <form action="proses_tambah_pelanggan.php" method="post">

        ID Pelanggan :

        <input type="number" name="id_pelanggan" value="" class="form-control">

        Nama :

        <input type="text" name="nama_pelanggan" value="" class="form-control">

        Alamat :

        <input type="text" name="alamat_pelanggan" value="" class="form-control">

        No telepon :

        <input type="number" name="notelp_pelanggan" value="" class="form-control">
        
        <input type="submit" name="simpan" value="Buat Akun" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>