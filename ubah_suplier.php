<?php
require 'functions.php';
if (isset($_POST['ubah'])) {
    if (ubah_supplier($_POST) > 0) {
        header('location:data_suplier.php');
        // echo "<script>
        // alert ('data berhasil diubah') ;
        // document.location.herf='data_suplier.php';
        // </script>";
    } else {
        header('location:data_suplier.php');
        // echo "<script>
        // alert ('data gagal diubah') ;
        // document.location.herf='data_suplier.php';
        // </script>";
    }
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$supplier = query("SELECT * FROM supplier WHERE id_supplier =  $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ubah data supplier</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $supplier['id_supplier']; ?>">
        <div>
            <label for="nama"> Nama supplier: </label>
            <input type="text" name="nama" id="nama" value="<?php echo $supplier["nama_supplier"]; ?>" required>
            <div>
                <label for="harga">No Telp:</label>
                <input type="number" name="no_telp" id="no_telp" value="<?php echo $supplier["no_telp"]; ?>" required>
            </div>
            <div>
                <label for="stok">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $supplier["alamat"]; ?>" required>
            </div>
        </div>
        <button type="submit" name="ubah">ubah data</button>
    </form>
</body>

</html>