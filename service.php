<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <title>NURTURE CARE</title>
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

        .container {
            max-width: 1280px;
            margin: 20px auto;
            padding: 20px;
            background-color:#eae9e5;

        }
        .category-title{
            width:100%;
            font-size:24px;
            text-align: center;
        }
        .info{
            text-align: center;
            width: 100%;
            color: #13C5DD;
            font-size: 16px;
            padding: 0 20px;
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
    height: 180px;
    background-color: #EFF5F9;
    padding: 2px;
    border-radius: 11px;
    box-shadow: none;
    margin-bottom: 20px;
    width: 390px;
}
        .category-item2 {
    background-color: #EFF5F9;
    padding: 0px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 4px;
    width: 390px;
    border-width: 0px;
}
        .category-icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .category-title {
            font-weight: bold;
            font-family:"Roboto Condensed",sans-serif;
            color:black;
            margin-right:50px;
            margin-top:-30px;
            margin-bottom:10px;
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
  padding: 14px;
  transition: all 0.4s ease;
  color:white;
  background-color:#EFF5F9;
}
p {
    text-align: justify;
    margin-top: -2px;
    margin-bottom: 0rem;
    font-family: "Open Sans", Arial, sans-serif;
    color: #fff;
    margin-right: 40px;
    font-size: 14px;
}
.logo{
    font-size:31px;
}
dl, ol, ul {
    margin-top: 0;
    margin-bottom: 0rem;
}
.img{
    height:200px; 
    width:300px; 
    margin-top:26px;
}
.box-container{
    margin-left:120px;
}
    </style>
</head>
<body>
<!-- Navbar Start -->
 <div class="container-fluid sticky-top bg-white shadow-sm">
            <div class="">
                <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Nurture Care</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="frontpage.html" class="nav-item nav-link ">Home</a>
                            <a href="choosetheservice.php" class="nav-item nav-link active">Services</a>
                            <a href="notification.php" class="nav-item nav-link">Booking Status</a>
                            <a href="complaints.html" class="nav-item nav-link">Complaints</a>
                             <a href="emergency.html" class="nav-item nav-link">Emergency</a>
                             <a href="logout.php" class="nav-item nav-link">Logout</a>
                            <!-- <a href="price.html" class="nav-item nav-link">Pricing</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                    <a href="team.html" class="dropdown-item">The Team</a> -->
                                    <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                                    <a href="search.html" class="dropdown-item">Emergency</a>
                                </div>
                            </div> -->
                            <!-- <a href="contact.html" class="nav-item nav-link">Log out</a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
  <section class="home">
    
    <div class="bg-white">
        <div style="text-align:center;">
            <h1 style="color: #EFF5F9; font-family:Open Sans, Arial, sans-serif;  color:revert;   font-weight: 700;
    font-size: 20px;" class="mt-4">Services Available</h1>
            <p class="mt-2 mb-3" style="font-size: 14px; text-align:center; color: black;font-family: Open Sans, Arial, sans-serif;">Select the Service we will be at your place in While </p>
        </div>
        
        <div class="box-container d-flex mb-5" style="
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            margin: 0 auto;
            justify-content: center;">
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

        // if (isset($_GET['service'])){
        //   $service = $_GET['service'];
        //   $_SESSION['service'] = $service;
          

       
        // Query to select all images from the table
        $sql = "SELECT * FROM category ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data

                $image = $row['image'];
                $categoryname = $row['categoryname'];
                $informations = $row['informations'];
                
          
                echo '<div class="price-block agile" style="border-radius: 8px;background-color:#EFF5F9;height:340px;width: 360px;margin-left: 20px;margin-bottom: 20px;">';
                    echo '<a href="choosetheservice.php?category='.$categoryname.'" style="text-decoration:none;">';
                       echo '<li class="category-item1 d-flex flex-column " style="background-color:#EFF5F9; width:355px;">';
                            echo '<span class="category-icon" style="
                            text-align: center;
                        "><img src="./img/' . $image . '" alt=""  style="width:250px; height:150px; margin-top: 15px;"></span>';
                            echo '<div class="ml-5 mt-5 ">';
                                echo '<h2 class="category-title">'.$categoryname.'</h2>';
                               echo '<p class="info">'.$informations.'</p>';
                            echo '</div>';
                        echo '</li>';
                   echo '</a>';
                echo '</div>';
            }
        } else {
            echo 'No images found in the table.';
        }
    //   }
        $conn->close();
        ?>

                <!-- <div class="price-block agile" style="margin-right:250px;  border-radius: 8px; background-color:#1e6a8f;">
                    <a href="servicefetch.php?service=under body clean" style="text-decoration:none;">
                        <li class="category-item2 d-flex flex-column" style="width:355px;">
                            <span class="category-icon"><img src="./images./underbodycleaningimg.jpg" class="img" alt=""></span>
                            <div class="ml-5 mt-5">
                                <h2 class="category-title">Underbody Cleaning</h2>
                                <p>Our underbody cleaning service employs powerful techniques, ensuring a meticulous cleanse, eliminating dirt and debris from the often overlooked areas beneath your vehicle.</p>
                            </div>
                        </li>
                    </a>
                </div>
            </div> -->
            <!-- <div class="box-container d-flex flex-row mb-5">
                <div class="price-block agile" style="margin-right:250px;   border-radius: 8px;background-color:#1e6a8f;">
                    <a href="servicefetch.php?service=waterless clean" style="text-decoration:none; margin-right:250px;">
                        <li class="category-item1 d-flex flex-column" style="width:355px;">
                            <span class="category-icon"><img src="./images./waterlesscleaningimg.png" class="img" alt=""></span>
                            <div class="ml-5 mt-5">
                                <h2 class="category-title">Waterless Cleaning</h2>
                                <p>Our eco-friendly waterless cleaning method delivers a pristine shine, without a drop of water, leaving your vehicle spotless and environmentally responsible.</p>
                            </div>

                        </li>
                    </a>
                </div>
                <div class="price-block agile" style="margin-right:250px;  border-radius: 8px; background-color:#1e6a8f;"> 
                    <a href="servicefetch.php?service=car deep clean" style="text-decoration:none;">    
                        <li class="category-item2 d-flex flex-column" style="width:355px;">
                            <span class="category-icon"><img src="./images./cardeepcleaningimg.jpg" class="img" alt=""></span>
                            <div class="ml-5 mt-5">
                                <h2 class="category-title">Car Deep Clean</h2>
                                <p>Our car deep cleaning service goes beyond the surface, meticulously purging contaminants to restore your vehicle's interior to its pristine best.</p>
                            </div>
                        </li>
                    </a>  
                </div>
            </div>  
            <div class="box-container price-block agile" style="width:0px; background-color:#1e6a8f;">
                <a href="servicefetch.php?service=Wash and coat" style="text-decoration:none;">  
                    <li class="category-item1 d-flex flex-column" style="    height: 388px; width:355px;">
                        <span class="category-icon"><img src="./images./washandcoatimg.jpg" class="img" alt=""></span>
                        <div class="ml-5 mt-5 text-center">
                            <h2 class="category-title">Wash and Coat</h2>
                            <p>Our wash and coat service provides a dual benefit, cleansing your vehicle while applying a protective layer, leaving it sparkling and shielded.</p>
                        </div>
                    </li>
                </a>
            </div> -->
    </div>
    </div>
    </section>
    <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>
</body>
</html>