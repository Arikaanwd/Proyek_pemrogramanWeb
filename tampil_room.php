<?php
    include "koneksi.php";
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
                    </a>
                    <a href="#" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-5 d-none d-sm-inline ">Welcome, Admin </span>
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
                            <a href="tampilRoom.php" class="nav-link text-white">
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
                <h3><i class="fa-solid fa-bed" style="margin-right:10px;"></i>Data Room</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Master Data</li>
                        <li class="breadcrumb-item active">Data Room</li>
                    </ol>
                </nav>
                <a href="#" class="btn btn-primary mb-3"><i class="fa-regular fa-square-plus" style="margin-right:5px;"></i>Tambah Data Room</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Room Id</th>
                            <th>Room Name</th>
                            <th>Room Price</th>
                            <th>Room Fasilitas</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /*$syarat = "";
                        if(isset($_GET['room']) and $_GET['room']!="semua"){
                            $syarat = " WHERE room.room_id='$_GET[room]'";
                        }
                        else if($_GET['room']=="semua") {
                            $syarat = "";
                        }*/

                        $no = 1;
                        $query = $conn->query("SELECT * FROM room");
                        while ($data = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$data['room_id'];?></td>
                                <td><?=$data['room_name'];?></td>
                                <td><?=$data['room_price'];?></td>
                                <td><?=$data['room_fasilitas'];?></td>
                                
                                
                                <td>
                                    <a href="#" value="ubah" class="btn btn-warning">
                                        <i class="fa-regular fa-pen-to-square" data-bs-toggle="tooltip" title="Edit"></i>
                                    </a> - 
                                    <a href="#" value="ubah" class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can" data-bs-toggle="tooltip" title="Delete"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }?>            
                    </tbody>
                </table>
            </div>
        </div>
    </diV>
</body>
</html>