<?php
include_once "config.php";
                                     
$user_id = $_REQUEST['user_id'];
$hospital_id = $_REQUEST['hospital_id'];
$sample_id = $_REQUEST['sample_id'];
if($user_id !='' && $hospital_id != '' && $sample_id != ''){
	 $query = "INSERT INTO `request_samples` (`sample_id`, `hospital_id`, `user_id`) VALUES ('$sample_id', '$hospital_id', '$user_id')";
									  
     $result = mysqli_query($connection,$query);
	 if($result){
		 echo "<center><h2><font color='green'>Sample Requested!</font><br/></h2></center>"; 
               header("Refresh:2; url=available.php");
	 }else{
		 echo "<center><h2><font color='green'>Request failed!</font><br/></h2></center>";
	 }
}else{
	echo "<center><h2><font color='green'>Insuffiecient Data || Operation cancelled!</font><br/></h2></center>"; 
               header("Refresh:2; url=available.php");
}

?>