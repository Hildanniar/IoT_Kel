<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "iot";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nama_sensor        = "";
$deskripsi_sensor   = "";
$kondisi_sensor     = "";
$Nilai_sensor       = "";
$Tanggal_sensor     = "";
$sukses             = "";
$error              = "";

if (isset($_POST['simpan'])) { //untuk create
    $nama_sensor     = $_POST['nama_sensor'];
    $deskripsi_sensor        = $_POST['deskripsi_sensor'];
    $kondisi_sensor         = $_POST['kondisi_sensor'];
    $Nilai_sensor         = $_POST['Nilai_sensor'];
    $Tanggal_sensor         = $_POST['Tanggal_sensor'];

    if ($nama_sensor && $deskripsi_sensor && $kondisi_sensor && $Nilai_sensor && $Tanggal_sensor) {
        //untuk insert
        $sql1   = "insert into sensor(nama_sensor,deskripsi_sensor,kondisi_sensor,Nilai_sensor,Tanggal_sensor) values ('$nama_sensor','$deskripsi_sensor','$kondisi_sensor','$Nilai_sensor','$Tanggal_sensor')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Berhasil memasukkan data baru";
        } else {
            $error      = "Gagal memasukkan data";
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Sensor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Input Sensor
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:60;url=sensor.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:60;url=sensor.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama_sensor" class="col-sm-2 col-form-label">Nama Sensor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_sensor" name="nama_sensor" value="<?php echo $nama_sensor ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi_sensor" class="col-sm-2 col-form-label">Deskripsi Sensor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi_sensor" name="deskripsi_sensor" value="<?php echo $deskripsi_sensor ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kondisi_sensor" class="col-sm-2 col-form-label">Kondisi Sensor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kondisi_sensor" name="kondisi_sensor" value="<?php echo $kondisi_sensor ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nilai_sensor" class="col-sm-2 col-form-label">Nilai Sensor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nilai_sensor" name="Nilai_sensor" value="<?php echo $Nilai_sensor ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_sensor" class="col-sm-2 col-form-label">Tanggal Sensor</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_sensor" name="Tanggal_sensor" value="<?php echo $Tanggal_sensor ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>