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

	

     $Name = $_POST['name'];

     $Specification = $_POST['Specification'];

     $Contact = $_POST['Contact'];

     $Email = $_POST['Email'];

     $Idno = $_POST['Idno'];

     $Address= $_POST['Address'];

     $Issue= $_POST['Issue'];

    //  INSERT INTO `complaint` (`Patientname`, `Selectedcareservice`, `Email`, `Contactnumber`, `Address`, `Issuetype`, `Issue`) VALUES ('meena', 'fever', 'meena@gmail.com', '2346543234', 'chennai', 'not staff', 'dfjheig');

     $sql = "INSERT INTO issue(Name, Specification, Contact, Email, Idno, Address,Issue) VALUES('$Name','$Specification','$Contact','$Email','$Idno','$Address','$Issue')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='Raiseissue.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>