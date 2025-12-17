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
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}     
	

     $date = $_POST['date'];

     $time = $_POST['time'];

     $doc_id = $_POST['doc_id'];

     $user_id = $_SESSION['user_id'];
     
     

    //  INSERT INTO `complaint` (`Patientname`, `Selectedcareservice`, `Email`, `Contactnumber`, `Address`, `Issuetype`, `Issue`) VALUES ('meena', 'fever', 'meena@gmail.com', '2346543234', 'chennai', 'not staff', 'dfjheig');

     $sql = "INSERT INTO schedule(date, time, doctor_id, user_id) VALUES('$date','$time', '$doc_id', $user_id)";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='notification.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>