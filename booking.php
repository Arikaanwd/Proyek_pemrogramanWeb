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
                <h3><i class="fa-solid fa-clipboard" style="margin-right:10px;"></i>Data Booking</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Transaksi</li>
                        <li class="breadcrumb-item active">Data Booking</li>
                    </ol>
                </nav>
                <div class="col-12">
                    <?php
                    if(isset($_GET['book_id'])){
                    $book_id = $_GET['book_id'];
                    $query_hapus = "DELETE FROM book WHERE book_id='$book_id'";
                    $hapus = $conn->query ($query_hapus);

                        if($hapus){
                            echo "<div class='alert alert-success'>Data Berhasil Dihapus</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Data Gagal Dihapus</div>";
                        }
                    }

                    ?>
                </div>
                <a href="input_booking.php" class="btn btn-primary mb-3"><i class="fa-regular fa-square-plus" style="margin-right:5px;"></i>Tambah Data Booking</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Book_id</th>
                            <th>Customer id</th>
                            <th>Room id</th>
                            <th>Book date</th>
                            <th>Book desc</th>
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
                        $query = $conn->query("SELECT * FROM book");
                        while ($data = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$data['book_id'];?></td>
                                <td><?=$data['customer_id'];?></td>
                                <td><?=$data['room_id'];?></td>
                                <td><?=$data['book_date'];?></td>
                                <td><?=$data['book_desc'];?></td>
                                
                                <td>
                                    <a href="update_booking.php?book_id=<?=$data['book_id'];?>" value="ubah" class="btn btn-warning">
                                        <i class="fa-regular fa-pen-to-square" data-bs-toggle="tooltip" title="Edit"></i>
                                    </a> - 
                                    <a href="booking.php?book_id=<?=$data['book_id'];?>" value="ubah" class="btn btn-danger">
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