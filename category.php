<?php

	// session_start();
	// $name = $_SESSION['name'];
	
	
	
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {


	$image = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $image;
	
    $categoryname = $_POST['categoryname'];

	$informations = $_POST['informations'];


	// $name = $_SESSION['name'];
	
	// $category1 = $_POST['category1'];
	

	$db = mysqli_connect("localhost", "root", "", "nurturecare ");


	
	$sql = "INSERT INTO category (image, categoryname, informations) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, 'sss', $image, $categoryname, $informations);

// Execute query
mysqli_stmt_execute($stmt);

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (mysqli_query($db, $sql)) {
        echo "<h4>Register Successfully!</h4>";
    } else {
        echo "<h4>Register Failed! " . mysqli_error($db) . "</h4>";
    }
    
}
?>

<!DOCTYPE html>
<html>

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
    height: 100%;
    margin-top: -22px;
}
        body {
            overflow-x: hidden;
            overflow-y: hidden;
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
            margin-top: -790px;
            
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
  color: #13C5DD ;
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
  background: #13C5DD ;
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
                        <a href="Ahome.php" class="nav-item nav-link">Home</a>
                        <a href="category.php" class="nav-item nav-link active">Add Category</a>
                        <a href="Raiseissue.php" class="nav-item nav-link ">Staff issues</a>
                        <a href="serviceadmin.php" class="nav-item nav-link ">Staff</a>
                        <a href="Cfetch.php" class="nav-item nav-link ">Customer complaints</a>
                        <!-- <a href="Srequest.html" class="nav-item nav-link"></a> -->
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                        
                       
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <img src="img/hdc-10.jpg"/>  

  </nav><center>
	   <div id="content">
	  
		<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
           <div>
			<h2><b style="margin-left:-18px; color:#67bfff; font-family:Open Sans, Arial, sans-serif; font-size:14px; font-weight:700; color:#fff;">ADD CATEGORY</b></h2>
                                <BR> 
                              <div class="box" style="    margin-top: 118px;margin-left:814px;">
                                <form action="addcatebk.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
				               <input class="form-control" type="file" name="uploadfile" value="" />
			                   </div><br />
                                    
                               <div class="input-box">
                                  
                                  <input type="text" name="categoryname" placeholder="categoryname: " required>
                                </div><br>
                                    <div class="input-box">
                                  
                                  <textarea type="text" name="informations" placeholder="Information About : "  cols="43" rows="5"></textarea>
                                  </div><br>

                                 
                                  
          
                                     <!-- <div class="form-group col-mg-3">
                                     
                                      <select name ="service_type" class="form-control" style=" border: 2px solid; border-color: #1e6a8f;   margin-left: 5px; borderradius: 5px;height: 34px; width: 294px;color:grey;">

                                      <option value="" selected>categories</option>
                                      <option value="pressure carwash" >pressure carwash</option>
                                      <option value="under body clean" >under body clean</option>
                                      <option value="waterless clean" >waterless clean</option>
                                      <option value="car deep clean" >car deep clean</option>
                                      <option value="Wash and coat" >Wash and coat</option>
                                      </select>
                                     </div><br> -->
            
			
                                     <!-- <div class="form-group col-mg-3">
                                     
                                      <select name ="category1" class="form-control" style=" border: 2px solid;border-color: #1e6a8f;   margin-left: 5px;borderradius: 5px; height: 34px; width: 294px;color:grey;">

                                      <option value="" selected>categories</option>
                                      <option value="Hybrid Ceramic and Interior with underbody" >Hybrid ceramic and Inteior with underbody</option>
                                      <option value="Exterior and Interior with underbody" >Exterior and Interior with underbody</option>
                                      <option value="Exterior and Interior" >Exterior and Interior</option>
                                      <option value="Pressure Exterior Only" >Pessure Exterior Only</option>
                                      <option value="Waterless Exterior and Interior" >Waterless Exterior and Interior</option>

                                      <option value="Hybrid Ceramic and Interior with underbody" >Hybrid Ceramic and Interior with underbody</option>
                                      <option value="Exterior and Interior with underbody" >Exterior and Interior with underbody</option>
                                      <option value="Undercarriage Rinse" >Undercarriage Rinse</option>
                                      <option value="Undercarriage Rust Inhibitor" >Undercarriage Rust Inhibitor</option>
                                      <option value="Underbody Coating" >Underbody Coating</option>

                                      <option value="Waterless Exterior and Interior" >Waterless Exterior and Interior</option>
                                      <option value="Waterless Interior Only" >Waterless Interior Only</option>
                                      <option value="Waterless Exterior Only" >Waterless Exterior Only</option>
                                      <option value="Fleet Services" >Fleet Services</option>
                                      <option value="UV(ultraviolet) Protection" >UV(ultraviolet) Protection</option>

                                      <option value="Full Deep Clean and Exterior with coat" >Full Deep Clean and Exterior with coat</option>
                                      <option value="Interior Full Deep Clean" >Interior Full Deep Clean</option>
                                      <option value="Seat Deep CLean and Exterior" >Seat Deep CLean and Exterior</option>
                                      <option value="Roof Deep Clean and Exterior" >Roof Deep Clean and Exterior</option>
                                      <option value="Dashboard Deep CLean and Exterior" >Dashboard Deep CLean and Exterior</option>
                                      
                                      
                                      <option value="Hybrid Ceramic and Interior with underbody" >Hybrid Ceramic and Interior with underbody</option>
                                      <option value="Hybrid Ceramic and Interior" >Hybrid Ceramic and Interior</option>
                                      <option value="Wash and Wax" >Wash and Wax</option>
                                      <option value="Wash and Sealant" >Wash and Sealant</option>
                                      <option value="Wash and Polymer Coating" >Wash and Polymer Coating</option>
                                      </select>
                                      </div><br> -->
            
			<input type="submit" value="Submit" id = "btn_s" name="upload" style="background-color: #13C5DD;
    border-width: 2px; border-widthcolor: #13C5DD;
    color: #fff;
    width: 90px;
    height: 45px;
}"><br/></br>
			
		
	</form>
        
        
	</div>
      </div>
            </center>
    
    
	
</body>

</html>