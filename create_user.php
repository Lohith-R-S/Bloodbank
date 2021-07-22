<?php

include_once "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$blood_group = $_POST['blood_type']??'';
$password = $_POST['password'];
$phone = $_POST['phone'];
$user_type = $_POST['user_type'];
if($user_type == '0'){
	$user_type = 'h';
	}
$pass = md5($password);
$encode = 'che012test';
$encoded_pass = $encode.$pass;
$created_at = '2021-07-20 13:34:33';

$sql_email = "SELECT * FROM users WHERE email='$email'";
    $res_email = mysqli_query($connection, $sql_email);
	
	 // checking empty fields
    if(empty($name) || empty($phone) ||  empty($email)  || empty($password) || $user_type == "select" || empty($user_type)) {    
            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty!</font><br/>";
        }
		
        if(empty($user_type) || $user_type == "select") {
            echo "<font color='red'>Select one user type Hospital or Receiver!</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }
		

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }   
		
		echo "<button onclick='goBack()'>Go Back</button>

			<script>
			function goBack() {
			  window.history.back();
			}
			</script>";
    }
       
        

        else if (mysqli_num_rows($res_email) > 0) {
        echo "<font color='red'>Sorry... email already exist!</font><br/><button onclick='goBack()'>Go Back</button>

			<script>
			function goBack() {
			  window.history.back();
			}
			</script>"; 
        } 
        else
        {
		if($user_type == 'h'){
			$user_type = '0';
			}
			if($user_type == 1 && $blood_group == ''){
			 echo "<font color='red'>Blood Group field is empty!</font><br/><button onclick='goBack()'>Go Back</button>

			<script>
			function goBack() {
			  window.history.back();
			}
			</script>";
			}else{

		
		$query = "INSERT INTO users( name, email, password, user_type, blood_type, phone_no, created_at,deleted) VALUES ('$name','$email','$encoded_pass','$user_type','$blood_group','$phone','$created_at',1)";
		$result = mysqli_query($connection,$query);
		mysqli_close($connection);
		
		 echo "<center><h2><font color='green'>User created!</font><br/></h2></center>";  
              header("Refresh:2; url=login.php");
			}

		}




?>