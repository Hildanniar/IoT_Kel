<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['tambah'])) {

    $id_device = $_POST['id_device'];
    $nama_device = $_POST['nama_device'];
    $kondisi = $_POST['kondisi'];
    $lokasi = $_POST['lokasi'];
    

    
        $query = "INSERT INTO device (id_device, nama_device, kondisi, lokasi) VALUES('$id_device', '$nama_device', '$kondisi', '$lokasi') ";

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