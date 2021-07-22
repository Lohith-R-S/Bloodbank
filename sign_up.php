<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood bank | Internshala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  &nbspLogin</a></li>
      </ul>
	</div>
  </div>
</nav>

<center><h2>Register Page</h2></center>


	
	
	
	
      <form id='hospital' class="register-form" action="create_user.php" method="POST">
		
		<select  name="user_type"  id='choose' onchange="myFunction()">
			<option value="select">Select User Type</option>
			<option value="0">Hospital</option>
			<option value="1">Receiver</option>
			</select>
			<br>
				
				<input name='name' id="name" type="text" placeholder="Enter your name"/><br>
				
			  <input name='password' id="password" type="password" placeholder="Enter your password"/><br>
			  
			  <input name='email' id="email" type="email" placeholder="Enter your email address"/><br>
			  
			  <input name='phone' id='phone' type='number' placeholder="Enter your phone number"/><br>			  
	 
		<input name="blood_type" id='blood_type' type='text' placeholder="Enter your blood Group" style="display:none"/>
			  <input   id="user_type" type='text' hidden  /><br>
			
				<button>create</button>
				
			  <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
	
	

  

  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>

