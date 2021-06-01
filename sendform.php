<?php
include_once 'link.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$codepostal = $_POST['codepostal'];
$mail = $_POST['mail'];
$motif = $_POST['motif'];
$msg = $_POST['msg'];

$sql =
    'INSERT INTO `formulaire`(nom, prenom, codePostal, mail, motifContact, message) VALUES (:nom,:prenom, :codepostal, :mail, :motif, :msg)';

$req = $link->prepare($sql);
$req->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':codepostal' => $codepostal,
    ':mail' => $mail,
    ':motif' => $motif,
    ':msg' => $msg,
]);
echo $sql;
$req = null;
?>
