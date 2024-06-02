<?php
$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include "partials/_dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    $existSql = "SELECT * FROM `taskuser` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistsRows = mysqli_num_rows($result);
    if($numExistsRows > 0) {
        // $exists = true;
        $showError = "Username Already Exists.";
    }
    else {
        // $exists = false;
    
        if(($password == $cpassword)) {
            $sql = "INSERT INTO `taskuser` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result) {
                $showAlert = true;
            }        
        }
        else {
            $showError = "Password do not match.";
        }
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now successfully created.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="wrapper">
        <div class="container main">

            <div class="row">
                <div class="col-md-6 side-image">
                       
                <!-------------      image     ------------->
                
                    <img src="images/white.png" alt="">                    
                
            </div>
            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                    <header>Sign Up</header>
                    <form action="/TaskManagement/signup.php" method="post">
                        <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required="" autocomplete="off">
                                <label for="usename">Username</label> 
                            </div> 
                        <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required="">
                                <label for="password">Password</label>
                            </div> 
                            <div class="input-field">
                                <input type="password" class="input" id="cpassword" name="cpassword" required="">
                                <label for="cpassword">Confirm Password</label>
                            </div> 
                        <div class="input-field">
                                
                                <input type="submit" class="submit" value="Sign Up">
                        </div> 
                    </form>
                    <div class="signin">
                        <span>Have an account? <a href="login.php">Login</a></span>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>