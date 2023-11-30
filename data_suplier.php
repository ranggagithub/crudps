<?php
//untuk akses fungsi di file functions.php
require 'functions.php';
$supplier = query("SELECT * FROM supplier");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Data Suplier</h1>
    <div>
        <button type="button" class="btn btn-info"><a href="tambah_suplier.php">Tambah</a></button>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>no</th>
            <th>id_supplier</th>
            <th>nama_supplier</th>
            <th>no_telp</th>
            <th>alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($supplier as $supp) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $supp['id_supplier']; ?></td>
                <td><?= $supp['nama_supplier']; ?></td>
                <td><?= $supp['no_telp']; ?></td>
                <td><?= $supp['alamat']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-lg"><a href="ubah_suplier.php?id=<?php echo $supp['id_supplier'];?>">Edit</a></button>
                    <button type="button" class="btn btn-secondary btn-lg"><a href="hapus_suplier.php?id=<?php echo $supp['id_supplier'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>