
<?php
session_start();
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

     $treatmentname = $_POST['treatmentname']; 

     $email = $_POST['email'];
     
     $contact = $_POST['contact'];

     $gender= $_POST['gender'];

     $address= $_POST['address'];

     $idno= $_POST['idno'];
     $date= $_POST['date'];
     $time= $_POST['time'];
     $doctorid = $_POST['doctorid']; 
     $user_id = $_SESSION['user_id'];
     $fees = $_SESSION['fees'];

     $sql = "INSERT INTO user(name, treatmentname, email, contact, gender,address,idno,date,time,doctorid,userid,fees) VALUES('$name','$treatmentname','$email','$contact','$gender','$address','$idno','$date','$time','$doctorid','$user_id','$fees')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='frontpage.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();
?>