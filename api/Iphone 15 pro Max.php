<?php
// This should be the name of the service
$service_name = 'Iphone 15 pro max'; // Replace with the actual service name
$service_price = ' $1,299';
// Include the tracking function and track the visit
include('track_service_visit.php');
track_service_visit($service_name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($service_name); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1><?php echo htmlspecialchars($service_name); ?></h1>
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

    <!-- Your site's navigation -->

    <div class="content-wrapper">
        <main class="service-container">
            <div class="service-container">
                <h1 class="service-heading"><?php echo htmlspecialchars($service_name); ?></h1>
                <img src="../iphone 15 pro max.webp" alt="<?php echo htmlspecialchars($service_name); ?>" class="service-image">
                <p class="service-description">New Apple iPhone 15 Pro Max. Aerospace-grade titanium design, making it both strong and light. USB-C connector. All-day battery life up to 29hrs video playback. 48MP main camera with multiple focal lengths, like having seven pro lenses in your pocket. Telephoto lens with 5x optical zoom
                    </p>
                <div class="service-price">
                    <h3>Price:<?php echo htmlspecialchars($service_price); ?></h3>
                </div>
            </div>
        </main>
    </div>

    <!-- Your site's footer -->
</body>

</html>