<?php

if (isset($_POST['id'])) {
    $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


    $id = $_POST['id'];

    $sql = "SELECT * from metier WHERE id_metier = $id;
    
    
    SELECT    m.nom, m.description, m.salaire, m.code, etud.nom, etud.prenom, etud.promotionMMI, etud.avis, etud.conseil, etud.adjectifs,c.nom, c.type, f.nom, f.anneesEtudes
    FROM     metier AS m ,
        ancienEtudiant AS etud,
        competence AS c,
        rel_metier_comp AS rmc,
    formation AS f,
    rel_form_metier AS rfm
    
    WHERE  etud.id_metier = m.identifiant
    AND      m.identifiant = rmc.id_metier
    AND        c.identifiant = rmc.id_competence
     AND       f.identifiant_formation = rfm.id_formation
    AND        m.identifiant = rfm.id_metier
    AND m.identifiant LIKE $id";
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
