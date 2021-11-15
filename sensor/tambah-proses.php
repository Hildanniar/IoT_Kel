<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['tambah'])) {

    $id_sensor = $_POST['id_sensor'];
    $nama_sensor = $_POST['nama_sensor'];
    $deskripsi = $_POST['deskripsi'];
    $kondisi = $_POST['kondisi'];
    $nilai = $_POST['nilai'];

    
        $query = "INSERT INTO sensor (id_sensor, nama_sensor, deskripsi, kondisi,nilai) VALUES('$id_sensor', '$nama_sensor', '$deskripsi', '$kondisi' , '$nilai') ";

        $result = mysqli_query($koneksi, $query);
if (!$result) {
            die("Gagal Input data " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else 
        {
            echo "<script>alert('Data berhasil ditambahkan');document.location.href='index.php'</script> ";
        }
}

?>