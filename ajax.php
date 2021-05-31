<?php
include_once 'link.php';
$output = '';
$search = $_POST['search'];
$sql = "(SELECT m.nom, m.id, s.nom AS nomShop
        FROM metier AS m, shop AS s
        WHERE m.nom LIKE '{$search}%'
        AND m.id_shop = s.id
        ORDER BY m.nom ASC)";

$req = $link->prepare($sql);
$req->execute();
while ($data = $req->fetch()) {
    $shop = strtolower($data['nomShop']);
    $shop = htmlentities($shop);
    $shop = preg_replace('/&([a-z])[a-z]+;/i', '$1', $shop);
    $output .=
        '<a href="metier.php?id=' .
        $data['id'] .
        '" class="results-items ' .
        $shop .
        '">' .
        $data['nom'] .
        '</a>';
}

echo $output;

?>
