<?php
include_once 'link.php';

$category = $_POST['category'];

if ($category == 'metier') {
    $sql = "SELECT m.nom, m.id, s.nom AS nomShop
     FROM shoptonmetier_metier AS m, shoptonmetier_shop AS s
     WHERE m.nom LIKE :search
     AND m.id_shop = s.id
     ORDER BY m.nom ASC";
}
if ($category == 'etudiantnom') {
    $sql = "SELECT a.nom, a.prenom, m.id, s.nom AS nomShop
    FROM shoptonmetier_metier AS m, shoptonmetier_shop AS s, shoptonmetier_ancienetudiant AS a
    WHERE m.id_shop = s.id
    AND a.id_metier = m.id
    AND a.nom LIKE :search
    GROUP BY a.nom";
}
if ($category == 'etudiantprenom') {
    $sql = "SELECT a.nom, a.prenom, m.id, s.nom AS nomShop
    FROM shoptonmetier_metier AS m, shoptonmetier_shop AS s, shoptonmetier_ancienetudiant AS a
    WHERE m.id_shop = s.id
    AND a.id_metier = m.id
    AND a.prenom LIKE :search
    GROUP BY a.nom";
}
if ($category == 'domaine') {
    $sql = "SELECT s.nom, s.id
      FROM shoptonmetier_shop AS s
      WHERE s.nom LIKE :search";
}

$req = $link->prepare($sql);
$req->execute([
    ':search' => $_POST['search'] . '%',
]);
$result = $req->fetchAll(PDO::FETCH_ASSOC);
$data = JSON_ENCODE(
    $result,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
);
echo $data;

?>
