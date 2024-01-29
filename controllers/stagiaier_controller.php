<?php

require 'models/stagiaier.php';

function list_stagiaierAction()
{
    $stagiaires = liste_stagiaier();
    require_once 'views/liste_stagiaires.php';
}
function createAction()
{
    require_once 'views/create.php';
}
function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}
function storeAction()
{ 
    insertion_stagiaire();
    header('Location:index.php?action=list');
}
function destroyAction($id)
{
    destroy($_GET["id"]);
    header('Location:index.php?action=list');
}
function editAction()
{
    $id = $_GET['id'];
    $stagiaire = view($id);
    require_once 'views/edit.php';
}
function updateAction()
{
    extract($_POST);
    edit($id, $cin, $nom, $prenom, $date_n);
    header("location: index.php?action=list");
}
