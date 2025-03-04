<?php  
// Start the Session
session_start();
require('db.php');

// If the form is submitted
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Assigning posted values to variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Checking if the values exist in the database
    $query = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    // If credentials match, create session variables
    if ($count == 1) {
        $_SESSION['email'] = $email;

        // Reinitialize session variables for the logged-in admin
        $admin = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $admin['id']; // Ensure 'id' is a column in your admin table
        $_SESSION['name'] = $admin['name']; // Adjust based on your admin table columns

        // Redirect to the admin's index page
        header("Location: index.php");
        exit;
    } else {
        // Invalid credentials
        $fmsg = "Invalid Login Credentials.";
    }
}

// If already logged in, redirect to the admin's index page
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>
