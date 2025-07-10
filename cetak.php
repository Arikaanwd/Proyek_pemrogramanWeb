<?php
include "koneksi.php";
include "library.php";
include "function.php";

$awal   =$_GET['awal'];
$tawal  =InggrisTgl($awal);

$akhir  = $_GET['akhir'];
$takhir =InggrisTgl($akhir);

    $tglAwal    = isset($_GET['awal']) ? $_GET['awal'] : "01-".date('m-Y');
    $tglAkhir   = isset($_POST['akhir']) ? $_GET['akhir'] : date('d-m-Y');
    $sqlPeriode = " WHERE book.book_date BETWEEN '$awal' AND '$akhir'";
?>
<html>
<head>
<link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Laporan</title>
</head>
<body onload="print()">
    <form action="" method="post">
        <?php 
        if (!empty($tglAwal)){ ?>
            <center> 
                <h2> DAFTAR LAPORAN TRANSAKSI BOOKING</h2> <hr> <br>
                </h4> Periode Booking <b> <?php echo ($awal); ?></b> s/d <b><?php echo ($akhir); ?> </b> <br>
                </h4>
            </center>
        <?php} else { ?>
        <center><h2> DAFTAR LAPORAN TRANSAKSI BOOKING </h2></center>
        <hr>
        <?php } ?>
    </form>

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
            $query = $conn->query("SELECT book.book_id, book.book_date, customer.customer_nama, room.room_name, (book.book_desc * room.room_price) AS total
            FROM book
            JOIN customer ON customer.customer_id = book.customer_id
            JOIN room ON book.room_id = room.room_id $sqlPeriode");
            $jumlahBayar = 0;
            while ($data = $query->fetch_assoc()){
            $kode = $data['book_id'];
                                            
            ?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $data['book_id'];?></td>
                <td><?= $data['book_date'];?></td>
                <td><?= $data['customer_nama'];?></td>
                <td><?= $data['room_name'];?></td>
                <td><?=buatRp($data['total']);?></td>
                </tr>
            <?php
                $jumlahBayar+=$data['total'];
                $no++;    
            }?>
                                            
        </tbody>
        <tr>
            <th align="center"><strong></strong></th>
            <th><strong></strong></th>
            <th><strong></strong></th>
            <th><strong></strong></th>
            <th><strong>Total Transaksi</strong></th>
            <th align="right" ><strong><?php echo buatRp($jumlahBayar); ?> ,-</strong></th>
        </tr>

    </table>
</body>
</html>