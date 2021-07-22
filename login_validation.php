 <?php
 session_start();
 include_once "config.php";
 $email = $_POST['email'];
 $password = $_POST['password'];
 $pass = md5($password);
 $encode = 'che012test';
 $encoded_pass = $encode.$pass;
 
 
 if($email == ''){
							
			echo "Please enter email";
			header("Refresh:2; url=login.php");
 }
 elseif($password == ''){
	 echo "Please enter password";
	 header("Refresh:2; url=login.php");
	 
 }else{
	 $query = "SELECT * FROM users WHERE email ='".$email."'";
            $result = mysqli_query($connection,$query);
			if($res = mysqli_fetch_assoc($result)){
            
			
			$_SESSION['name'] = $res['name'];
			$pass = $res['password'];
			$_SESSION['user_type'] = $res['user_type'];
			$_SESSION['user_id'] = $res['id'];
			}else{
				echo "User not found!Please Register";
				header("Refresh:2; url=sign_up.php");
			}	
			
			
		if($pass == $encoded_pass){
			 echo "<center><h2><font color='green'>Succesfully logged in!</font><br/></h2></center>";  
              header("Refresh:2; url=index.php");
		}else{
			echo '<center><h2><font color="red">Password Incorrect!</font><br/></h2></center>';
			header("Refresh:2; url=login.php");
		}
 }
 
				  