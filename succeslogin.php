<?php
session_start();



if(!session_is_registered($Username)){
header("location:login.php");
}
?>

<html>
<body>
	Login Successfull
</body>
</html>
