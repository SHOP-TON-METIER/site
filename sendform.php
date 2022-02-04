<?php
include_once 'link.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$codepostal = $_POST['codepostal'];
$mail = $_POST['mail'];
$motif = $_POST['motif'];
$msg = $_POST['msg'];

$sql =
    'INSERT INTO `shoptonmetier_formulaire`(nom, prenom, codePostal, mail, motifContact, message) VALUES (:nom,:prenom, :codepostal, :mail, :motif, :msg)';

$req = $link->prepare($sql);
$req = $link->prepare($sql);
$req -> bindValue(':nom', $nom);
$req -> bindValue(':prenom', $prenom);
$req -> bindValue(':codepostal', $codepostal);
$req -> bindValue(':mail', $mail);
$req -> bindValue(':motif', $motif);
$req -> bindValue(':msg', $msg);
$req->execute();

echo $sql;
$req = null;
?>
