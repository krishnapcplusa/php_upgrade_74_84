<h1>Hi Vibhore</h1>
<?php

// This will run (with a deprecation warning) on PHP 7.4
// but will be a fatal error in PHP 8.x+ because curly-brace
// string offset access was removed.
// ./lab use 74 to switch to 74
// ./lab use 84 to switch to 84

//Case 1:
//$str = "hello";
//$firstChar = $str{0}; // deprecated/removed syntax

//echo "<p>First char: $firstChar</p>";



phpinfo();
//Case 2:
$servername = "db";
$username = "app";
$password = "app";
$dbname = "app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL!";

echo "krishna";
echo "vibhoer just edited by origin";
