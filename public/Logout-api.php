<?php 

session_start();

$come_from = $_SERVER['HTTP_REFERER'];

unset($_SESSION['user']);

header("Location: $come_from");

?>