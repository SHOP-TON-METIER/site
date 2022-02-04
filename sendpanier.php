<?php
include_once 'link.php';
$nom = $_POST['nom']
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$codepostal = $_POST['codepostal'];
$situation = $_POST['situation'];
$domainefavori = $_POST['domainefavori'];
$panier = json_encode($_POST['panier']);
$sql = "INSERT INTO shoptonmetier_panier (nom, prenom, age, codepostal, situation, domainefavori, panier) VALUES(:nom, :prenom, :age, :codepostal, :situation, :domainefavori, :panier)";
$req = $link->prepare($sql);
$req -> bindValue(':nom', $nom);
$req -> bindValue(':prenom', $prenom);
$req -> bindValue(':age', $age);
$req -> bindValue(':codepostal', $codepostal);
$req -> bindValue(':situation', $situation);
$req -> bindValue(':domainefavori', $domainefavori);
$req -> bindValue(':panier', $panier);
$req->execute();
$req = null;
?>
