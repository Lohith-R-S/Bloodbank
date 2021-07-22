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
      <a class="navbar-brand" style="color:blue;"href="index.php">Blood Bank</a>
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
        echo '<li class="active"><a href="add_blood_type.php">Add blood info</a></li>
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
<center><h3><b>Available Blood Samples in your Hospital</b></h3>
</center>
<div class="available">
        
                                    <?php
                                    //fetching all available blood samples
									//query can be changed to show only available samples. 
                                      include_once "config.php";
                                      $query = "SELECT * FROM `blood_types` WHERE hospital_id ='$user_id'";
									  
                                      $result = mysqli_query($connection,$query);
									  ?> 
                                      
                                        <table id="" class="" style="width:90%;margin:1%">
                                      <tr>
                                      <th>Serial</th>
                                      <th>Blood Type</th>
                                      <th>Status</th>
									  <th></th>
                                      </tr>
                                    <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result)) {
													$id = $res['id'];
                                              echo "<tr>";
                                                echo "<td>".$res['id']."</td>";
                                                echo "<td>".$res['blood_type']."</td>";
												if($res['status']==0){
													echo "<td>Not Available</td>";
													$status = '1';
												}elseif($res['status']==1){
													echo "<td>Available</td>";
													$status = '0';
												}
												 echo '<td>
									<a href="update.php?id='.$id.'&status='.$status.'" class=""><span class="d-none d-md-inline">Change Status</span>
										  </td>'; }
														}
														?>
											
                                </table>
                        </div>
  
<div class="add_blood_type">
	<form action="add.php" method="POST">
	<input name="id" value="<?php echo "$user_id";?>" hidden></input>	
      <input name='blood_type' type="text" placeholder="Enter Blood Group"/>
      <button>Add Blood Group</button>      
    </form>
</div>	

<p><span style="color:red">**</span>Can add extra column to delete the sample from listing!!</p>
  

<footer class="container-fluid footer text-center">
  <p><p>Designed by : <a href="https://www.linkedin.com/in/lohith-r-s/" target="_blank" class="">R S Lohith</a></p></p>
</footer>

</body>
</html>

