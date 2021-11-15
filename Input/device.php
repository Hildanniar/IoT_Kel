<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "iot";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$kondisi_device     = "";
$nama_device        = "";
$sukses             = "";
$error              = "";

if (isset($_POST['simpan'])) { //untuk create
    $kondisi_device     = $_POST['kondisi_device'];
    $nama_device        = $_POST['nama_device'];

    if ($kondisi_device && $nama_device) {
        //untuk insert
        $sql1   = "insert into device(kondisi_device,nama_device) values ('$kondisi_device','$nama_device')";
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
    <title>Input Device</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Input Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:60;url=device.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:60;url=device.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="kondisi_device" class="col-sm-2 col-form-label">Kondisi Device</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kondisi_device" name="kondisi_device" value="<?php echo $kondisi_device ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_device" class="col-sm-2 col-form-label">Nama Device</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_device" name="nama_device" value="<?php echo $nama_device ?>">
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