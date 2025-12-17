<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "nurturecare"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	

     $email = $_POST['email'];

     $password = $_POST['password'];

     $name = $_POST['name'];
     
     $contactno = $_POST['contactno'];

     $gender = $_POST['gender'];

     $sql = "INSERT INTO asignup (email, password, name, contactno, gender) VALUES('$email','$password','$name','$contactno','$gender')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='Admin.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>