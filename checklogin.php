<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);

	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "marketdb"); 

mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)or die("cannot select DB");
mysql_select_db(DB_NAME); 

$Username = $_POST ["Username"];
$Password = $_POST ["Password"];

// To protect MySQL injection (more detail about MySQL injection) 
$Username = stripslashes($Username); 
$Password = stripslashes($Password); 
$Username = mysql_real_escape_string($Username); 
$Password = mysql_real_escape_string($Password); 
$sql="SELECT * FROM members WHERE username='$Username' and password='$Password'"; 
$result=mysql_query($sql); 



// Mysql_num_row is counting table row 
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row 
if($count==1){ 
// Register $myusername, $mypassword and redirect to file "login_success.php" 

// session_register("myusername"); 
// session_register("mypassword"); 
header("location:succeslogin.php"); 
} 
else { 
	echo "Wrong Username or Password"; 
} 
?>