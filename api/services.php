<?php

include('track_service_visit.php');
// Initialize an empty array for visited services
$visited_services = array();

// Check if the cookie exists
if (isset($_COOKIE['visited_services'])) {
    // Unserialize the cookie to get the array of visited services
    $visited_services = unserialize($_COOKIE['visited_services']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Our Services - Mobile Store</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Our Services</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="secure.php">Secure</a></li>
        </ul>
    </nav>

    <section class="services">
        <h2>What We Offer</h2>
        <ul>
            <li><a href="Iphone 15 pro Max.php">Iphone 15 pro Max</a></li>
            <li><a href="Iphone 15 PLUS.php">Iphone 15 PLUS</a></li>
            <li><a href="Iphone 15 pro.php">Iphone 15 pro</a></li>
            <li><a href="Apple Desktop 44 Inches.php">Apple Desktop 44 Inches</a></li>
            <li><a href="Air Pods.php">Air Pods</a></li>
            <li><a href="Ipod.php">Ipod</a></li>
            <li><a href="Iphone 14 pro Max.php">Iphone 14 pro Max</a></li>
            <li><a href="Iphone 14 PLUS.php">Iphone 14 PLUS</a></li>
            <li><a href="Iphone 14 pro.php">Iphone 14 pro</a></li>
        </ul>
    </section>

    <!-- Additional content for the services page goes here -->

    <footer>
    &copy; 2023 Mobile Devices Inc. All rights reserved.
    </footer>
</body>
</html>
