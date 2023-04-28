<?php

session_start();

$pdo = new PDO(
    'mysql:host=db5012692872.hosting-data.io ;dbname=dbs10663008',
    'dbu2231628',
    '#wxhXbM9CV*HF-hV',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>


