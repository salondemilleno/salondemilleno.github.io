<?php include('server.php') ?>
<?php include('nav.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="steph.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login
      </button>
  	</div>
  	<?php
    if(isset($_POST['login.php'])){
      $_SESSION['username'] = $_POST['username'];
      header('Location: DateRange,php');
    }
    else{
      session_destroy();
    }
    ?>
  </form>
<br>
<br>
<br>
  <img src="images/footer.jpg"width="1340px" height="200px">
</body>
</html>