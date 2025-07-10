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
                                <a class="nav-link" href="tampilData.php">Home</a>
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
            <div class="col-12">
                <br>
                <br>
                <br>
                <p></p>
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-1"></div>
            <div class="col-9">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <label>Arrival</label> <br>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col">
                            <label>Departure</label> <br>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <br>
                    <label>Room</label> <br>
                    <select name="room" class="form-control">
                        <?php
                        $q_room = $conn->query ("SELECT * FROM room");
                        while ($d_room = $q_room -> fetch_assoc ()){
                        echo "<option value='".$d_room['room_id']."'>".$d_room['room_name']."</option>";
                        }
                    ?>
                    </select>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>orang</label> <br>
                            <select name="room" class="form-control">
                                <option value="1 orang">1 orang</option>
                                <option value="2 orang">2 orang</option>
                                <option value="3 orang">3 orang</option>
                                <option value="4 orang">4 orang</option>
                                <option value="5 orang">5 orang</option>
                            </select>
                        </div>
                        <br>
                        <div class="col">
                            <label>Malam</label> <br>
                            <select name="room" class="form-control">
                                <option value="1 orang">2 Malam</option>
                                <option value="2 orang">3 Malam</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Kode Promo</label> <br>
                            <input type="text" class="form-control" placeholder="Masukkan Kode Promo..." >
                        </div>
                        <div class="col">
                            <label>Kode Grup</label> <br>
                            <input type="text" class="form-control" placeholder="Masukkan Kode Grup..." >
                        </div>
                    </div>
                    <br>
                    <a href="reservasi_customer.php" type="button" class="btn btn-primary">Reservasi</a>
                </form>
            </div>
            <div class="col-1"></div>
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