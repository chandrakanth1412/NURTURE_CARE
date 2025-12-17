<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
            margin-top: 0;
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

body{
    background: #f5f6fa;
}

.wrapper .sidebar{
    background: rgb(5, 68, 104);
    position: fixed;
    top: 0;
    left: 0;
    width: 225px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
    border-bottom: 1px solid #10558d;
    color: rgb(241, 237, 237);
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
    color: #0c7db1;

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
    background:#97dcd3;
    height: 50px;
    display: flex;
    align-items: center;
    padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
    font-size: 28px;
    color: #f4fbff;
}

.wrapper .section .top_navbar .hamburger a:hover{
    color: #a2ecff;
}
body.active .wrapper .sidebar{
    left: -225px;
}

body.active .wrapper .section{
    margin-left: 0;
    width: 100%;
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
            background-color:#97dcd3;
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
   outline-style: solid;
   outline-color: #97dcd3;
   background-image: linear-gradient(to top, rgba(255,0,0,0),  #97dcd3 190%);
}
span.name{
   margin-left: 160px;
   color: black;
}
span.tname{
   margin-left: 47px;
   color: black;
}
span.exp{
   margin-left: 102px;
   color: black;
}
span.staff{
   margin-left: 145px;
   color: black;
}
span.contact{
   margin-left: 50px;
   color: black;
}
span.address{
   margin-left: 137px;
   color: black;
}

h2{
   text-align: start;
   color: #97dcd3;
}

    </style>
</head>
<body>
    <header>
        <div class="wrapper">
     <!--Top menu --><div class="section">
         <div class="top_navbar">
             <div class="hamburger">
                 <a href="#">
                     <i class="fas fa-bars"></i>
                 </a>
             </div>
         </div>

     </div>
     <div class="sidebar">
        <!--profile image & text-->
         <!--menu item-->
         <ul>
             <li>
                 <a href="#" class="active">
                     <span class="icon"><i class="fas fa-home"></i></span>
                     <span class="item">Home</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <span class="icon"><i class="fas fa-user-shield"></i></span>
                     <span class="item">Profile</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <span class="icon"><i class='fa fa-list-alt' style='color: white'></i></span>
                     <span class="item">Complaints</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <span class="icon"><i class="fas fa-user-friends"></i></span>
                     <span class="item">Staff Request </span>
                 </a>
             </li>
             <li>
                 <a href="#">
                     <span class="icon"><i class='fas fa-sign-out-alt' style='color: white'></i></span>
                     <span class="item">Log Out</span>
                 </a>
             </li>
             
         </ul>
     </div>
     
 </div>
 </div>
 <div>
    <h1 class="logo" style="margin-right:-400px;"><img src="logo2.jpeg" width="50" height="50"> NurtureCare    <img style="margin-left:335px;" src="N-1.png" width="30" height="30"></h1>
    <!-- <h1><img src="N-1.png" width="50" height="50"></h1> -->
</div>


</header><br>


<h1 style="text-align:center;">Choose The Service</h1>
<div id="btnContainer">
</div>
<br />
<center>

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
        $sql = "SELECT * FROM developers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $name = $row['name'];
                $specification = $row['specification'];
                $idno = $row['idno'];
                $contact = $row['contact'];
                $address = $row['address'];
                $experience = $row['experience'];

                // Generate the HTML for each image with Bootstrap card styling
              
                echo '<div class="row det" style="width:800px;">';
               echo '<div class="column" >';
               echo '<img src="d1.png" width="50" height="50">';
               echo '<h2>Name <span class="name">: '. $name .'</span></h2>';
               echo '<h2>Experience <span class="exp">: '. $experience .'</span></h2>';
               echo '<h2>Treatment name<span class="tname">: '.$specification.'</span></h2>';
               echo '<h2>Staff id <span class="staff">: '.$idno.'</span> </h2>';
               echo '<h2>Contact number<span class="contact">: '.$contact.'</span> </h2>';
               echo '<h2>Address <span class="address">: '.$address.'</span></h2>';
              echo ' <a href="booktheservice.html"> <button class="btn" onclick="listView()">Book the service</button></a>';

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
   <input type="submit" value="Login">

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

 
  <script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</body>
</html>