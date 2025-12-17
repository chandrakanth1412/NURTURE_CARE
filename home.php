<?php
// Start a PHP session for user authentication
session_start();

// Sample user authentication code (you should replace this with your actual authentication logic)
$loggedIn = false; // Set to true if the user is logged in

// If the user is not logged in, you can redirect them to the login page
if (!$loggedIn) {
    header("Location: login.php");
    exit(); // Ensure the script stops executing after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBuilding</title>
    <style>
        /* Your existing CSS styles here */
    </style>
</head>
<body>
    <!-- Header and Navigation -->
    <header>
        <h1><img src="build.jpg" width="50" height="50"> SmartBuilding</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <!-- Add more menu items as needed -->
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    
    <main>
        <!-- Your main content sections here -->
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Dashboard. All rights reserved.</p>
    </footer>
</body>
</html>
