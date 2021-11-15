<?php
error_reporting(0);
include 'koneksi.php';

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_device		= $_POST['id_device'];	
	$nama_device	= $_POST['nama_device'];	
	$kondisi		= $_POST['kondisi'];	
	$lokasi			= $_POST['lokasi'];	
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE device SET id_device='$id_device', nama_device='$nama_device', kondisi='$kondisi', lokasi='$lokasi' WHERE id_device='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>