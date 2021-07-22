 <?php
 session_start();
 $user_id = $_SESSION['user_id']??'';
 $user_type =$_SESSION['user_type']??''; 
 if($user_type != '0'){
 
	 echo "<center><h2><font color='green'>Access denied!</font><br/></h2></center>";  
              header("Refresh:2; url=index.php");
 
 }
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
      <a class="navbar-brand" style="color:blue;" href="index.php">Blood Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="available.php">Available blood samples</a></li>
		<?php		
		
		if(isset($_SESSION['name']))
		{
			if($_SESSION['user_type'] == 0)
		{
        echo '<li><a href="add_blood_type.php">Add blood info</a></li>
        <li class="active"><a href="view_request.php">View requests</a></li>';
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
<center><h3><b>Blood Samples requests by recievers</b></h3>
</center>
<div class="available">
        
                                    <?php
                                    //fetching all available blood samples
									//query can be changed to show only available samples. 
                                      include_once "config.php";
                                      $query = "SELECT request_samples.sample_id,
                   									  blood_types.blood_type,
										              users.name,
										               users.email FROM `request_samples` 
										               INNER JOIN blood_types ON request_samples.sample_id=blood_types.id 
										               INNER JOIN users ON request_samples.user_id=users.id
										                 WHERE request_samples.hospital_id='$user_id'";
									  
                                      $result = mysqli_query($connection,$query);
									  ?> 
                                      
                                        <table id="" class="" style="width:90%;margin:1%">
                                      <tr>
										  <th>Sample_id</th>
										  <th>Blood Type</th>
										  <th>Requested receiver</th>
										  <th>Receiver Email</th>
									  </tr>
                                    <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result)) {
													
                                              echo "<tr>";
                                                echo "<td>".$res['sample_id']."</td>";
                                                echo "<td>".$res['blood_type']."</td>";
												echo "<td>".$res['name']."</td>";
												echo "<td>".$res['email']."</td>";
												}
														}
														?>
											
                                </table>
                        </div>



  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>

