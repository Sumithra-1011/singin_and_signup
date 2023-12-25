<!-- php code -->
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
    }
?>
<?php
    $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];
        // echo $password;
        $sql = "select * from informaction where username = '$username'or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            // echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select username from informaction where username = '$username'or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

                $_SESSION['username']= $r['username'];
                $_SESSION['loggedin'] = true;
                header("Location: welcome.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "signin.php";
                    </script>';
        }     
    }
    ?>
    <?php 
    include("connection.php");
    include("index.php");

    ?>
<!-- end php code -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lognin</title>
    <link rel="stylesheet" href="signin.css"/>
    <!-- boostrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 d-flex justify-content-center aligin-item-center " >
          <div class="formhead">
            <form class="rounded-3 p-4 shadow-lg bg-body-tertiary" action="signin.php" method="POST">
             <h1 class="text-center text-dark mb-5 mt-3">Sign In</h1>
            <div class="mb-4">
              <input
                type="text"
                class="form-control"
                id="user"
                aria-describedby="emailHelp"
                placeholder="Email or Username"
                name="user"
              />
              
            </div>
            <div class="mb-4">
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password"
                name="password"
              />
            </div>
            
            <div class="mb-5">
                <a href="forgot_password.php">forgot Password?</a>
            </div>
            <button type="submit" class="btn text-white  fs-5 w-100 mb-4" name="submit">sign In</button>
            <div class="mb-5">
                <span>Don't have an account?<a href="signup.php" class="fw-bold ms-2">Sign Up</a></span>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
            function isvalid(){
                var user = document.form.user.value;
                if(user.length==""){
                    alert(" Enter username or email id!");
                    return false;
                }
                
            }
        </script>
  <!-- boostrap javascript -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  >
 </script>
 </body>
  
</html>
