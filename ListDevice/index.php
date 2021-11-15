<?php
  error_reporting(0);
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>HelloSuhu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark " >
            <a class="navbar-brand font-weight-bold text-white " href="page-top">HaloSuhu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger text-white" href="index_admin.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="#">Device</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="#">Sensor</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link js-scroll-trigger text-white" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
    </div>
    </nav>


<div class="container my-3">
  <h1 style="text-align: center;" class="text-dark">Informasi Device</h1>
  <br>
  <center><a class="btn btn-dark" href="tambah.php">
  Add Data</a></center>
  <br>
    <form>
                <section class="text-dark">
                  <br>
                  <table border="1" style="margin: auto;" width="1000px" height="200px">
                    <thead>
                      <tr style="text-align: center;">
                       <th width="10px">Id_Device</th>
                        <th width="100px">Nama Device</th>
                        <th width="100px">Kondisi</th>
                        <th width="100px">Lokasi</th>
                        <th width="100px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                 <?php
                  $no=0;
                  $result = mysqli_query($koneksi, "SELECT * FROM device ORDER BY id_device ASC");
                  while($row = mysqli_fetch_array($result)) {
                      $no++
                ?>
                      <tr align="center"> 
                        <td><?php echo $row['id_device'];?></td>
                        <td><?php echo $row['nama_device'];?></td>
                        <td><?php echo $row['kondisi'];?></td>
                        <td><?php echo $row['lokasi'];?></td>
                         <td scope="row">
                           <a href="edit.php?id=<?php echo $row['id_device'];?>"><button type="button" class="btn btn-warning">Edit</button></a>
                           <a href="hapus.php?id=<?php echo $row['id_device'];?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                        </td>
                  </tr>
                  <?php } ?>
                </tbody>
                  </table>
                </section>
          </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>