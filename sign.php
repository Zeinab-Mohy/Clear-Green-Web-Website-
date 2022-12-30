<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/form.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front" >
            <img src="aboutus.jpg" alt="">
             <div class="text" >
              <span class="text-1"> Every new frind is a<br> new adventure</span>
              <span class="text-2"> Let's get connected</span>
            </div> 
          </div>
      <div class="back">
        <img  src="aboutus.jpg" alt="">
        <div class="text" >
          <span class="text-1" style="color:#2B2A15 ;">Complete miles of journey <br> with one step</span>
          <span class="text-2" style="color:#2B2A15 ;">Let's get started</span>
        </div>
      </div>
      
    </div>
    <div class="forms">
        <div class="form-content">
          
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text"name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email"  placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    <div class="login-form">
        <div class="title">Login</div>
      <form action="index.php" method="POST">
        <div class="input-boxes">
          <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="text"><a href="#" >Forgot password?</a></div>
          <div class="text" ><a href="update.php" style="color : blue" >Do you want to update your name?</a></div>
          <div class="button input-box">
            <input type="submit" value="Log In" name="login">
          </div>
          <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
        </div>
    </form>
  </div>
    </div>
    </div>
  </div>
  <?php
 if(isset($_POST['submit']))
 {
    include 'connect.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $stm="insert into useres (name,email,password) values('$name','$email','$pass')";
    $x=mysqli_query($conn,$stm);

    if ($x)
    {  
      //echo "new user inserted";
    }
    else
    {
      //echo "fail";
    }
}
  ?> 
  <?php
  if(isset($_POST['login']))
  {
    include 'connect.php';
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $stm="select * from useres where email='$email' and password='$pass'";

    $result=mysqli_query($conn,$stm);

    $count=mysqli_num_rows($result);
    if($count==1)
    {
      header('location: index.php');
    }
  }
?>
</body>
</html>
