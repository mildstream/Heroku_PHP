<?php

echo "Hello world";

$pdo = require 'connect.php';
$sql = "INSERT into test_table values (3, 'hello from php code')";
$pdo->exec($sql);

$pdo = null;

?>