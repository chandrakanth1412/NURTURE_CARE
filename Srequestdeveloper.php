<?php
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
	

     $Name = $_POST['name'];

     $Treatment = $_POST['Treatment'];
     
     $Contact = $_POST['Contact'];

     $Email = $_POST['Email'];

     $Address= $_POST['Address'];

     $Requirement= $_POST['Requirement'];

    //  INSERT INTO `complaint` (`Patientname`, `Selectedcareservice`, `Email`, `Contactnumber`, `Address`, `Issuetype`, `Issue`) VALUES ('meena', 'fever', 'meena@gmail.com', '2346543234', 'chennai', 'not staff', 'dfjheig');

     $sql = "INSERT INTO request(Name, Treatment, Contact, Email,Address,Requirement) VALUES('$Name','$Treatment','$Contact','$Email','$Address','$Requirement')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='Srequest.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>