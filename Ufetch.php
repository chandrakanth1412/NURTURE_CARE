<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <title>NURTURE CARE - HoME CARE SERVICES</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

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
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!-- <link rel="stylesheet" href="navstyle.css"> -->
  <title>NurtureCare</title>
  <style>
   * {
      box-sizing: border-box;
   }
   img, svg { 
    width: 715px;
    height: 510px;
    /* margin-left: 598px; */
    margin-top: 2px;
    float: right;
}
   body {
      overflow-x: hidden;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   /* Create two equal columns that floats next to each other */
   .column {
      float: left;
      width: 113%;
      height: 100%;
      padding: 10px;
      margin-right: 10px;
      color: black;
   }
   /* Clear floats after the columns */
   .row:after {
      content: "";
      display: table;
      clear: both;
   }
   /* Style the buttons */
   .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
   }
   
   .btn:hover {
      background-color: #ddd;
   }
   .btn.active {
      background-color: #666;
      color: white;
   }
   header {
            /* background-color:#97dcd3; */
            color: white;
            padding: 10px;
            text-align: center;
        }
        element.style {
    margin-left: 335px;
}
.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 50px;
    background-color: #a8f3e9;
    cursor: pointer;
    transition: all 0.3s ease;
}
div.column{
    outline-color: #97dcd3;
    background-color:  #13C5DD;
  
    margin-left: -163px;
    padding-left: 450px;
    height: 380px;
    
}
span.name{
   margin-left: 151px;
   color: black;
}
span.tname{
   margin-left: 89px;
   color: black;
}
span.exp{
   margin-left: 143px;
   color: black;
}
span.staff{
   margin-left: 162px;
   color: black;
}
span.contact{
   margin-left: 93px;
   color: black;
}
span.address{
   margin-left: 138px;
   color: black;
}
span.date{
   margin-left: 163px;
   color: black;
}
span.time{
   margin-left: 163px;
   color: black;
}
span.doctorid{
   margin-left: 142px;
   color: black;
}
/* span.status{ */
   /* margin-left: 139px; */
   /* color: black; */
/* } */

h2{
   text-align: start;
   color: white;
   font-size: 16px;
   margin-left: -203px;
}
body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        header {
            /* background-color:#97dcd3; */
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

        nav {
            background-color:#97dcd3;
            color: white;
            padding: 10px;
            text-align: center;
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
            margin-top: 10px;
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

.wrapper{
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body{
    background: #f5f6fa;
}

.wrapper .sidebar{
    /* background:black; */
    position: fixed;
    top: 0;
    left: 0;
    width: 225px;
    height: 100%;
    padding: 4px 0;
    transition: all 0.5s ease;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
    border-bottom: 1px solid  black;
    color: black;
    font-size: 16px;
    position: relative;
}

.wrapper .sidebar ul li a .icon{
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: black;

    background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}
.wrapper .section{
    width: calc(100% - 225px);
    margin-left: 225px;
    transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
    /* background:#97dcd3; */
    height: 11px;
    display: flex;
    align-items: center;
    padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
    font-size: 28px;
    color: black;
}

.wrapper .section .top_navbar .hamburger a:hover{
    color: black;
}
body.active .wrapper .sidebar{
    left: -225px;
}

body.active .wrapper .section{
    margin-left: 0;
    width: 100%;
}
.hamburger {
    margin-bottom: -113px;
    font-size: 20px;
    cursor: pointer;
}
.btn-primary {
    color: #fff;
    background-color: green;
    border-color: #2e6da4;
}
.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}

.card-scroll{
    overflow-y: auto;
    overflow-x: hidden;
    height: 500px;
    margin-right: 10px;
    margin-top: -13px;
    width: 540px;
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
                        <a href="Ufetch.php" class="nav-item nav-link active">User Request</a>
                      <a href="Raiseissue.html" class="nav-item nav-link ">Staff issues</a>
                      <a href="staffbooking.php" class="nav-item nav-link ">Staff book</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                        
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <img src="img/hdc-7.jpg"/> 
  <!-- /  <h1 style="    PADDING-LEFT: 150px; -->
    <!-- /* text-align: center; */ -->
    <!-- /* font-size: 16px;">USER DETAILS</h1> */ -->
    <br>
<div id="btnContainer">
    
<script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</div>

<center class="card-scroll">
<?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'nurturecare';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
     
        // Query to select all images from the table
        $id = $_SESSION['idno'];
        $sql = "SELECT * FROM user WHERE doctorid='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $name = $row['name'];
                $treatmentname = $row['treatmentname'];
                $idno = $row['idno'];
                $contact = $row['contact'];
                $address = $row['address'];
                $gender = $row['gender'];
                $date = $row['date'];
                $time = $row['time'];
                $doctorid = $row['doctorid'];
                // $status = $row['status'];
                // Generate the HTML for each image with Bootstrap card styling
              
                echo '<div class="row det"style="width: 1164px; ">';
               echo '<div class="column" style="width: 60%;">';
               // echo '<img src="d1.png" width="50" height="50">';
               echo '<h2>Name <span class="name">: '. $name .'</span></h2>';
                  echo '<h2>Gender <span class="exp">: '. $gender .'</span></h2>';
               echo '<h2>Treatment name<span class="tname">: '.$treatmentname.'</span></h2>';
               echo '<h2>Idno <span class="staff">: '.$idno.'</span> </h2>';
               echo '<h2>Contact number<span class="contact">: '.$contact.'</span> </h2>';
               echo '<h2>Address <span class="address">: '.$address.'</span></h2>';
               echo '<h2>date <span class="date">: '.$date.'</span></h2>';
               echo '<h2>time <span class="time">: '.$time.'</span></h2>';
               echo '<h2> doctorid<span class="doctorid">: '.$doctorid.'</span></h2>';
               echo '<div style="margin-left: -311px;
               margin-top: 26px;"> <a href="accept.php?id='.$row['id'].'"> <button class="btn">Accept</button></a>  <a href="reject.php?id='.$row['id'].'"><button class="btn">Reject</a></div><br><br>';
             
            //    echo '<h2> status<span class="status">: '.$status.'</span></h2>';
            //   echo ' <a href="booktheservice.html"> <button class="btn" onclick="listView()">Book the service</button></a>';

               echo '</div>';
               echo '</div>';

               echo '</div><br><br>';
               
            }
        } else {
            echo 'No images found in the table.';
        }

        $conn->close();
        ?>
 </center>
<i class="uil uil-eye-slash showHidePw"></i>
</div>


<div class="input-field button">
   <!-- <input type="submit" value=""> -->

</div>
   <!-- <button class="btn" onclick="listView()">Book the service</button> -->
<script>
   var elements = document.querySelectorAll(".column");
   function listView() {
      Array.from(elements).forEach(item => {
         item.style.width = "100%";
      });
      Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
         if (index === 0) item.classList.add("active");
         else item.classList.remove("active");
      });
   }
   function gridView() {
      Array.from(elements).forEach(item => {
         item.style.width = "50%";
      });
      Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
         if (index === 1) item.classList.add("active");
         else item.classList.remove("active");
      });
   }
</script>

 
</body>
</html>