<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include("lib/connect.php");

ob_start();

$Firstname_err = $Lastname_err = $Username_err = $Password_err = $Email_err = " ";
//Fisrstname validatie
// if(empty($_POST["Firstname"])) {
// 	$Firstname_Err = "Firstname is required";
// } else {
// 	$Firstname = checkinput($_POST["Firstname"]);
// if (!preg_match("/^[a-zA-Z ]*$/",$Firstname)) {
// 	$Firstname = "Only letters and white space allowed";
// }

// }

// //Lastname validatie
// if(empty($_POST["Lastname"])) {
// 	$Lastname_Err = "Lastname is required";
// } else {
// 	$Lastname = checkinput ($_POST["Lastname"]);
// if(!preg_match("/^[a-z A-Z]*$/",$Lastname)) {
// 	$Lastname = "Only letters and white space allowed";
// }

// }

if(isset($_POST["submit"])){

	$Firstname = $_POST ["Firstname"];
	$Lastname = $_POST ["Lastname"];
	$Username = $_POST ["Username"];
	$Email = $_POST ["Email"];
	$Password = $_POST ["Password"];
	$Password2 = $_POST ["Password"];
	$Confirm_Password = $_POST ["Confirm_Password"];
	$Password = password_hash($Password, PASSWORD_DEFAULT);

	if ($Password2 == $Confirm_Password) {
		$database = new DB_SQL;
		$result = $database->register($Firstname, $Lastname, $Username, $Email, $Password);

		if ($result == true) {
			echo 'Your account has been succesfully created';
		}else{
			echo 'Failed to create account';
		}
	}else{
		echo 'passwords not the same';
	}

	
}

?>
<h2>Register</h2>
<p>
"Register content"
</p>

<form action ="" method="POST">
	<input type="text" name="Firstname" placeholder="Firstname" required>
	<br>
	<br>
	<input type="text" name="Lastname" placeholder="Lastname" required>
	<br>
	<br>
	<input type="text" name="Username" placeholder="Username" required>
	<br>
	<br>
	<input type="email" name="Email" placeholder="Email Address" required>
	<br>
	<br>
	<input type="password" name="Password" placeholder="Password" required>
	<br>
	<br>
	<input type="password" name="Confirm_Password" placeholder="Confirm Password" required>
	<br>
	<br>
	<input type="submit" name="submit" value="Create Account">
</form>



<?php
	$page_content = ob_get_contents();
	ob_clean();
	include("masterpage2.php");
?>