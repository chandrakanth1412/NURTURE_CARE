<?php
session_start();

// Check if 'id' is set in the URL parameters
if (isset($_GET['id'])) {
    // Retrieve the value from the URL
    $doctor_id = $_GET['id'];

    // Store the value in a session variable
    $_SESSION['id'] = $doctor_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "ID not provided in the URL.";
}

// Rest of your code...
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- <link rel="stylesheet" href="navstyle.css"> -->
    <title>NurtureCare</title>
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
    background:black;
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
    border-bottom: 1px solid black;
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
    height: 33px;
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
.hamburger {
    margin-bottom: -92px;
    font-size: 20px;
    cursor: pointer;
}

.service {
    border: hidden;
    height: 66px;
    width: 220px;
    background-color: #97dcd3;
    border-radius: 100px;
    margin-top: 200px;
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
                    <a href="home.html" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="userprofile.html">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="complaints.html">
                        <span class="icon"><i class='fa fa-list-alt' style='color: white'></i></span>
                        <span class="item">Complaints</span>
                    </a>
                </li>
                <li>
                    <a href="Srequest.html">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Staff Request </span>
                    </a>
                 </li>
                 <li>
                    <a href="logout.php">
                        <span class="icon"><i class='fas fa-sign-out-alt' style='color: white'></i></span>
                        <span class="item">Log Out</span>
                    </a>
                </li>
                
                 
             </ul>
         </div>
         
     </div>
     </div>
 
 
  
     <h1 class="logo" style="margin-right:-475px; margin-bottom:25px;"><img src="logo2.jpeg" width="50" height="50" style="    margin-bottom: -10px;"> NurtureCare   <a href="notification.php" ><img style="margin-left:335px;" src="N-1.png" width="25" height="25"></a></h1>
           </header>
    

   
<br>
<br>

<br>
<form action="alertdeveloper.php" method="POST"> 
<div style="text-align:center;"> 
    <h2> <h1> Schedule Date and Time</h2>
        Select date and time:
        <input type="hidden" name="doc_id" value="<?php echo $doctor_id; ?>">
        <input name="date" type="date" required />
        <input name="time" type="time" required />
</div>

<br>
<center>
    <div >
         <button type="submit" class="service" onclick="listView()">Schedule the service</button>
    </div>
</center>
</form>
<script>
    var hamburger = document.querySelector(".hamburger");
       hamburger.addEventListener("click", function(){
           document.querySelector("body").classList.toggle("active");
       })
     </script>

</body>

</html>
