<?php
//mulai proses edit data
error_reporting(0);
include 'koneksi.php';
 
//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_sensor		= $_POST['id_sensor'];	
	$nama_sensor	= $_POST['nama_sensor'];	
	$deskripsi		= $_POST['deskripsi'];	
	$kondisi		= $_POST['kondisi'];	
	$nilai			= $_POST['nilai'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE sensor SET id_sensor='$id_sensor', nama_sensor='$nama_sensor', deskripsi='$deskripsi, kondisi='$kondisi', nilai='$nilai' WHERE id_sensor='$id'") or die(mysql_error());
	
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