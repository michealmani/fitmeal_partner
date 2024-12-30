
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="icon" href="../meal3/images/fimage.png">
  <link rel="stylesheet" href="../meal3/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
        body {
            background-color:white;
            border: none;
        }

        .container {
            margin-top: 20px;
        }

        .form-container {
            background-color: #e8f5e9;
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
       
        
    </style>

</head>
<body>
<div class="container">
<div class="row ">
  <div class="col-lg-3">
                <img src="fitmeal0.jpg" width='300px' height='300px'alt="Running Woman">
            </div>
            <div class="col-lg-6 form-container">
                    <h2 class="text-center mb-3"><b style="color: #008000;">FitMeal Partner</b></h2>
                    <h4 class="text-center mb-4"><b style="color: #006400;">  Login</b></h4>
                    
  <form method="POST" action="login.php">
  	<?php include('errors.php'); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <div class="input-group mb-5 d-flex justify-content-between">              
                            </div>        
                            <button type="submit" class="btn btn-custom text-white" name='login_user'>Login</button>
                        </div>
                        <div class="mt-3 text-center">
                            <span>Don't have an account?</span> <a href="register.php"><b style="color: #006400;">Register</b></a>
                        </div>
  </form>
  </div>
            </div>

    </div>
    <div class="container ">
        <div class="row">
            <div class="col-3 col-lg-4">
                <button id="return2" onclick="returnhome()">Return Home</button>
    
            </div>
        </div>
    </div>
</body>
<script src="Script.js"></script>
</html>
