  <?php
    error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>HalloSuhu</title>
</head>
<body>
  
  <h3>Tambah Sensor</h3>
  
  <form action="tambah-proses.php" method="post">
    <table cellpadding="3" cellspacing="0">
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
        <input type="hidden" name="id_monitor" size="30" required>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit" name="tambah" value="Tambah"></td>
      </tr>
    </table>
  </form>
</body>
</html>