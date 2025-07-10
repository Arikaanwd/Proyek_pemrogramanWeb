<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
                <h3><i class="fa-solid fa-clipboard" style="margin-right:10px;"></i>Data Booking</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Transaksi</li>
                        <li class="breadcrumb-item ">Data Booking</li>
                        <li class="breadcrumb-item active">Edit </li>
                    </ol>
                </nav>
                
                <div class="col-6">
                <?php
                if(isset($_GET['book_id'])){
                    $book_id = $_GET['book_id'];
                    $sql= "SELECT * FROM book WHERE book_id='$book_id'";
                    $query_cek = $conn->query($sql);
                    $data_cek = $query_cek->fetch_assoc();

                    if($data_cek['book_id']!=NULL){

                        if(isset($_POST['simpan'])){
                            $book_idbaru = $_POST['book_id'];
                            $customer_id = $_POST['customer_id'];
                            $room_id = $_POST['room_id'];
                            $book_date = $_POST['book_date'];
                            $book_desc = $_POST['book_desc'];
            
                            $sql = "UPDATE book SET book_id='$book_idbaru', customer_id='$customer_id', room_id='$room_id',
                            book_date='$book_date', book_desc='$book_desc' WHERE book_id='$book_id' ";

                            $query = $conn->query($sql);

                            if($query){
                                echo "<div class='alert alert-success'>Data Berhasil Diubah </div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'> Data Gagal Diubah</div>";
                            }
                        }
                        ?>
                        <form action="" method="post">
                            <label>Book Id</label> <br>
                            <input type="text" name="book_id" class="form-control" value="<?=$data_cek['book_id'];?>"> <br>
                            <label>Customer Id</label> <br>
                            <input type="text" name="customer_id" class="form-control" value="<?=$data_cek['customer_id'];?>"> <br>
                            <label>Room Id</label> <br>
                            <select name="room_id" class="form-control" value="<?=$data_cek['room_id'];?>"> 
                                <?php
                                $q_room = $conn->query ("SELECT * FROM room");
                                while ($d_room = $q_room -> fetch_assoc ()){
                                echo "<option value='".$d_room['room_id']."'selected>".$d_room['room_id']."</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>Book Date</label> <br>
                            <input type="date" name="book_date" class="form-control" value="<?=$data_cek['book_date'];?>">
                            <br>

                            <label>Book Desc</label> <br>
                            <input type="text" name="book_desc" class="form-control" value="<?=$data_cek['book_desc'];?>"> 
                            <br>

                            <input type="submit" name="simpan" value="Edit" class="btn btn-warning">
                            <a href="booking.php" value="Data mhs" class="btn btn-info">Lihat Data</a>
                        </form>
                    <?php
                    }else{
                        echo "Nim Tidak Ditemukan";
                    }
                }
                    ?>

                
                </div>
            </div>
        </div>
    </diV>
</body>
</html>