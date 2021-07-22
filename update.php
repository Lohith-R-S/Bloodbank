<?php
include_once "config.php";
                                     
$id = $_REQUEST['id'];
$status = $_REQUEST['status'];

if($id !='' && $status != ''){
	 $query = "UPDATE `blood_types` SET `status` = '$status' WHERE `blood_types`.`id` = '$id'";
									  
     $result = mysqli_query($connection,$query);
	 if($result){
		 echo "<center><h2><font color='green'>Status updated!</font><br/></h2></center>"; 
               header("Refresh:2; url=add_blood_type.php");
	 }
}else{
	echo "<center><h2><font color='green'>Insuffiecient Data || Operation cancelled!</font><br/></h2></center>"; 
               header("Refresh:2; url=add_blood_type.php");
}

?>