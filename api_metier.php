<?php

if (isset($_POST['id'])) {
    $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


    $id = $_POST['id'];

    $sql = "SELECT * FROM metier as m WHERE m.id_metier = $id UNION ALL SELECT * FROM ancienetudiant AS e WHERE e.id_metier = $id";
    // $sql. = "SELECT  nom, prenom, promotionMMI, avis, conseil, adjectifs FROM ancienetudiant WHERE id_metier = $id";



    $req = $link->prepare($sql);

    $req->execute();

    $result = $req->fetchAll(PDO::FETCH_ASSOC);



    // while ($data = $req->fetchAll()) {

    // $result["nom"] = $data['nom'];
    // $result["prenom"] = $data[''];


    //     $result["salaire"] = $data['salaire'];
    //     $result["avis"] = $data['etud_avis'];
    // }
    $datacode = json_encode($result);
    echo $datacode;

    $req = null;
}
$link = null;
