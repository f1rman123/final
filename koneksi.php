<?php 
	session_start();


	// DB Connect
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";
	$dbname     = "db001"; 
	$conn 		= new mysqli($servername, $username, $password, $dbname);

	// PHP Alert Funcion
    function alert($msg) {
        echo"<script>alert('$msg')</script>";
    }
?>