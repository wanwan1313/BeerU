<?php
$db_host = '192.168.23.151'; //james
$db_name = 'beeru'; //資料庫名稱
$db_user = 'beeru'; //
$db_pass = 'beeru';

// data source name
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $db_host, $db_name);

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch(PDOException $ex){
    echo 'Ex:'. $ex->getMessage();
}

?>


