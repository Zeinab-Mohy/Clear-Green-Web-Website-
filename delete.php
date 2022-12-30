<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="donate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
   
    <div class="forms">
        <div class="form-content">
          
        <div class="signup-form">
          <div class="title">Delete </div>
          <form action="#" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
             
             
             
              <div class="button input-box">
                <input type="submit" value="Delete" name="delete">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>  
        </form>
    </div>
    
    </div>
    </div>
  </div>
</body>
<?php
  if(isset($_POST['delete']))
  {
    include 'connect.php';
   
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $stm="delete from useres where email='$email' and password='$pass'";

    $result=mysqli_query($conn,$stm);
  }
?>
</html>
