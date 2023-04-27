
//
//session_start();
//
//$pdo = new PDO(
//    'mysql:host=db5012692872.hosting-data.io ;dbname=dbs10663008',
//    'dbu2231628',
//    '#wxhXbM9CV*HF-hV',
//    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
//);
//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
//

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'dbs10663008';

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

?>

