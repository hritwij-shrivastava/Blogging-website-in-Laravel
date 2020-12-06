<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="70309058388-dafchen7h2p0ge74l30sjblkrvapiop0.apps.googleusercontent.com">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/signup.css">
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
                <form class="login-form" action="{{ route('contactstore') }}" method="post" id="fieldarea" >


                    <!-- {{ csrf_field() }} -->
                    @csrf 

                    <button type="button" class="loginbtn1">Sign up with Google</button>
                    <div class="container-form">
                        <label id="name-label"><b>Display Name</b></label>
                        <input type="text" name="name" id="name-fill" style="background-color: white;" required>
                        <label id="cntempty">*Display name can't be empty</label>

                        <label id="email-label"><b>Email</b></label>
                        <input type="text" name="email" id="emailfill" style="background-color: white;">
                        <label id="invalidemail">*You have entered an invalid email</label>
                        
                        <label id="pass-label"><b>Password</b></label>
                        <input type="password" id="pass-fill" name="psw" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required>
                        <button class="instruction " type="button" id="button-addon2">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                            </svg>
                            <!-- <img src="../resources/images/123.png" alt="" style="width: 20px; height:20px;">  -->
                        </button>
                        <label id="invalidpass">*You have entered an invalid password.</label>

                        <label id="conf-label"><b>Confirm Password</b></label>
                        <input type="password" name="conf-psw" id="conf-fill"
                            style="background-color: white; width:100% !important;">
                        <label id="not-match">*Password do NOT match. Please try again..</label>
                        <label id="ok-match">*Password matched</label>
                        <!-- <iframe src="" frameborder="0" class="captcha"> -->
                        <!-- <div class="adjust"> -->
                        <div id="adjust" style="transform: scale(0.90); -webkit-transform: scale(0.90); transform-origin: 0 0; -webkit-transform-origin: 0 0;"  class="g-recaptcha" data-sitekey="6Lc6O7gZAAAAACvWdO8IBR4lXwAkn3oKoFG010KR"></div>
                        <!-- </iframe> -->
                        <!-- </div> -->
                        <button type="button"  class="button23" onclick="submission()" >Sign up</button>
                    </div>
                </form>
                <div class="arrow-box" id="message">
					<h3>Password must contain the following:</h3>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
           	</div>
        </div>
        <div id="blankspace"></div>
    </div>






   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/signup.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
    

	<?php
      
    //   if($_SESSION['status']=='email_already') {
    //     echo '<script type="text/JavaScript">  
    //     swal({
	// 		class: "myClass",
	// 		title: "Oops!",
	// 		text: "Email already exists.Try forget password",
	// 		icon: "warning",
	// 		button: "Ok got it",
			
	// 		dangerMode: true,
	// 	  });
    //     </script>' ;
    //     }
    //     elseif($_SESSION['status']=='uff') {
        
    //         echo '<script type="text/JavaScript">
    //         swal({
    //             class: "myClass",
    //             title: "Oops!",
    //             text: "Please fill the captcha",
    //             icon: "warning",
    //             button: "Ok got it",
                
    //             dangerMode: true,
    //         });
    //         </script>' ;
    //     }
    //     else{
    //         unset($_SESSION['status']);
    //     }	 
    ?>

   
	

</body>

</html>