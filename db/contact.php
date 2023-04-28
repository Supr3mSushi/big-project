<?php
global $pdo;
require_once "../config/conf.php";

    $sql = "INSERT INTO contact(full_name, email, phone_number, object, message) VALUES (:first_name, :email, :phone_number, :object, :message)";
    $pre = $pdo->prepare($sql);

$htmlspecialchars = htmlspecialchars($_POST['first_name']);
$pre->bindParam(':first_name', $htmlspecialchars);

$htmlspecialchars1 = htmlspecialchars($_POST['email']);
$pre->bindParam(':email', $htmlspecialchars1);

$htmlspecialchars2 = htmlspecialchars($_POST['phone_number']);
$pre->bindParam(':phone_number', $htmlspecialchars2);

$htmlspecialchars3 = htmlspecialchars($_POST['object']);
$pre->bindParam(':object', $htmlspecialchars3);

$htmlspecialchars4 = htmlspecialchars($_POST['message']);
$pre->bindParam(':message', $htmlspecialchars4);

$pre->execute();
?>
