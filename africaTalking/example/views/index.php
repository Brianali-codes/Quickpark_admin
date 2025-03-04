<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Africa's Talking SMS Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"/>
</head>
<body>
<div class="container">
    <h3 class="text-muted">Africa's Talking SMS Demo</h3>

    <!-- Input for phone number -->
    <div class="col-md-6">
        <form method="post" action="">
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input id="phone" name="phone" type="text" class="form-control" placeholder="+254XXXXXXXXX" required>
            </div>
            <button type="submit" name="sendSms" class="btn btn-success">Send SMS</button>
        </form>
    </div>

    <!-- Response area -->
    <div class="col-md-6">
        <pre id="response" style="background-color: #f8f9fa; padding: 10px; border: 1px solid #ddd;">
<?php
// Include the Africa's Talking SDK
require_once "AfricasTalking.php";  // Make sure path is correct

use AfricasTalking\SDK\AfricasTalking;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendSms'])) {
    // Africa's Talking credentials
    $username = 'sandbox'; // Replace with your username
    $apiKey   = 'atsk_d9496e0b08e93a66685d173bdcd3ac75083c840063aefb2873be03da817dbcb7fe499d7f'; // Replace with your API key

    // Initialize the SDK
    $AT = new AfricasTalking($username, $apiKey);

    // Get the SMS service
    $sms = $AT->sms();

    // Get the phone number from the form
    $phone = $_POST['phone'];

    try {
        // Send the SMS
        $result = $sms->send([
            'to'      => $phone,
            'message' => 'Hello World!'
        ]);

        // Print the result
        print_r($result);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
        </pre>
    </div>
</div>
</body>
</html>
