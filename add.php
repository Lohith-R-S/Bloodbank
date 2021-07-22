<?php
include_once "config.php";
$id = $_POST['id'];
$blood_type = $_POST['blood_type'];

if($id && $blood_type){
	$query = "INSERT INTO `blood_types` (`hospital_id`, `blood_type`, `status`, `created_at`, `deleted`) VALUES ('$id', '$blood_type', '1', '2021-07-20 13:34:33','1')";
									  
     $result = mysqli_query($connection,$query);
	 if($result){
		 echo "<center><h2><font color='green'>Sample added!</font><br/></h2></center>"; 
               header("Refresh:2; url=add_blood_type.php");
	}
}
else{
	echo "<center><h2><font color='green'>Insuffiecient Data || Operation cancelled!</font><br/></h2></center>"; 
               header("Refresh:2; url=add_blood_type.php");
}

?>