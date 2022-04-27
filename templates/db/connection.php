<?php

//modelo PDO

$host = "localhost";
$db = "client_db";
$user = "root";
$pass = "";
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);