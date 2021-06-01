<?php
include_once 'link.php';
$nom = $_POST['nom']
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$codepostal = $_POST['codepostal'];
$situation = $_POST['situation'];
$domainefavori = $_POST['domainefavori'];
$panier = json_encode($_POST['panier']);
$sql = "INSERT INTO panier (nom, prenom, age, codepostal, situation, domainefavori, panier) VALUES(:nom, :prenom, :age, :codepostal, :situation, :domainefavori, :panier)";
$req = $link->prepare($sql);
$req->execute([':nom' => $nom, ':prenom' => $prenom, ':age' => $age, ':codepostal' => $codepostal, ':situation' => $situation, ':domainefavori' => $domainefavori, ':panier' => $panier]);
$req = null;
?>
