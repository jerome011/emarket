<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include("lib/connect.php");

ob_start();

session_start();

if(isset($_POST["submit"])){
$Username = $_POST ["Username"];
$Password = $_POST ["Password"];

$database = new DB_SQL;

if (mysql_num_rows($database->login($Username, $Password)) > 0){
		$row = mysql_fetch_assoc($database->login($Username, $Password));

		if(password_verify($Password, $row['Password'])){
			echo ' You are now logged in';
			$_SESSION["user"] = ['username' => $row['Username']];
			header("Location: index.php");
		}else{
			echo "Wrong username and password";
		}

	}else{
	echo "User does not exist";
	}
}
?>

<h2>Login</h2>

<br>
<br>

<form action ="" method="POST">
Username <input type="text" name="Username" placeholder="Click here to type" required>
<br>
<br>
Password <input type="password" name="Password" placeholder="Password" required>
<br>
<br>
<input type="submit" name="submit" value="Log In">
</form>

<?php
	$page_content = ob_get_contents();
	ob_clean();
	include("masterpage2.php");
?>