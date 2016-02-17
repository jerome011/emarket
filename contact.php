<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include("lib/connect.php");

ob_start();

if(isset($_POST["submit"])){

	$name = $_POST ["name"];
	$email = $_POST ["email"];
	$subject = $_POST ["subject"];
	$message = $_POST ["message"];

$database = new DB_SQL;
$result = $database->contact($name, $email, $subject, $message);

		if ($result == true) {
			echo 'Your message has been sent';
		}else{
			echo 'Failed send message';
		}
	}

?>
<h2>Contact Us</h2>

"We are happy to answer any question you have or provide you with an estimate. Just send us a message in the form below with any questions you may have."
	<br>
	<br>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Your Name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" required/><br />
	</div>
	<div class="row">
		<label for="email">Your Email:</label><br />
		<input id="email" class="input" name="email" type="email" value="" size="30" required/><br />
	</div>
	<div class="row">
		<label for="subject">Subject:</label><br />
		<input id="subject" class="input" name="subject" type="text" value="" size="30" /><br required/>
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br required/>
	</div>
	<br>
	<input type="submit" name="submit" value="Send"/>
</form>						


<?php
	$page_content = ob_get_contents();
	ob_clean();
	include("masterpage2.php");
?>