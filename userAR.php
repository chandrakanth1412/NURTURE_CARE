<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin order </title>
    
    
    
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		
		

        
        
    <style>
    .foto_style img {
  width: 50px; 
  height:50px;
}​




/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

</style>


		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="log/css/all.css">
		<link rel="stylesheet" href="log/css/bootstrap.css">
		<link rel="stylesheet" href="log/css/style.css">
		<link rel="stylesheet" href="log/css/media.css">
        
		
<style>
	table, tr, th, td {
    text-align: center;
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    margin-left: 17px;
    border-color: black;
    margin-bottom: 15px;
    font-family: Open Sans, Arial, sans-serif;
    font-size: 14px;
}
th {
  color:white;
    background: #1e6a8f;
}

	</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="rename_style.css">
    <style>

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;

        }
        nav .logo a{
  font-weight: 500;
  font-size: 35px;
  color: white;
}
        .category-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .category-item1 {
            background-color: #fff;
            padding: 0px;
            border-radius: 5px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-item2 {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .category-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .category-title {
            font-size: 18px;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color:black;
        }
        .nav-links li a{
  text-decoration: none;
  color: white;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 4px;
  transition: all 0.3s ease;
}
        nav{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 11px;
  transition: all 0.4s ease;
  color:white;
  height:75px;
  background-color:#1e6a8f;
}
p {
    margin-top: 0;
    margin-bottom: 0rem;
}
.logo{
    font-size:31px;
}
body{
  overflow-y:scroll
}
dl, ol, ul {
    margin-top: 0px;
    margin-bottom: 0rem;
}
    </style>

</head>
<body>


<nav>
    <div class="nav-content">
      <div class="logo" style="font-family:Open Sans, Arial, sans-serif; font-size:27px; font-weight:600;">
        WHEELS GLOW
      </div>
      <ul class="nav-links">
        <li><a href="adminhome.php" style="font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700;">HOME</a></li>
        <li><a href="addservice.php" style="font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700;"> ADD SERVICE</a></li>
        <li><a href="demo.php" style="font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700;">ADD DETAILS </a></li>
        
        <li><a href="adminorder.php" style="font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700;">ORDERS</a></li><!-- <li><a href="profilepage.php">Profile</a></li> -->
       <!-- <li><a href="userorder.php">Booking</a></li> -->
       <!-- <li><a href="logout.php" style="font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700;">LOGOUT</a></li> -->
      </ul>
    </div>
  </nav>

<br><br>

<br><br>
	
<div class="container_display">
		
		
	<table>
		<tr>

			<th>COMPANY NAME</th>
            			<th>CAR MODEL</th>
			<th>DATE</th>
            <th>TIME</th>
            <th>ADDRESS1</th>
            <th>ADDRESS2</th>
            <th>PINCODE</th>
            <th>LANDMARK</th>
            <th>CONTACT NUMBER</th>
            <th>ALTERNATE CONTACT NUMBER</th>
            <th>STATUS</th>
            <th> ACTION</th>
            
		</tr>
		<?php $res=mysqli_query($db,"SELECT* from car_details ");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
 	<td>'.$row['companyname'].'</td> 
 	<td>'.$row['carmodel'].'</td> 
	<td>'.$row['date'].'</td> 
	<td>'.$row['time'].'</td> 
    <td>'.$row['address1'].'</td> 
	<td>'.$row['address2'].'</td>  
    <td>'.$row['pincode'].'</td>  
    <td>'.$row['landmark'].'</td> 
    <td>'.$row['contactnumber'].'</td>
    <td>'.$row['alternatecontactnumber'].'</td> 
    <td>'.$row['status'].'</td>  
<td><a href="accept.php?id='.$row['id'].'><button class="btn-primary"">Accept</a><br><br>
<a href="reject.php?id='.$row['id'].'><button class="btn-primary"">Reject</a></td>

		
                  
				</tr>';
} ?>
		
	</table>
	</div>
    
    



  
    
</body>
</html>













