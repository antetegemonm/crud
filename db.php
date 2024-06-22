<?php
$servername = "viaduct.proxy.rlwy.net";
$username = "root"; // seu usuário do MySQL
$password = "JdAFxYpblbMyWXBJvosdJWBoQsFagAZh"; // sua senha do MySQL
$dbname = "railway";
$port = 38873; 
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
