<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'loandb');
	/////// Update your database login details here /////
$dbhost_name = "localhost"; // Your host name 
$database = "poll";       // Your database name
$username = "root";            // Your login userid 
$password = "Rkumarasanthosh26.";
	
	try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>