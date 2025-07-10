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
                <h3><i class="fa-solid fa-people-roof" style="margin-right:10px;"></i>Data Customer</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Master Data</li>
                        <li class="breadcrumb-item ">Data Customer</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
                <div class="col-6">
                <?php
                if(isset($_GET['customer_id'])){
                    $customer_id = $_GET['customer_id'];
                    $sql= "SELECT * FROM customer WHERE customer_id='$customer_id'";
                    $query_cek = $conn->query($sql);
                    $data_cek = $query_cek->fetch_assoc();

                    if($data_cek['customer_id']!=NULL){

                        if(isset($_POST['simpan'])){
                            $customer_idbaru = $_POST['customer_id'];
                            $customer_nama = $_POST['customer_nama'];
                            $customer_alamat = $_POST['customer_alamat'];
                            $customer_tlp = $_POST['customer_tlp'];
                            $customer_datareg = $_POST['customer_datareg'];
            
                            $sql = "UPDATE customer SET customer_id='$customer_idbaru', customer_nama='$customer_nama', customer_alamat='$customer_alamat',
                            customer_tlp='$customer_tlp', customer_datareg='$customer_datareg' WHERE customer_id='$customer_id' ";

                            $query = $conn->query($sql);

                            if($query){
                                echo "<div class='alert alert-success'>Data Berhasil Diubah
                                <a href='tampilCustomer.php'>kembali</a> </div>";
                            }
                            else{
                                echo "<div class='alert alert-danger'> Data Gagal Diubah</div>";
                            }
                        }
                        ?>
                        <form action="" method="post">
                            <label>Customer Id</label> <br>
                            <input type="text" name="customer_id" class="form-control" value="<?=$data_cek['customer_id'];?>"> <br>
                            <label>Customer Nama</label> <br>
                            <input type="text" name="customer_nama" class="form-control" value="<?=$data_cek['customer_nama'];?>"> <br>
                            <label>Customer Alamat</label> <br>
                            <textarea class="form-control" name="customer_alamat"><?=$data_cek['customer_alamat'];?> 
                            </textarea>
                                
                            <br>
                            <label>Customer Tlp</label> <br>
                            <input type="text" name="customer_tlp" class="form-control" value="<?=$data_cek['customer_tlp'];?>">
                            <br>

                            <label>Customer DataReg</label> <br>
                            <input type="text" name="customer_datareg" class="form-control" value="<?=$data_cek['customer_datareg'];?>"> 
                            <br>

                            <input type="submit" name="simpan" value="Edit" class="btn btn-warning">
                            <a href="tampilCustomer.php" value="Data mhs" class="btn btn-info">Lihat Data</a>
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