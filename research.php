<?php

if (isset($_GET['id'])) {
    $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);

    $type = htmlentities($_GET['type']);

    $id = htmlentities($_GET['id']);

    if ($type == 'metier') {
        $sql = 'SELECT * FROM metier  WHERE id_metier = :id';
    }

    if ($type == 'competences') {
        $sql = 'SELECT competences FROM rel_metier_comp WHERE id_metier = :id';
    }

    if ($type == 'formations') {
        $sql = 'SELECT formation FROM rel_form_metier WHERE id_metier = :id';
    }

    if ($type == 'etudiants') {
        $sql = 'SELECT * FROM ancienetudiant WHERE id_metier = :id';
    }

    $req = $link->prepare($sql);

    $req->execute([':id' => $id]);

    $result = $req->fetchAll(PDO::FETCH_ASSOC);

    $datacode = json_encode($result);
    echo $datacode;

    $req = null;
}
$link = null;
