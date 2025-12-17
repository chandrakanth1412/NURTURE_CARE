<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>carwash</title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM signup where id ='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['name']; ?>" required />
          </div>
          <!-- <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>" />
          </div> -->
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label>phonenumber</label>
            <input type="text" class="form-control" name="phonenumber" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['phonenumber']; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>profession</label>
            <input type="text" class="form-control" name="profession" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['profession']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phonenumber = $_POST['phonenumber'];
        $Profession = $_POST['profession'];
      $query = "UPDATE signup SET name = '$Name',
                      email = '$Email', phonenumber = $Phonenumber, profession = '$Profession'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>