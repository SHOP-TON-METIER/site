<?php include 'link.php'; ?>
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$codepostal = $_POST['codepostal'];
$situationpro = $_POST['situationpro'];
$domainefavori = $_POST['domainefavori'];
$panier = $_POST['panier'];
$sql = "INSERT INTO panier (nom, prenom, age, codepostal, situationpro, domainefavori) VALUES('$nom', '$prenom', $age, $codepostal, '$situationpro', '$domainefavori')";
$req = $link->prepare($sql);
$req->execute();
$req = null;
 ?>
