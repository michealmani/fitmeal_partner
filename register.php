
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="icon" href="../meal3/images/fimage.png">
  <link rel="stylesheet" type="text/css" href="../meal3/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: white; /* Very light gray background */
        }

       .container{
        margin-top: 5px;
       }

        .form-container {
            background-color: #e0f2e0; /* Light green background */
            padding: 20px;
            border-radius: 8px;
        }

        .btn-custom {
            background-color: #006400;
            border-color: #006400;
        }

        .btn-custom:hover {
            background-color: #008000;
            border-color: #008000;
        }

        .img-container1 {
            display: flex;
            justify-content: center; /* Center images horizontally */
            align-items: baseline; /* Center images vertically */
        }
        .img-container2 {
            display: flex;
            justify-content: center; /* Center images horizontally */
            align-items:last baseline; /* Center images vertically */
        }
        .img-container1 img{
            max-width: 100%;
            height: auto;
        }
        .img-container2 img{
            max-width: 100%;
            height: auto;
        }
    </style>

</head>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 col-lg-4 img-container1">
                <img src="fitmeal.jpg" alt="Left Image" >
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="form-container">
                    <h2 class="text-center mb-3"><b style="color: #008000;">  FitMeal Partner</b></h2>
                    <h4 class="text-center mb-4"><b>Create an Account</b></h4>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	                    <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control"  name='username'required >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control"   name='email'required >
                        </div>
						<div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control"  name='password'required>
                        </div>
						<div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control"  name='password_2'required>
                        </div>
  	
	                    <div class="d-grid gap-2">
                             <button type="submit" class="btn btn-custom text-white" name="reg_user">Sign-up</button>
                        </div>
						<div class="mt-3 text-center">
                            <span>Yes I have an account?</span> <a href="login.php"><b style="color: #006400;">Login</b></a>
                        </div>
  </form>
  </div>
            </div>
            <div class="col-md-3 col-lg-4 img-container2">
                <img src="fitmeal3.jpg" alt="Right Image">
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-4 ">
                <button id="return1" onclick="returnhome()">Return Home</button>
    
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="Script.js"></script>

</html>