<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "password", "blogcodewithaka");

    if(!$conn){
        die('Error connectig to database: ' . mysqli_connect_error());
    }

    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/complete-blog/');
?>