<?php
$dsn = 'mysql:dbname=testdb;host=192.168.189.1'
$username = "username";
$password = "password";

try {
  $sbh = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
  echo "Connection failed" . $e->getMessage();
}
?> 