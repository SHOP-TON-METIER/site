<?php

if (isset($_POST['id'])) {
    $link = new PDO('mysql:host=localhost;dbname=shop_ton_metier', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


    $id = $_POST['id'];

    $sql = "SELECT * from shop WHERE id_shop = $id";
    $req = $link->prepare($sql);

    $req->execute();

    $result = [];

    while ($data = $req->fetch()) {

        $result = array();
        $result["code"] = $data['code'];
        $datacode = json_encode($result);
        echo $datacode;
    }

    $req = null;
}
$link = null;
