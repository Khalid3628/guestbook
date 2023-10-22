<?php
$dbhost = 'localhost';
$dbuser = 'id21437148_bukutamukhalid';
$dbpass = 'Hitamputih_2';
$dbname = 'id21437148_bukutamu';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Error connecting to the database: ' . mysqli_connect_error());
}
?>