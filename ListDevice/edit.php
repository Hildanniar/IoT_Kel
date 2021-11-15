<?php 
error_reporting(0);
require 'koneksi.php';
if (isset($_GET["id"])) {
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi, "SELECT * FROM device WHERE id_device = '$id'");
    while($row = mysqli_fetch_array($result)) {
        $id_device = $row["id_device"];
        $nama_device= $row["nama_device"];
        $kondisi= $row["kondisi"];
        $Lokasi= $row["lokasi"];
        
        }

    }
    else {
    header("location:index.php");
}
    
 ?>
<!DOCTYPE html>
<html>
<body>
	
	<h3>Edit Data Device</h3>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				    <tr>
        <td>Id_Device</td>
        <td>:</td>
        <td><input type="text" name="ID_Device" required></td>
      </tr>
      <tr>
        <td>Nama Device</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" required></td>
      </tr>
      <tr>
        <td>Kondisi</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" required></td>
      </tr>
      <tr>
        <td>Lokasi</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" required></td>
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