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
                <h3><i class="fa-solid fa-house mr-3" style="margin-right:10px;"></i>Beranda</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Beranda</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body-icon">
                                <i class="fa-solid fa-people-roof"></i>
                            </div>
                            <h5 class="card-tittle text-white p-3">Jumlah Customer</h5>
                            <div class="display-4 text-white p-3">10</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link text-decoration-none" href="#">
                                    <p class="card-text text-white">Lihat Detail 
                                        <i class="fa-solid fa-angles-right ml-2"></i>
                                    </p>
                                </a>
                                <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body-icon">
                                <i class="fas fa-solid fa-bed mr-2"></i>
                            </div>
                            <h5 class="card-tittle text-white p-3">Jumlah Room</h5>
                            <div class="display-4 text-white p-3">10</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link text-decoration-none" href="#">
                                    <p class="card-text text-white">Lihat Detail 
                                        <i class="fa-solid fa-angles-right ml-2"></i>
                                    </p>
                                </a>
                                <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body-icon">
                                <i class="fa-solid fa-clipboard"></i>
                            </div>
                            <h5 class="card-tittle text-white p-3">Jumlah Booking</h5>
                            <div class="display-4 text-white p-3">10</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link text-decoration-none" href="#">
                                    <p class="card-text text-white">Lihat Detail 
                                        <i class="fa-solid fa-angles-right ml-2"></i>
                                    </p>
                                </a>
                                <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <form action="" method="get">    
                    <div class="row">    
                        <div class="col-6">
                            <label>Tampilkan Berdasarkan Room</label>
                            <select name="room" class="form-control">
                                <option value="semua">Semua</option>
                                <?php
                                $q_room = $conn->query ("SELECT * FROM room");
                                while ($d_room = $q_room -> fetch_assoc ()){
                                    echo "<option value='".$d_room['room_id']."'>".$d_room['room_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-2">
                            <label>&nbsp;</label> <br>
                            <input type="submit" name="filter" value="Filter Data" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Book_id</th>
                            <th>Customer Name</th>
                            <th>Room Name</th>
                            <th>Tanggal</th>
                            <th>Price</th>
                            <th>Booking/Malam</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $syarat = "";
                        if(isset($_GET['room']) and $_GET['room']!="semua"){
                            $syarat = " WHERE room.room_id='$_GET[room]'";
                        }
                        else if($_GET['room']=="semua") {
                            $syarat = "";
                        }

                        $no = 1;
                        $query = $conn->query("SELECT book.book_id, customer.customer_nama, customer.customer_alamat, room.room_name,
                        book.book_date, room.room_price, book.book_desc, (room.room_price * book.book_desc) AS Total
                        FROM book
                        JOIN customer ON customer.customer_id = book.customer_id 
                        JOIN room ON book.room_id = room.room_id 
                        $syarat ");
                        while ($data = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$data['book_id'];?></td>
                                <td><?=$data['customer_nama'];?></td>
                                <td><?=$data['room_name'];?></td>
                                <td><?=$data['book_date'];?></td>
                                <td><?=$data['room_price'];?></td>
                                <td><?=$data['book_desc'];?></td>
                                <td><?=$data['Total'];?></td>
                                
                                <!--td>
                                    <a href="#" value="ubah" class="btn btn-warning">Ubah</a> - 
                                    <a href="#" value="ubah" class="btn btn-danger">Hapus</a>
                                </td-->
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