<?php
include('header.php');

$delCategorieOK = false;

// Recuperation de la liste de tout les categories
$categories = $categorieDAO->selectAll();

// Recuperation du bouton btDelete est cliqué
$btDelete = filter_input(INPUT_POST, 'btDelete');


if (isset($btDelete)) {
    // Recuperation de l'id de la categorie a supprimer
    $idCatDel = filter_input(INPUT_GET, 'idCat');

    // Requete pour supprimer la categorie
    $categorieDAO->delete($idCatDel);

    $delCategorieOK = true;
}

$template3 = "views/categorie";
include("./views/index.phtml");
