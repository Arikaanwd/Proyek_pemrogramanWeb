<?php
    include "koneksi.php";
    include "function.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <diV class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justyfy-content-between">
                <div class="bg-dark p-1">
                    <a href="tampilData.php" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-3 d-none d-sm-inline" style="color: cadetblue;font-weight: bold;">Booking.com</span>
                    </a><a href="#" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-5 d-none d-sm-inline">Welcome, Admin </span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item py-2 py-sm-0">
                            <a href="beranda.php" class="nav-link text-white">
                                <i class="fa-solid fa-house"></i><span class="fs-5 ms-3 d-none d-sm-inline">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white disabled">
                                <span class="fs-5 d-none d-sm-inline" >Master Data</span><hr class="bg-secondary">
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="customer.php" class="nav-link text-white">
                                <i class="fa-solid fa-people-roof"></i><span class="fs-6 ms-3 d-none d-sm-inline">Data Customer</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="tampil_room.php" class="nav-link text-white">
                                <i class="fa-solid fa-bed"></i><span class="fs-6 ms-3 d-none d-sm-inline">Data Room</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white disabled">
                                <span class="fs-5 d-none d-sm-inline">Transaksi</span><hr class="bg-secondary">
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="booking.php" class="nav-link text-white">
                                <i class="fa-solid fa-clipboard"></i><span class="fs-6 ms-3 d-none d-sm-inline">Data Book</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="laporan.php" class="nav-link text-white">
                                <i class="fa-solid fa-file"></i><span class="fs-6 ms-3 d-none d-sm-inline">Laporan</span>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="#" class="nav-link text-white disabled">
                                <span class="fs-5 d-none d-sm-inline">user</span><hr class="bg-secondary">
                            </a>
                        </li>
                        <li class="nav-item py-2 py-sm-0">
                            <a href="Akun.php" class="nav-link text-white">
                                <i class="fa-regular fa-user"></i><span class="fs-6 ms-3 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10 p-5 pt-2 ">
                <h3><i class="fa-regular fa-user"></i>Profil</h3><hr>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Profil</li>
                        <li class="breadcrumb-item active">Akun</li>
                    </ol>
                </nav>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger me-md-2" type="button">Logout</button>
                    
                </div>
                
                <div class="row">
                    <div class="12">
                        <h3>Akun</h3>
                    </div>
                    <div class="container-header col-4 p-5" id="profil">
                        <div class="foto">
                            <img src="gam/img.jpeg" class="img-thumbnail">
                        </div>
                    </div>
                    <div class="col-8 p-5">
                        <table class="table dataTable my-0" id="dataTable">
                            <tr rowspan="11">
                                <th colspan="3">
                                    Data Diri :
                                </th>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Arika Norma Wahyu Dorroty</td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td>F12.2021.00037</td>
                            </tr>
                            <tr>
                                <td>Tempat/tgl Lahir</td>
                                <td>:</td>
                                <td>KEDIRI/ 22 September 2001</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>Perempuan</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>Perum Putih Permai jl. flores blok i no 12</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td>Islam</td>
                            </tr>
                
                            <tr>
                                <th colspan="3">
                                    Pendidikan :
                                </th>
                            </tr>
                            <tr>
                                <td>SDN SEMAMPIR 4</td>
                                <td>:</td>
                                <td>2007-2013</td>
                            </tr>
                            <tr>
                                <td>SMP NEGERI 6 KEDIRI</td>
                                <td>:</td>
                                <td>2013-2016</td>
                            </tr>
                            <tr>
                                <td>SMA NEGERI 8 KEDIRI</td>
                                <td>:</td>
                                <td>2016-2019</td>
                            </tr>
                            <tr>
                                <th colspan="3">
                                    Hobi :
                                </th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Olahraga <br>
                                    Nonton Film <br>
                                    Traveling <br>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </diV>
</body>
</html>