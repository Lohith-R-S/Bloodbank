<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood bank | Internshala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
   
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:blue;"href="index.php">Blood Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="available.php">Available blood samples</a></li>
		</ul>
	<ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  &nbspLogin</a></li>
      </ul>		
    </div>
  </div>
</nav>
<center><h2>Login Page</h2></center>
<div class="login-page">
  <div class="form">
        <form class="login-form" action="login_validation.php" method="POST">		
      <input name='email' type="email" placeholder="email"/>
      <input name='password' type="password" placeholder="password"/>
	  <button>login</button>
      <p class="message">Not registered? <a href="sign_up.php">Create an account</a></p>
    </form>
  </div>
</div>

  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>

