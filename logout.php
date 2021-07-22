 
 <?php
 //page for destroying all the session variables and session itself
 session_start();
 $_SESSION['email'] = NULL;
$_SESSION['user_type'] = NULL;
 session_destroy();
  echo "<center><h2><font color='green'>Succesfully logged out!</font><br/></h2></center>"; 
               header("Refresh:2; url=index.php");    //redirection to index.php
?>
