<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recherche.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <section>

        <?php
        include_once 'link.php';
        $search = htmlentities($_GET['search']);
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
        OR e.prenom LIKE '%{$search}%'
        ORDER BY m.nom ASC)";

        $req = $link->prepare($sql);
        $req->execute();

        $a = null;

        while ($data = $req->fetch()) {
            $shop = strtolower($data['nomShop']);
            $shop = htmlentities($shop);
            $shop = preg_replace('/&([a-z])[a-z]+;/i', '$1', $shop);
            if ($a != $data['nom']) {
                $a = $data['nom'];
                echo '<div class="metier ' .
                    $shop .
                    '">
                <img src="medias/images/drone-light.png" alt="" class="perso-3d">
                <div>
                    <h1>' .
                    $data['nom'] .
                    '</h1>
                    <a href="metier.php?id=' .
                    $data['id'] .
                    '" class="lien-fiche-metier">Lien vers la fiche descriptive</a>
                </div>
            </div>';
            }
        }

        $req = null;

//  if(isset($_POST['search'])){
//     $recherche = mysqli_real_escape_string($link, $_GET['search']);
//     $sortie = "";
//     $sql = mysqli_query($link,
//     "SELECT metier.nom, metier.id, shop.nom AS nomShop
//     FROM metier, ancienetudiant, competence, rel_metier_comp AS rmc, shop
//     WHERE ancienetudiant.id_metier = metier.id
//     AND metier.id_shop = shop.id
//     AND metier.id = rmc.id_metier
//     AND competence.id = rmc.id_competence
//     AND metier.nom LIKE '%{$search}%'
//     OR competence.nom LIKE '%{$search}%'
//     OR shop.nom LIKE '%{$search}%'
//     OR ancienetudiant.nom LIKE '%{$search}%'
//     OR ancienetudiant.prenom LIKE '%{$search}%'
//     OR ancienetudiant.adjectifs LIKE '%{$search}%'
//     ORDER BY nom ASC");

//     if(mysqli_num_rows($sql) > 0){
//         $a = null;

//         while($data = mysqli_fetch_assoc($sql)){
//             echo('<p>'. $data['nom'] .'</p>');
//             // $sortie .= $shop = strtolower($data['nomShop']);
//             // $sortie .= if ($a != $data['nom']){
//             //             $a = $data['nom'];
//             //         echo('<div class="metier '. $shop .'">
//             //         <img src="medias/images/drone-light.png" alt="" class="perso-3d">
//             //         <div>
//             //             <h1>'. $data['nom'] .'</h1>
//             //             <a href="metier.php?id='. $data['id'] .'" class="lien-fiche-metier">Lien vers la fiche descriptive</a>
//             //         </div>
//             //     </div>')
//             //     }
//         }
//     }
//     else {
//         $sortie .="No user disponibles";
//     }

//     echo $sortie;
// }
?>

        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>