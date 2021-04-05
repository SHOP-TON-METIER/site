<?php

if (isset($_POST['id'])) {
    $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


    $id = $_POST['id'];
  
    // $sql = "SELECT * FROM metier AS m WHERE m.identifiant = $id;";
    

    // $sql. = "SELECT c.nom FROM metier AS m, rel_metier_comp AS rmc, competence AS c WHERE m.identifiant = rmc.id_metier AND	c.identifiant = rmc.id_competence
    //         AND	m.identifiant = $id
    //         GROUP BY `type`;";

    $sql = "SELECT
                f.nom,
                f.anneesEtudes
            FROM
                formation AS f,
                rel_form_metier AS rfm,
                metier AS m
            WHERE
                f.identifiant_formation = rfm.id_formation
            AND	m.identifiant = rfm.id_metier
            AND	m.identifiant = $id
            ORDER BY f.anneesEtudes ASC;";

    // $sql. = "SELECT
    //             etud.avis
    //         FROM
    //             ancienEtudiant AS etud,
    //             metier AS m
    //         WHERE
    //             etud.id_metier = m.identifiant
    //         AND	etud.id_metier = $id;
    //         ";


    $req = $link->prepare($sql);

    $req->execute();

    $result = [];

    while ($data = $req->fetch()) {

        $result = array();
        $result["nom"] = $data['nom'];
        $result["description"] = $data['description'];
        $result["salaire"] = $data['salaire'];
        $datacode = json_encode($result);
        echo $datacode;
    }

    $req = null;
}
$link = null;
