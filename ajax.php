<?php
include_once 'link.php';

$category = htmlentities($_POST['category']);
$search = $_POST['search'];
if ($category == 'metier') {
     $sql = "SELECT m.nom, m.id, s.nom AS nomShop
     FROM metier AS m, shop AS s
     WHERE m.nom LIKE '{$search}%'
     AND m.id_shop = s.id
     ORDER BY m.nom ASC";
};
if ($category == 'etudiant') {
      $sql = "SELECT ancienetudiant.nom, m.id, s.nom AS nomShop
      FROM metier AS m, shop AS s, ancienetudiant
      WHERE ancienetudiant.nom LIKE '{$search}%'
      AND m.id_shop = s.id
      AND ancienetudiant.id_metier = m.id";
};
if ($category == 'domaine') {
      $sql = "SELECT m.id, s.nom
      FROM metier AS m, shop AS s
      WHERE s.nom LIKE '{$search}%'
      AND m.id_shop = s.id";
};
  

$req = $link->prepare($sql);
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);
$data = JSON_ENCODE($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
echo $data;

?>