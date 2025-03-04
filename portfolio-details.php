<?php
// Apartment data based on the query string
if ($_GET['apartment'] === 'quick') {
    $apartment_name = "Quick Park Village Plaza";
    $rooms_and_prices = [
        "Bedsitter" => ["price" => "5k", "rooms" => 4],
        "One Bedroom" => ["price" => "8k", "rooms" => 21, "vacant" => 2],
        "Two Bedrooms" => ["price" => "13k", "rooms" => 4],
        "Three Bedrooms" => ["price" => "17k", "rooms" => 1]
    ];
    $apartment_description = "Quick Park Village Plaza offers a range of apartment options in a prime location with excellent amenities. It is ideal for people seeking comfort and convenience in an urban setting.";
    $apartment_amenities = ["24/7 Security", "Parking Space", "Water Supply", "Gym", "Swimming Pool"];
    $apartment_images = ["images/quick.jpg"];
} elseif ($_GET['apartment'] === 'amani') {
    $apartment_name = "Amani Court Plaza";
    $rooms_and_prices = [
        "Bedsitter" => ["price" => "2,700", "rooms" => 1],
        "One Bedroom (5k)" => ["price" => "5k", "rooms" => 1],
        "One Bedroom (6.5k)" => ["price" => "6.5k", "rooms" => 1],
        "One Bedroom (7k)" => ["price" => "7k", "rooms" => 11],
        "One Bedroom (8k)" => ["price" => "8k", "rooms" => 5],
        "One Bedroom (8.5k)" => ["price" => "8.5k", "rooms" => 1],
        "One Bedroom (9k)" => ["price" => "9k", "rooms" => 4]
    ];
    $apartment_description = "Amani Court Plaza provides a variety of affordable living options, catering to diverse needs and budgets. Experience a peaceful living environment with modern facilities.";
    $apartment_amenities = ["Secure Location", "Ample Water Supply", "Children's Play Area", "Nearby Shops", "Good Transport Links"];
    $apartment_images = ["images/amani.jpg"];
} else {
    echo "Invalid apartment selection.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $apartment_name; ?> Details</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
        }
        .container2{
            padding:20px;
            margin:20px;
        }
        .banner1 {
            background: url('images/banner.jpg') no-repeat center center;
            background-size: cover;
            height: 200px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .banner1 h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .container {
            margin-top: 20px;
            
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.9);
            margin-bottom: 20px;
            padding:10px;
        }
        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .table {
            margin-top: 20px;
            border: 1px solid #ddd;
        }
        .table th, .table td {
            text-align: center;
        }
        .table-hover tbody tr:hover {
            background-color: #f2f2f2;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .amenities-list {
            list-style: none;
            padding: 0;
        }
        .amenities-list li {
            margin: 5px 0;
        }
    
        .banner2{
            background-color:black;
            padding:20px;
        }

        .cardd-title{
            font-weight: bold;
            text-decoration: underline;
            font-size: 20px;
        }
        .img-responsive {
			width: 150px;
		}
    
    </style>
</head>
<body>
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
<!-- Banner -->
<!-- Apartment Details -->
<div class="container2">
    <div class="row">
        <div class="col-md-8">
            <!-- Apartment Images -->
            <?php foreach ($apartment_images as $image): ?>
                <div class="card">
                    <img src="<?php echo $image; ?>" alt="Apartment Image">
                </div>
            <?php endforeach; ?>

            <!-- Apartment Description -->
            <p><?php echo $apartment_description; ?></p>
        </div>
        <div class="col-md-4">
            <!-- Amenities -->
            <div class="card">
                <div class="card-body">
                    <h4>Amenities</h4>
                    <ul class="amenities-list">
                        <?php foreach ($apartment_amenities as $amenity): ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $amenity; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms and Prices -->
    <h4>Rooms and Prices</h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Room Type</th>
                <th>Price</th>
                <th>Available Rooms</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms_and_prices as $room_type => $details): ?>
                <tr>
                    <td><?php echo $room_type; ?></td>
                    <td><?php echo $details['price']; ?></td>
                    <td><?php echo $details['rooms']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Contact Information -->
    <h4>Contact Us</h4>
    <p>If you are interested in renting an apartment at <?php echo $apartment_name; ?>, please contact us:</p>
    <p>Email: <a href="mailto:mwangiedwin602@gmail.com">mwangiedwin602@gmail.com</a></p>
    <p>Phone: 0739705416</p>
</div>

<!-- Footer -->
<?php include("footer.php"); ?>

</body>
</html>
