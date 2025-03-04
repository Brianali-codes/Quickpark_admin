<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Company</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
        .img-responsive {
			width: 150px;
		}
		.banner2{
            background-color:black;
			padding:20px;
        }
        .form-titles{
            font-size:20px;
            font-weight:bold;
        }
        .display2{
            padding:20px;
            height:100px;
            border-width: 2px;
            border-color:black;
            border-style:solid;
            width: 80%;
        }
        .display{
            padding:20px;
            height:40px;
            border-width: 2px;
            border-color:black;
            border-style:solid;
            width: 80%;
        }
        #form-div{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:20px;
        }
        .submit-btn{
            width: 20%;
            height:40px;
            
        }
    </style>
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
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Contact Us</h2>

                <form action="https://formsubmit.co/1a1785750ef7ef82cfc088ead032cada" method="POST" id="form-div"> 
                    <p class="form-titles">Name.</p> 
                    <input type="text" name="name" required placeholder="Your Name here..." class="display">
                    <p class="form-titles">Email.</p>
                    <input type="email" name="email" required placeholder="your Email here." class="display">
                    <p class="form-titles">Message.</p>
                    <input type="text" name="message" required placeholder="message here..." class="display2">
                    <button type="submit" class="submit-btn">Send</button>
                    <input type="hidden" name="_next" value="https://localhost/index.php">
                </form>
				</div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- map -->
	<div class="w3l-map">
		<iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15926.4164107352!2d36.9395182!3d-1.2546377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f159948e69aeb%3A0xc63a8b3f37609fc6!2sChrist+miracle!5e0!3m2!1sen!2ske!4v1673511082847!5m2!1sen!2ske" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
<!-- map -->

<!-- footer -->
	<?php 
		include("footer.php");
	?>
</body>
</html>
