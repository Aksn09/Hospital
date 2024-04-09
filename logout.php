<?php
session_start(); //to ensure you are using same session
if(isset($_SESSION['username']) ){
session_destroy(); //destroy the session
header("location:login.php"); //to redirect back to "login.php" after logging out
exit();
}else{
echo "You are not authorized to view this page. Go back <a href= 'login.php'>home</a>";
}
?>