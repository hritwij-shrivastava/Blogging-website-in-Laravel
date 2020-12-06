<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Sphoot-For Those Who Want To Grow</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    @include('sweet::alert')
    @include('layout.navbar')

    <div id="wrapper-side">
        <div class="form-place">
            <div class="center-area">
                <form class="login-form" action="{{ route('validation') }}" method="post">
                
                    @csrf 

                    <button type="submit" class="loginbtn1">Log in with Google</button>
                    <div class="container-form">
                        <label id="email-label"><b>Email</b></label>
                        <input type="text" name="email" id="email-fill" style="background-color: white;">
                        <label id="pass-label"><b>Password</b></label>
                        <input type="password" name="psw" id="pass-fill"  style="background-color: white;" >
                        <a href="" style="text-decoration:none; position: absolute; left: 160px; font-size: 15px;">Forgot password?</a>
                        <button type="submit" class="button23">Login</button>                       
                    </div>
                </form>
                <div class="signin">
                    <p>Don't have an account? <a href="../signup/signup-page.php">Sign up</a></p>
                </div>
        
            </div>
    
        </div>
        <div id="blankspace"></div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/tools/sweetalert/sweetalert.min.js"></script>
    <script src="public/js/login.js"></script>

    <?php
      /*
      if($_SESSION['status']==1) {
        echo '<script type="text/JavaScript">  
        swal({
			title: "Registration Successful!",
			text: "Please login to contnue",
			icon: "success",
			button: "OK",
		  });
        </script>' ;
        }
        elseif($_SESSION['status']=='password-wrong') {
        
            echo '<script type="text/JavaScript">
            swal({
                class: "myClass",
                title: "Try again",
                text: "Please check the password.",
                icon: "warning",
                button: "Ok got it",
                
                dangerMode: true,
            });
            </script>' ;
        }
        else{
            unset($_SESSION['status']);
        }	
        */ 
    ?>

</body>

</html>