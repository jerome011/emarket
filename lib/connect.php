<?php
	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "marketdb");

	class DB_SQL{
		function __construct(){
			$link = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

			if (!$link){ 
				die(' Failed to connect: ' .mysql_error());
			}
			mysql_select_db(DB_NAME);
			}
		function register($Firstname, $Lastname, $Username, $Email, $Password){
			$sql_res = "INSERT INTO members VALUES(null, '$Firstname', '$Lastname', '$Username', '$Email', '$Password')";
			return mysql_query($sql_res);
		}
		
		function login($Username, $Password){
			$sql_res = "SELECT * from members WHERE username = '$Username'";
			return mysql_query($sql_res);
		}

		function products(){
			$sql_res = "SELECT * from product";
			return mysql_query($sql_res);
		}


	

		function contact($name, $email, $subject, $message){
			$sql_res = "INSERT INTO messages VALUES(null, '$name', '$email', '$subject', '$message')";
			return mysql_query($sql_res);
		}
	}
?>