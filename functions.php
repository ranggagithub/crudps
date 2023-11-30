<?php 
//function untuk koneksi db
function koneksi () {
    $conn = mysqli_connect ("localhost","root","","penjualan") ;
    return $conn ;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query ($conn, $sql) ;

    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows [] = $row;
    }
    return $rows ;
}

function tambah_supplier($data){
    $conn = koneksi();

    $nama = $data['nama'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql="INSERT INTO supplier VALUES (null,'$nama','$no_telp','$alamat')" ;

    mysqli_query($conn,$sql) ;

    return mysqli_affected_rows($conn) ;
}

function hapus_supplier($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = $id") ;
}

function ubah_supplier ($data) {
    $conn = koneksi () ;

    $id = $data ['id'] ;
    $nama = $data ['nama'] ;
    $no_telp = $data ['no_telp'] ;
    $alamat = $data ['alamat'] ;

    $sql = "UPDATE supplier SET nama_supplier = '$nama',
                                no_telp = '$no_telp',
                                alamat = '$alamat'
                        WHERE id_supplier = $id" ;
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn) ;
}

?>