<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

$host = $dbopts["host"];
$db = ltrim($dbopts["path"],'/');
$user = $dbopts["user"];
$password = $dbopts["pass"];

?>