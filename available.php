 <?php
 session_start();
 $user = $_SESSION['user_type']??'login';
 $user_id = $_SESSION['user_id']??'';
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
      <a class="navbar-brand" style="color:blue;"href="index.php">Blood Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="available.php">Available blood samples</a></li>
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
<center><h3><b>Available Blood Samples</b></h3></center>

  <div class="available">
        
                                    <?php
                                    //fetching  available blood samples
									//query can be changed to show all samples. 
                                      include_once "config.php";
                                      $query = "SELECT blood_types.id,blood_types.status,blood_types.hospital_id,blood_types.blood_type,users.name FROM `blood_types` INNER JOIN users ON blood_types.hospital_id = users.id WHERE blood_types.status = '1' ORDER BY `blood_types`.`id` ASC";
									  
                                      $result = mysqli_query($connection,$query);
									  ?> 
                                      
                                        <table id="" class="" style="width:90%;margin:1%">
                                      <tr>
                                      <th>Serial</th>
                                      <th>Blood Type</th>
                                      <th>Hospital Name</th>
                                      <th>Status</th>
									  <th></th>
                                      </tr>
                                    <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result)) {
													$sample_id = $res['id'];
													$hospital_id = $res['hospital_id'];	
													
                                              echo "<tr>";
                                                echo "<td>".$res['id']."</td>";
                                                echo "<td>".$res['blood_type']."</td>";
                                                echo "<td>".$res['name']."</td>"; 
												if($res['status']==0){
													echo "<td>Not Available</td>";
												}elseif($res['status']==1){
													echo "<td>Available</td>";
												}												
                                                echo "<td>"?>
												<?php
											
			if($user == '1')	{
        echo '<a href="request.php?user_id='.$user_id.'&sample_id='.$sample_id.'&hospital_id='.$hospital_id.'" class=""><span class="d-none d-md-inline">Request Sample</span></a>';
		}else if($user == '0'){
			echo '<span class="d-none d-md-inline">Only Receiver can request sample</span>';
		}else if($user == 'login'){
			echo '<a href="login.php" class=""><span class="d-none d-md-inline">Login to Request sample</span></a>';
		}
		
    
	?>
      <?php echo "</td>"; }
                                          }?>
                                </table>
                        </div>
  <p><span style="color:red">**</span>Previoulsy requested samples also displayed in List if the Receiver is loggedin!!</p>
  <p><span style="color:red">**</span>Can be changed to show only "not requested sample" through query</p>  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>

