<?php
include "../../core/categorieC.php";
include "../../entities/categorie.php";
$categorieC=new categorieC();

//if (!isset($_GET['modifier'])){

    $categorie=new categorie($_POST['id_categorie'],$_POST['nom_categorie']);
    $categorieC=new categorieC();
    $categorieC->modifiercategorie($_POST['id_categorie'],$_POST['nom_categorie']);

    header('Location: afficherCategorie.php');


?>
