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
                                <a class="nav-link active" href="tampilData.php">Home</a>
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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gam/gam4.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="gam/gam9.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="gam/gam10.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="gam/gam11.jpg" class="d-block w-100" >
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
    
    
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 p-5">
                <h1>Welcome to Indonesian only private island resort.</h1>
                <p>Our adults-only paradise features thatched roof bungalows, 
                    inspired by British West Indies design, and with a careful nod to old world tradition. 
                    Thoughtful amenities, including an indoor/outdoor spa deliver exotic charm reminiscent of a Balinese hideaway. 
                    World-class cuisine is served in our dining room, surrounded by the natural beauty of our tropical island. 
                    We invite you to escape the ordinary and delight in exceptional luxury at the all-new Little Palm Island.
                </p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <img src="gam/gam15.jpg" class="img-fluid">    
            </div>
            <div class="col-6 p-5">
                <h1>An Unforgettable Escape</h1>
                <p>Located off the fabled Florida Keys coastline, on a lush, 
                private island dotted with crushed seashell paths amid verdant tropical foliage and exotic wildlife, 
                rests Little Palm Island Resort & Spa – a destination like no other.
                </p>
                <small>
                <a href="#">EXPLORE THE ISLAND</a>
                </small>  
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6 p-5">
                <h1>The Arrival Experience</h1>
                <p>Whether arriving by seaplane or our private boat, 
                begin your journey with refreshing cocktails at our on-shore reception and lounge, 
                the Shore Station, before making the short, scenic journey to your new island oasis.
                </p>
                <small>
                <a href="#">VIEW ROOMS</a>
                </small>
            </div>
            <div class="col-6">
                <img src="gam/gam16.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <img src="gam/gam17.jpg" class="img-fluid">    
            </div>
            <div class="col-6 p-5">
                <h1>Restore Your Spirit</h1>
                <p>SpaTerre returns and welcomes you to the inner sanctuary of Little Palm Island. 
                Soothe your body and soul at our world-class spa featuring a two-story atrium 
                with carved architectural details and a handcrafted tile fountain.
                </p>
                <small>
                    <a href="#">RELAXATION</a>
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