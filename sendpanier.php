<?php
include_once 'link.php';
$nom = htmlentities($_POST['nom']);
$prenom = htmlentities($_POST['prenom']);
$age = htmlentities($_POST['age']);
$codepostal = htmlentities($_POST['codepostal']);
$situation = htmlentities($_POST['situation']);
$domainefavori = htmlentities($_POST['domainefavori']);
$panier = htmlentities(json_encode($_POST['panier']));
$sql = "INSERT INTO panier (nom, prenom, age, codepostal, situation, domainefavori, panier) VALUES('$nom', '$prenom', $age, $codepostal, '$situation', '$domainefavori', '$panier')";
$req = $link->prepare($sql);
$req->execute();
$req = null;
?>
