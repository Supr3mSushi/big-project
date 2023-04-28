<?php
global $pdo;
require_once "../config/conf.php";

$sql = "INSERT INTO guestbook(name, email, comment) VALUES (:name, :email, :comment)";
$pre = $pdo->prepare($sql);

$htmlspecialchars = htmlspecialchars($_POST['name']);
$pre->bindParam(':name', $htmlspecialchars);

$htmlspecialchars1 = htmlspecialchars($_POST['email']);
$pre->bindParam(':email', $htmlspecialchars1);

$htmlspecialchars2 = htmlspecialchars($_POST['comment']);
$pre->bindParam(':comment', $htmlspecialchars2);

$pre->execute();

// Insertion des données du formulaire
$stmt = $pdo->prepare(query: "INSERT INTO guestbook(name, email, comment) VALUES (:name, :email, :comment)";
$stmt->bindParam(':text', $text);
$stmt->execute();

$pdo = null;
?>