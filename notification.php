<?php
session_start();
require_once("db_connection.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <title>NURTURECARE - HOME CARE SERVICES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
        body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url(img/hdc-12.jpg) rgba(255, 255, 255, 0.7);
            background-size: cover;
            width: 100%;
            height: 870px;
            background-blend-mode: overlay;
            
            
        }
        
        header {
            background-color:#97dcd3;
            color: white;
            padding: 1px;
            text-align: center;
        }

        .hamburger {
            font-size: 20px;
            cursor: pointer;
        }

        .menu-bar {
            display: flex;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
        }

        .menu-items {
            display: none;
            position: absolute;
            background-color: black;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 10px;
            left: 0;
            top: 40px;
            cursor: pointer;
        }

        .show-menu {
            display: block !important;
        }

       
        ul {
            list-style: none;
            padding: 0;
        }
        
        li {
            display: inline;
            margin-right: 20px;
        }
        
        a {
            text-decoration: none;
            color: black;
        }
        
        main {
            padding: 20px;
        }
        
        section {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #a8f3e9;
            background-color: white;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            text-align: center;
            color: black;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: black;
        }

        /* Style for the dropdown menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown button */
        .dropbtn {
            text-decoration: none;
            color: black;
            margin-right: 20px;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #3333; /* Background color for dropdown */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style for dropdown links */
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #444;
        }

        /* Display the dropdown content when hovering over the dropdown */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .img{
            padding-left: 68rem;
        
        }
     .service{
        height: 70px;
         width: 400px;
        background-color: #97dcd3;
        border-radius: 100px;
     }


     form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 18px 15px;
  font-size: 12px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #97dcd3;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color:#97dcd3;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  width: 300px;
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #97dcd3;
    cursor: pointer;
    font-size: 21px;
}
.input-box.button input:hover{
  background: #97dcd3;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color:#97dcd3;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    
.box{
  width:300px;
}
  form{
    height: 200px;
  }
  textarea{
    height: 100%;
  width: 100%;
  outline: none;
  padding: 18px 15px;
  font-size: 12px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #97dcd3;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
    
  }


  @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

*{
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}






h2 {
    font: caption;
    margin-top: 0;
    text-align: center;
    color: black;
}
div.column {
    height: 119px;
    width: 754px;
    margin-left: 83px;
    outline-style: solid;
    outline-color: #97dcd3;
    background-image: linear-gradient(to top, rgba(255,0,0,0), #97dcd3 190%);
}

    </style>
</head>
<body>
 <!-- Navbar Start -->
 <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>NURTURE CARE</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="Frontpage.html" class="nav-item nav-link ">Home</a>
                        <a href="service.php" class="nav-item nav-link ">Services</a>
                        <a href="notification.php" class="nav-item nav-link active">Booking Status</a>
                        <a href="complaints.html" class="nav-item nav-link">complaints</a>
                        <!-- <a href="Srequest.html" class="nav-item nav-link">User Request</a> -->
                        <a href="emergency.html" class="nav-item nav-link">Emergency</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                        
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->  
    
      
     <br>

    <h2><b style="margin-left:100px;">NOTIFICATIONS</b></h2>

    <script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
    
   
 </div>
 <br />
 <center>

 
	
<div class="container_display">
<style>
table, th, td {
  border:1px solid black;
  text-align: center;
  color:#000000;
}
</style>
<body>

<!-- <h2>TR elements define table rows</h2> -->

<table style="width:100%">
  <tr>
    <th>Name</th><br>
            <th>TreatmentName</th>
            <th>Idno</th>
			<th>Contact</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Date</th>
            <th>Time</th>
            <th>Doctorid</th>
            <th>Status</th>
            <th>Payment</th>
            
            
		</tr>
    <?php

$id = $_SESSION["user_id"];
$fees = 2000;
// $res = mysqli_query($conn, "SELECT fees FROM developers INNER JOIN user ON developers.fees= user.fees;");

$res = mysqli_query($conn, "SELECT * FROM user WHERE userid='$id'");
while ($row = mysqli_fetch_array($res)) {
    echo '<tr> 
        <td>' . $row['name'] . '</td> 
        <td>' . $row['treatmentname'] . '</td> 
        <td>' . $row['idno'] . '</td> 
        <td>' . $row['contact'] . '</td> 
        <td>' . $row['address'] . '</td> 
        <td>' . $row['gender'] . '</td>  
        <td>' . $row['date'] . '</td>  
        <td>' . $row['time'] . '</td> 
        <td>' . $row['doctorid'] . '</td>
       <td>' . $row['status'] . '</td>  
       
        <td>';

        if ($row['status'] == 'Accepted') {
          echo '<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="' . $row['fees'] . '" data-id="1">Pay Now</a>';
      } elseif ($row['status'] == 'Rejected') {
          echo '<button class="btn btn-sm btn-danger float-right">Rejected</button>';
      } else {
          echo '<button class="btn btn-sm btn-waiting float-right">Waiting</button>';
      }

    echo '</td></tr>';
}
?>

		
	</table>
	</div>
    
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_zogp4w4jLlCNCx",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "NURTURECARE",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>

<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_zogp4w4jLlCNCx", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "NURTURECARE",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>
</html>