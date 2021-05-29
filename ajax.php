<?php
include_once 'link.php';
$output = '';
$search = htmlentities($_POST['search']);
$sql = "(SELECT m.nom, m.id, s.nom AS nomShop
        FROM metier AS m, shop AS s
        WHERE s.nom LIKE '%{$search}%'
        AND m.id_shop = s.id
        ORDER BY m.nom ASC)
        UNION
        (SELECT m.nom, m.id, s.nom AS nomShop
        FROM metier AS m, shop AS s
        WHERE m.nom LIKE '%{$search}%'
        AND m.id_shop = s.id
        ORDER BY m.nom ASC)
        UNION
        (SELECT m.nom, m.id, s.nom AS nomShop
        FROM metier AS m, shop AS s, ancienetudiant AS e
        WHERE m.id_shop = s.id
        AND e.id_metier = m.id
        AND e.nom LIKE '%{$search}%'
        ORDER BY m.nom ASC)
        UNION
        (SELECT m.nom, m.id, s.nom AS nomShop
        FROM metier AS m, shop AS s, ancienetudiant AS e
        WHERE m.id_shop = s.id
        AND e.id_metier = m.id
        AND e.prenom LIKE '%{$search}%'
        ORDER BY m.nom ASC)";

$req = $link->prepare($sql);
$req->execute();
while ($data = $req->fetch()) {
    $output .=
        '<a href="metier.php?id=' . $data['id'] . '">' . $data['nom'] . '</a>';
}

echo $output;

?>
