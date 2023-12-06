<!DOCTYPE html>
<html>
<head>
    <title>CurlUsers</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <header>
        <h1>Welcome Administrator</h1>
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
    
    
    <ul>
        <?php
        
   
        function fetchRemoteUsers($url) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, $url . '?curl_request=true');
            $response = curl_exec($curl);
            if ($response === false) {
                curl_close($curl);
                die('Error: ' . curl_error($curl));
            }
            curl_close($curl);
            return json_decode($response, true);
        }

// Initialize cURL session
$urlWebsiteX= 'https://revealed-applicant.000webhostapp.com/';
$usersWebsiteX = fetchRemoteUsers($urlWebsiteX);
//1$ch = curl_init($url);

// Set cURL options
//2curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the content
//3$response = curl_exec($ch);
echo "<h3>Users from Travel Haven website using CURL request</h3>";
echo "<h5>Here is the link to Travel Haven website: <a href='$urlWebsiteX'>$urlWebsiteX</a></h5>";
foreach ($usersWebsiteX as $user) {
    echo "<p>" . htmlspecialchars($user) . "</p>";
}
// Check for cURL errors
// if (curl_errno($ch)) {
//     die('Curl error: ' . curl_error($ch));
// }

// Close cURL session
//curl_close($ch);

// Display the fetched data on the current webpage
// echo '<h1>Fetched Data</h1>';
// echo '<pre>' . htmlspecialchars($response) . '</pre>';





        
        ?>
    </ul>
</body>
</html>
