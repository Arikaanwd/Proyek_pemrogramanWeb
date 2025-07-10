<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking.Com</title>
    <link href="bootsrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
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
                                <a class="nav-link active" href="room.php">Room</a>
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
                                <a class="nav-link bg-success" href="reservasi_room.php" > Book Now </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gam/gam18.jpg" class="d-block w-100" >
            </div>
            <div class="col-12 p-5 text-center position-absolute top-50 start-50 translate-middle" style="color:white;">
                <h1>Room & Suite</h1>
                
            </div>
            
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <h1>Your personal paradise. Far from everything. Close to perfect.</h1>
                <p>Indulge in island isolation where champagne is poured by mid-morning, 
                    the sea sparkles in the sun and the only decision is whether to wake up for an early morning 
                    snorkel or to lounge in a hammock on the beach. It’s just you, four acres of beach, no phones, 
                    no TVs and no distractions.
                </p>
            </div>
            <div class="col-6 p-5">
                <h5>WHY BOOK DIRECT?</h5>
                <p>The best rates are always found here. We guarantee it. Plus, we have special perks just for you.</p>
                <small>
                    <a href="#">BOOKING DERECT DETAIL</a>
                </small>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <img src="gam/gam18.jpg" class="img-fluid">    
            </div>
            <div class="col-6 p-5">
                <h1>Accessible Rooms</h1>
                <p>Little Palm Island Resort & Spa accommodates guests with disabilities. 
                    Please feel free to look at the details to see how we can meet your needs.
                </p>
                <small>
                    <a href="#">VIEW ACCESSIBLE ROOMS</a>
                </small>  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6 p-5">
                <h1>Luxury Bungalows</h1>
                <p>Our fully redesigned and all new luxury island suites are ready to become your new paradise.</p>
                <small>
                    <a href="#">VIEW LUXURY BUNGALOWS</a>
                </small>
            </div>
            <div class="col-6">
                <img src="gam/gam19.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <img src="gam/gam20.jpg" class="img-fluid">    
            </div>
            <div class="col-6 p-5">
                <h1>Arrival Amenities</h1>
                <p>Set the mood for the perfect private island escape. 
                    Allow us to have something special in your suite awaiting your arrival at our Florida Keys luxury resort.
                </p>
                <small>
                    <a href="#">ARRIVAL AMENITY DETAILS</a>
                </small>  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <hr>
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
<script type="text/javascript" src="bootsrap/js/bootstrap.bundle.min.js">

</script>
</html>