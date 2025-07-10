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
                <h3><i class="fa-solid fa-file"></i>Laporan</h3><hr> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Transaksi</li>
                        <li class="breadcrumb-item active"> Laporan</li>
                    </ol>
                </nav>
                <div class="col-12">
                    <?php
                    $sqlPeriode = "";
                    $awalTgl = "";
                    $akhirTgl = "";
                    $tglAwal = "";
                    $tglAkhir = "";

                    if(isset($_POST['btnTampil'])){
                        $tglAwal    = isset($_POST['txtTglAwal']) ? $_POST['txtTglAwal'] : "01-".date('m-Y');
                        $tglAkhir   = isset($_POST['txtTglAkhir']) ? $_POST['txtTglAkhir'] : date('d-m-Y');
                        $sqlPeriode = " WHERE book.book_date BETWEEN '".$tglAwal."' AND '".$tglAkhir."'";
                    }
                    else {
                        $awalTgl    = "01-".date('m-Y');
                        $akhirTgl   = date('d-m-Y');

                        $sqlPeriode = " WHERE book.book_date BETWEEN '".$awalTgl."' AND '".$akhirTgl."'";

                    }
                    ?>
                    <div class="page shoping-chart-page">
                        <div class="container-fluid">
                            <h4>Periode Tanggal 
                                <b> <?php echo ($tglAwal); ?></b> s/d <b><?php echo ($tglAkhir); ?> </b> 
                            </h4>
                            <div class="card-header py-3">

                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input name="txtTglAwal" type="date" class="form-control" value="<?php echo $awalTgl; ?>" size="10">
                                        </div>
                                        s/d
                                        <div class="col-lg-3">
                                            <input name="txtTglAkhir" type="date" class="form-control" value="<?php echo $awalTgl; ?>" size="10">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="submit" name="btnTampil" class="btn btn-success" class="form-control" value="Tampilkan">
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Booking Id</th>
                                                <th>Tanggal</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Room</th>
                                                <th>Total Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = $conn->query(" SELECT book.book_id, book.book_date, customer.customer_nama, room.room_name, (book.book_desc * room.room_price) AS Total
                                            FROM book
                                            JOIN customer ON customer.customer_id = book.customer_id
                                            JOIN room ON book.room_id = room.room_id $sqlPeriode");
                                            while ($data = $query->fetch_assoc()){
                                                $kode = $data['book_id'];
                                            
                                            ?>
                                                <tr>
                                                    <td><?= $no;?></td>
                                                    <td><?= $data['book_id'];?></td>
                                                    <td><?= $data['book_date'];?></td>
                                                    <td><?= $data['customer_nama'];?></td>
                                                    <td><?= $data['room_name'];?></td>
                                                    <td><?=buatRp($data['Total']);?></td>
                                                </tr>
                                            <?php
                                                $no++;    
                                            }?>
                                            
                                        </tbody>

                                    </table>
                                    

                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a class="btn btn-primary" href="cetak.php?awal=<?php echo $tglAwal; ?> &&akhir=<?php echo $tglAkhir;?>" target="_blank" alt="Edit Data" class="btn btn-primary">Cetak Laporan</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </diV>
</body>
</html>