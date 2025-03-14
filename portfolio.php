<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/icon.png">
    <title>Company</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
    <style>
        .card {
            margin: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.9);
            border: none;
            transition: transform 0.3s ease-in-out;
            padding:20px;
        }
        
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top:hover {
            transform: scale(1.05);
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .banner2{
            background-color:black;
            padding:20px;
        }

        .cardd-title{
            font-weight: bold;
            text-decoration: underline;
            font-size: 20px;
            text-align:start;
        }
        .img-responsive {
			width: 150px;
		}
    </style>
</head>
<body>
<!-- banner -->
    <div class="banner2">
        <div class="container">
            <div class="agileits_w3layouts_banner_nav">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.php"><img src="images/logo2.png" class="img-responsive"></a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-13" id="cl-effect-13">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>
                                <li class=""><a href="portfolio.php">Apartments</a></li>
                                <li><a href="blog.php">FAQs</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<!-- //banner -->
<!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h2 class="w3l_head w3l_head1">Our Apartments</h2>
            <div class="row">
                <!-- Apartment 1 -->
                <div class="col-md-6">
                    <div class="card" style="width: 100%;">
                        <img src="images/quick.jpg" class="card-img-top" alt="Quick Apartment">
                        <div class="card-body">
                            <h5 class="cardd-title">Quick-Park Village Plaza</h5>
                            <br>
                            <p class="card-text">Amani Apartment: Experience the perfect blend of modern style and urban comfort. This spacious apartment offers serene surroundings, contemporary amenities, and a thoughtfully designed interior for a balanced and luxurious lifestyle.</p>
                            <br>
                            <a href="portfolio-details.php?apartment=quick" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Apartment 2 -->
                <div class="col-md-6">
                    <div class="card" style="width: 100%;">
                        <img src="images/amani.jpg" class="card-img-top" alt="Amani Apartment">
                        <div class="card-body">
                            <h5 class="cardd-title">Amani Apartment</h5>
                            <br>
                            <p class="card-text">Quick Park Apartment: Discover contemporary urban living at its finest. Quick Park Apartment features modern design, spacious interiors, and premium amenities, offering a seamless blend of comfort, convenience, and style in a prime location.</p>
                            <br>
                            <a href="portfolio-details.php?apartment=amani" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- //gallery -->
<!-- footer -->
<?php 
        include("footer.php");
    ?>
</body>
</html>
