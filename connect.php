<?php

require_once 'config.php';

function connect(string $host, string $db, string $user, string $password): PDO
{
    try {
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;";
        // make a database connection
        return $pdo = new PDO(
            $dsn,
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}

return connect($host, $db, $user, $password);

?>