<?php

$db_host = "localhost";
$db_username = "id19936852_todolist";
$db_password = "NjQl(5AyDF)dyjRj";
$db_name = "id19936852_db_todo";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
