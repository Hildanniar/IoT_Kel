<?php 
error_reporting(0);
require 'koneksi.php';
if (isset($_GET["id"])) {
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi, "SELECT * FROM sensor WHERE id_sensor = '$id'");
    while($row = mysqli_fetch_array($result)) {
        $id_sensor = $row["id_sensor"];
        $nama_sensor= $row["nama_sensor"];
        $deskripsi= $row["deskripsi"];
        $kondisi= $row["kondisi"];
        $nilai= $row["nilai"];
        }

    }
    else {
    header("location:index.php");
}
    
 ?>
<!DOCTYPE html>
<html>
<body>
	
	<h3>Edit Data Sensor</h3>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				  <tr>
        <td>Id_Sensor</td>
        <td>:</td>
        <td><input type="text" name="id_sensor" required></td>
      </tr>
      <tr>
        <td>Nama Sensor</td>
        <td>:</td>
        <td><input type="text" name="nama_sensor" size="30" required></td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td><input type="text" name="deskripsi" size="30" required></td>
      </tr>
      <tr>
        <td>Kondisi</td>
        <td>:</td>
        <td><input type="text" name="kondisi" size="30" required></td>
      </tr>
      <tr>
        <td>Nilai</td>
        <td>:</td>
        <td><input type="text" name="nilai" size="30" required></td>
      </tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>