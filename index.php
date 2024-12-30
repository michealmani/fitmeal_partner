
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" href="../meal3/images/fimage.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
	body{
		z-index:1;
	}
	.content{
		background-color:rgb(15, 15, 15);
		color: white;
		margin-top:200px;
		border-radius:10px;
		z-index:3;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}
		p{ font-size:18px;
			font-weight:300;
			margin-left:76px;
		}
		button{
			background-color: white;
		color: black;
		border:none;
		padding: 7px;
		margin-left:33px;
		font-size:16px;
		border-radius:10px;
		}
		
	</style>
</head>
<body>
<div class='container'>
<div class='row'>
<div class="content col-lg-4 mx-auto  p-5 shadow">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
  	<?php endif ?>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style='color:rgb(226, 238, 225);'>Welcome : <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;"><button name='logout'>Logout</button></a> </p>
    <?php endif ?>
</div>
	</div>
	</div>
<?php if (isset($_GET['logout'])): ?> 
    session_destroy();       // Ends the session
    unset($_SESSION['username']); // Unsets the username session variable
    header("location: login.php"); // Redirects to the login page
<?php endif ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>