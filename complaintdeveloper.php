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
$Patient = $_POST['Patient'];
$Selected = $_POST['Selected'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$address = $_POST['address'];
$types = $_POST['types'];
$issue = $_POST['issue'];
	

    //  $Patient = $_POST['Patient'];

    //  $Selected = $_POST['Selected'];

    //  $Email = $_POST['Email'];
     
    //  $Contact = $_POST['Contact'];

    //  $address= $_POST['address'];

    //  $types= $_POST['types'];

    //  $issue= $_POST['issue'];

    //  INSERT INTO `complaint` (`Patientname`, `Selectedcareservice`, `Email`, `Contactnumber`, `Address`, `Issuetype`, `Issue`) VALUES ('meena', 'fever', 'meena@gmail.com', '2346543234', 'chennai', 'not staff', 'dfjheig');

     $sql = "INSERT INTO complaint( `Patient`, `Selected`, `Email`, `Contact`, `address`, `types`, `issue`) VALUES('$Patient','$Selected','$Email','$Contact','$address','$types','$issue')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='frontpage.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>