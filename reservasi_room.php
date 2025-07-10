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
                                <a class="nav-link " href="tampilData.php">Home</a>
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
                <br>
                <p></p>
                
            </div>
            
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="border:1px solid;">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gam/suite/g.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="gam/suite/g3.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="gam/suite/g5.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-4 p-5">
                <h1>Island Escape Suite</h1>
                <p>Newly renovated thatched roof bungalow suite white a sense of the Caribbean and a modern British West Indies</p>
            </div>
            <div class="col-2 p-3 text-end">
                <h5>FROM 1.200.000/MALAM</h5>
                <p>AC,TV,Kamar Mandi</P>
                <a href="checkRoom.php" type="button" class="btn btn-success">Reserve</a>
                
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row" style="border:1px solid;">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gam/deluxe/gam7.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="gam/deluxe/gam8.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-4 p-5">
                <h1>Island Escape Deluxe</h1>
                <p>Newly renovated thatched roof bungalow suite white a sense of the Caribbean and a modern British West Indies</p>
            </div>
            <div class="col-2 p-3 text-end">
                <h5>FROM 750.000/MALAM</h5>
                <p>AC,TV,Kamar Mandi</P>
                <a href="checkRoom.php" type="button" class="btn btn-success">Reserve</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row" style="border:1px solid;">
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gam/standard/gam8.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="gam/standard/g4.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-4 p-5">
                <h1>Island Escape Standard</h1>
                <p>Newly renovated thatched roof bungalow suite white a sense of the Caribbean and a modern British West Indies</p>
            </div>
            <div class="col-2 p-3 text-end">
                <h5>FROM 500.000/MALAM</h5>
                <p>AC,TV,Kamar Mandi,Ruang Tamu</P>
                <a href="checkRoom.php" type="button" class="btn btn-success">Reserve</a>
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