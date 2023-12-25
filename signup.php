<!-- php code -->
 <?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
    }
?>  
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        
        $sql="select * from informaction where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from informaction where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);
        
        if($count_user == 0 & $count_email==0){
            
                if($password==$confirm_password){
                    
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO informaction(username, email, password) VALUES('$username', '$email', '$hash')";
                        $result = mysqli_query($conn, $sql);    
                    
                     if($result){
                        header("Location: signin.php");
                     }
                    
                }
                else{
                    echo '<script>
                        alert("Passwords do not match");
                        window.location.href = "signup.php";
                    </script>';
                }
            
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="signup.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="signup.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>
<?php
include("index.php")
?>
<!-- end pgp code -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
   
    <!-- boostrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <style>
        body{
            background-color:#D09CFA!important
        }
        
    </style>
    <div class="container-fulid d-flex justify-content-center align-items-center min-vh-100 ">
        <form class="bg-body-tertiary shadow-lg p-5 fs-5 rounded-3 ms-4 me-4" name="form" action="signup.php" method="POST">
            <h1 class="text-center text-dark mb-5">Sign Up</h1>
            <div class="mb-4">
                <input type="text" class="form-control border border-dark border-2"placeholder="Username" name="username" required>
              
            </div>
            <div class="mb-4">
                 <input type="email" class="form-control border border-dark border-2"aria-describedby="emailHelp" placeholder="Email" name="email" required>
            </div>
            <div class="mb-4">
                <input type="password" minlength="8" required class="form-control border border-dark border-2 " placeholder="Password" name="password">  
            </div>
            <div class="mb-4">
              <input type="password" minlength="8" required class="form-control border border-dark border-2" placeholder="Confirm Password" name="confirm_password">
            </div>
            <button type="submit" class="btn  mb-4 mt-4 w-100 text-white" style="background-color: #A555EC !important;" name="submit">Submit</button>
            <div>
                <span>You already have an account?<a href="signin.php"class="fw-bold ms-2 text-decoration-none text-dark">Sign in</a></span>
            </div>
          </form>

    </div>

    <!-- boostrap javascript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
