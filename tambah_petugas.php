<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
<div class="container">
    <h3>Tambah Petugas</h3>

    <form action="proses_tambah_petugas.php" method="post">

        ID Petugas :

        <input type="number" name="id_petugas" value="" class="form-control">

        Nama :

        <input type="text" name="nama_petugas" value="" class="form-control">

        Username :

        <input type="text" name="username_petugas" value="" class="form-control">

        Password :

        <input type="number" name="password_petugas" value="" class="form-control">

         Level :

        <select name="level_petugas" value="" class="form-control">
        <option value="1">Petugas</option>
        <option value="2">Manager</option>
        <option value="3">Admin</option>
        </select>
        
        <input type="submit" name="simpan" value="Buat Akun" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>