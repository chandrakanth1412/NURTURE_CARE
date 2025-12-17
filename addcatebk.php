<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $image = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./img/" . $image;
    $categoryname = $_POST['categoryname'];
    $informations = $_POST['informations'];

    $db = mysqli_connect("localhost", "root", "", "nurturecare");

    // Prepare the statement
    $sql = "INSERT INTO category (image, categoryname, informations) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $image, $categoryname, $informations);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Move the uploaded image into the folder: images
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h4>Register Successfully!</h4>";
        } else {
            echo "<h4>Register Failed! Failed to move uploaded file.</h4>";
        }
    } else {
        echo "<h4>Register Failed! " . mysqli_error($db) . "</h4>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($db);
	exit();
}
?>
