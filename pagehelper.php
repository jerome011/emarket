<?php
Public class phelper {

Public function checkinput($data) { 
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return($data);
}
?>
}