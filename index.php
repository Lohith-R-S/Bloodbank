<?php
 session_start();
 
  ?>
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
  .btn-primary{
	  width:250px;
	  margin:0.5%;
  }
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="available.php">Available blood samples</a></li>
        <?php		
		
		if(isset($_SESSION['name']))
		{
			if($_SESSION['user_type'] == 0)
		{
        echo '<li><a href="add_blood_type.php">Add blood info</a></li>
        <li><a href="view_request.php">View requests</a></li>';
		}
		}
		?>
      </ul>
     <?php
		
		
		if(isset($_SESSION['name']))
		{
			if($_SESSION['user_type'] == 0)
		{
		  echo '<ul class="nav navbar-nav navbar-right">
        <li style="color:white">Hospital : '.$_SESSION["name"].'</li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbspLogout</a></li>
      </ul>';
		}elseif($_SESSION['user_type'] == 1) {
			echo '<ul class="nav navbar-nav navbar-right">
        <li style="color:white">Receiver : '.$_SESSION["name"].' </li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbspLogout</a></li>
      </ul>';
		}
		}else{
			echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  &nbspLogin</a></li>
      </ul>';
		}
		?>
    </div>
  </div>
</nav>
<br><br><br>

   
      
      		<center><h3><b>Welcome to Blood Bank</b></h3></center>
			<br><br><br>
			
			<center>
			<a class="btn btn-primary" href="available.php" role="button">Available Blood Samples</a>
			<br>
			<?php		
		
		if(isset($_SESSION['name']))
		{
			if($_SESSION['user_type'] == 0)
		{
        echo '<a class="btn btn-primary"  role="button" href="add_blood_type.php">Add blood info</a>
		<br>
        <a class="btn btn-primary" role="button" href="view_request.php">View requests</a>';
		}
		}else{
			echo '<a class="btn btn-primary" href="login.php" role="button">Login</a>;
			<br>
			<a class="btn btn-primary" href="sign_up.php" role="button">Register</a>';
		}
		?>
		
			<br>
			</center>
			
      
    
<br><br>
  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>
