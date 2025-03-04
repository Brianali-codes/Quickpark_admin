<?php
  require_once "admin/functions/db.php";

    // Example FAQ data, can be replaced with dynamic data from the database if needed
    $faqs = [
        [
            'question' => 'How do I apply for a house?',
            'answer' => 'To apply for a house, you can call the phone number listed in the "Get in touch" section to speak with the landlord or click the email to send an email to the landlord'
        ],
        [
            'question' => 'Are the apartments furnished?',
            'answer' => 'They are unfurnished, allowing you to personalize the space according to your preferences. Check the individual listings for more details.'
        ],
        [
            'question' => 'Can I visit the property before applying?',
            'answer' => 'Yes, we encourage applicants to schedule a viewing before applying for a property.'
        ],
        [
            'question' => 'How long is the rental lease?',
            'answer' => 'Lease terms can vary. Most leases are for one year, but shorter terms can be arranged in some cases.'
        ],
        [
            'question' => 'Is there a deposit required?',
            'answer' => 'Yes, a security deposit is typically required, which is refundable at the end of your lease term, minus any damages.'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Company</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } </script>
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
</head>
<body>
<style>
        .card {
            margin: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
            transition: transform 0.3s ease-in-out;
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
        .img-responsive {
			width: 150px;
		}
    </style>

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
<!-- FAQ Section -->
    <div class="gallery">
        <div class="container">
            <h2 class="w3l_head w3l_head1">Frequently Asked Questions</h2>
            <div class="wthree_gallery_grids">
                <div class="row">
                    <?php 
                        foreach ($faqs as $faq) {
                            echo 
                            '<div class="col-md-6">
                                <div class="faq-item">
                                    <h4>'.$faq['question'].'</h4>
                                    <p>'.$faq['answer'].'</p>
                                </div>
                                <hr>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
<!-- //FAQ Section -->
<!-- footer -->
    <?php 
        include("footer.php");
    ?>
</body>
</html>
