<?php
    include "koneksi.php";
?>

<html>
<head>
    <link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Booking.Com</title>
</head>
<body>
    <div class="container">
        <div class="row p-3 fixed-top bg-info shadow ">
            <div class="col-4 text-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <h3>Booking.COM</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col-4 text-center">
                <nav class="navbar navbar-expand-lg ">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="tampilData.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="room.php">Room</a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="beranda.php">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-2"></div>
            <div class="col-2 text-center">
                <nav class="navbar navbar-expand-lg ">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link bg-success " href="reservasi_room.php"> Book Now </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <a class="navbar-brand" href="#">
                    <h3>Booking.COM</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-3"></div>
            <div class="col-1">
                <a href="tampilData.php">
                    <i class="fa-solid fa-xmark" style="font-size:50px;color:black;"></i>
                </a>
            </div>
        </div>
    </div>
        <?php
            if(isset($_POST['simpan'])){
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $jurusan = $_POST['jurusan'];
                $kelamin = $_POST['kelamin'];
                $alamat = $_POST['alamat'];

                $query_simpan = "INSERT INTO mhs SET nim='$nim', nama_mahasiswa='$nama', kode_jurusan='$jurusan', jenis_kelamin='$kelamin', alamat='$alamat'";

                $simpan = $conn->query ($query_simpan);
                if($simpan){
                    echo "<div class='alert alert-success'>Data Berhasil Disimpan</div>";

                }else {
                    echo "<div class='alert alert-danger'>Data Gagal Disimpan</div>";
                }
            }
            
        ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <form action="" method="post">
                    <h3 class="text-center">Confirm Your Reservasi</h3>
                    <br>
                    <div>
                        <label></label>
                        <input type="text" class="form-control" name="nama" placeholder="Name">
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <input type="text" class="form-control" name="tlp" placeholder="Phone">
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <textarea class="form-control" name="alamat" placeholder="Address"></textarea>
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <input type="text" class="form-control" name="kodepos" placeholder="Pos Code">
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <input type="text" class="form-control" name="kota" placeholder="City">
                    </div>
                    <br>
                    <div>
                        <label></label>
                        <input type="text" class="form-control" name="negara" placeholder="Country">
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-success">Confirm Your Reservasi</button>
                    </div>
                </form>
            </div>
            <div class="col-6 p-5">
                <table class="table">
                    <tr>
                        <td><?php echo "Name";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['nama'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Email";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['email'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Phone";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['tlp'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Address";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['alamat'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Pos Code";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['kodepos'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "City";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['kota'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Country";?></td>
                        <td><?php echo ":";?></td>
                        <td><?php echo $_POST['negara'];?></td>
                    </tr>
                </table>
                
                <a href="tampilData.php" class="btn btn-success" name="simpan">Simpan</a>
            
            </div>
        </div>
    </div>

    
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><br></p>
            </div>
        </div>
    </div>

    <footer class="container-fluid" style="background-color: black;color: white;">
        <div class="row">
            <div class="col-4 p-3">
                <form>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Search here">
                </div>
                </form>
            </div>
        </div>

        <div class="row p-4">
            <div class="col-1"></div>
            <div class="col-3">
                <h6>Alamat</h6>
                <p>Little Palm Island Resort & Spa
                28500 Overseas Highway
                Little Torch Key, FL, 33042
                </p>
                <a href="#">Map & Directions</a>
            </div>

            <div class="col-3">
                <h6>HOTEL DIRECT</h6>
                <p>032-039-2829</p>
                <br>
                <h6>ROOM RESERVATIONS</h6>
                <p>024-029-8362</p>
            </div>

            <div class="col-3 p-4 text-center" style="font-size: 40px;">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <hr>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row p-2 text-center">
            <div class="col-12">
                <small>
                copy right by- Arikanwd    
                </small>
            </div>
        </div>
    </footer>


</body>
</html>