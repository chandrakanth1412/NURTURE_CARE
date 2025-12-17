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

	

     $name = $_POST['name'];

     $specification = $_POST['specification'];

     $email = $_POST['email'];

     $password = $_POST['password'];
     
     $contact = $_POST['contact'];

     $experience= $_POST['experience'];

     $address= $_POST['address'];

     $idno= $_POST['idno'];

     $fees= $_POST['fees'];

     $sql = "INSERT INTO developers(name, specification, email, password, contact, experience,address,idno, fees) VALUES('$name','$specification','$email','$password','$contact','$experience','$address','$idno','$fees')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='Ahome.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>