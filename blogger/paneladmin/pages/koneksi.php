<?php 

$host = "localhost";
$port = "5432";
$dbname = "buleleng";
$user = "postgres";
$password = "admin";
$pg_options = "--client_encoding=UTF8";

$conn = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($conn)
?>