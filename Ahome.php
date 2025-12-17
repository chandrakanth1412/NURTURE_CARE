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
      img, svg {
    vertical-align: middle;
    width: 100%;
    height: 907px;
    margin-top: -22px;
}
        body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f5f5f5; */
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
            border: 1px solid#13C5DD;
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
        background-color:  #13C5DD;
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
  border: 1.5px solid #13C5DD;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color:#13C5DD;
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
.input-box.button input {
    width: 149px;
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #13C5DD;
    cursor: pointer;
    font-size: 21px;
    margin-left: 87px;
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
  color:#13C5DD;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    
.box{
    padding-left: 80px;
    width: 423px;
   
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
  border: 1.5px solid#13C5DD ;
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


body.active .wrapper .sidebar{
    left: -225px;
}

body.active .wrapper .section{
    margin-left: 0;
    width: 100%;
}





    </style>
</head>
<body>
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
                        <a href="Ahome.html" class="nav-item nav-link active">Home</a>
                        <a href="category.php" class="nav-item nav-link ">Add Category</a>
                        <a href="Raiseissue.php" class="nav-item nav-link ">Staff issues</a>
                        <a href="serviceadmin.php" class="nav-item nav-link">Staff</a>
                        <a href="Cfetch.php" class="nav-item nav-link">Customer complaints</a>
                        <!-- <a href="Srequest.html" class="nav-item nav-link"></a> -->
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                        
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    <br>
      
    <img src="img/hdc-1.jpg"/>   

    <div id="btnContainer">


                </div>
                   
                    
                        <main style="width: 500px;      margin-top: -925px;margin-left: 740px;">
                            <!-- <section id="landscaping"> --><left>
                              
                              <!-- </section> --></left>
                            
                                <h2><b style="margin-left:199px;font-size: 16px;margin-top:200px">ADD STAFF</b></h2>
                                
                              <div class="box">
                                <form action="developers.php" method="post">
                                    <div class="input-box">
                                    
                                      <input type="text"  name="name" placeholder="NAME : " required>
                                    </div>
                                    <BR>
                                    <?php
                                        $db_host = 'localhost';
                                        $db_user = 'root';
                                        $db_pass = '';
                                        $db_name = 'nurturecare';
                                       
                                        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                                       
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
// Query to retrieve options from the database
$sql = "SELECT id, categoryname FROM category"; // Replace 'categories' with your table name

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo '<select name="specification" style="width: 342px; height: 54px;border: 1.5px solid #13C5DD;border-radius: 6px; color:grey;">';
    echo '<option>Select Department...</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["categoryname"] . '">' . $row["categoryname"] . '</option>';
    }
    echo '</select>';
} else {
    echo "0 results";
}

$conn->close();
?>
                                   <br><br>
                                    <div class="input-box">
                                      
                                      <input type="email" name="email" placeholder="EMAIL : " required>
                                    </div><br>
                                    <div class="input-box">

                                    <input type="password" name="password" placeholder="PASSWORD : " required>
                                    </div><br>
                                    <div class="input-box">
                                  
                                      <input type="text" name="contact" placeholder="CONTACT NUMBER : " required>
                                    </div><br>
                                    <div class="input-box">
                                  
                                      <input type="text" name="experience" placeholder="EXPERIENCE : " required>
                                    </div><br>
                                    <div class="input-box">
                                    
                                      <textarea type="text" name="address" placeholder="ADDRESS : "  cols="43" rows="5"></textarea>
                                    </div><br>
                                    <div class="input-box">
                        
                                      <input type="text" name="idno" placeholder="ID NO : " required>
                                    </div><br>
                                    
                                    <div class="input-box">
                                  
                                        <input type="text" name="fees" placeholder="FEES: " required>
                                      </div><br>
                                    <div class="input-box button">
                                      <input type="Submit" value="Save">
                                    </div><br>
                                   
                                  </form>
                                </div>
                                        
                                  </main>
        </div> 
        <script>
          var hamburger = document.querySelector(".hamburger");
             hamburger.addEventListener("click", function(){
                 document.querySelector("body").classList.toggle("active");
             })
           </script>
</body>
</html>