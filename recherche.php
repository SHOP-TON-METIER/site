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

        <a href="javascript:history.back()" class="retour">
            <svg width="34" height="60" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.17157 27.1716C-0.390524 28.7337 -0.390524 31.2663 1.17157 32.8284L26.6274 58.2843C28.1895 59.8464 30.7222 59.8464 32.2843 58.2843C33.8464 56.7222 33.8464 54.1895 32.2843 52.6274L9.65685 30L32.2843 7.37258C33.8464 5.81049 33.8464 3.27783 32.2843 1.71573C30.7222 0.153632 28.1895 0.153632 26.6274 1.71573L1.17157 27.1716ZM5 26H4L4 34H5L5 26Z"
                    fill="#09192C" />
            </svg>
        </a>

        <h1>Mes résultats</h1>

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
                    <h2>' .
                        $data['nom'] .
                        '</h2>
                    <a href="metier.php?id=' .
                        $data['id'] .
                        '" class="lien-fiche-metier">Lien vers la fiche descriptive</a>
                </div>
            </div>';
                }
            }

            $req = null;
            ?>

        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="medias/js/app.js"></script>
</body>

</html>