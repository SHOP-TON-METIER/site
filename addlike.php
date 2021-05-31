<?php
include_once 'link.php';
$id = htmlentities($_POST['id']);
$nb = htmlentities($_POST['nb']);

$sql = 'UPDATE metier SET likedata = ' . $nb . ' WHERE id = ' . $id . '';
$req = $link->prepare($sql);
$req->execute();
$req = null;
?>
