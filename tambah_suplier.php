<?php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");
if (isset($_POST['tambah'])) {
    if (tambah_supplier($_POST) > 0) {
        // echo "<script>
        // alert ('data berhasil ditambahkan') ;
        // document.location.herf='data_suplier.php';
        // </script>";
        header('location:data_suplier.php');
    } else {
        // echo "<script>
        // alert ('data gagal ditambahkan') ;
        // document.location.herf='data_suplier.php';
        // </script>";
        header('location:data_suplier.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>tambah data supplier</h1>
    <form action="" method="post">
        <div>
            <label for="nama"> Nama supplier: </label>
            <input type="text" name="nama" id="nama" required>
            <div>
                <label for="harga">No Telp:</label>
                <input type="number" name="no_telp" id="no_telp" required>
            </div>
            <div>
                <label for="stok">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required>
            </div>
        </div>
        <button type="submit" name="tambah">tambah data</button>
    </form>
</body>

</html>