<?php
function database_connection()
{
    return new PDO('mysql:dbname=ofppt;host=localhost', 'root', '');
}
function liste_stagiaier()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaire ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}
function insertion_stagiaire()
{
    $pdo = database_connection();
    if (
        isset($_POST['cin'], $_POST['nom'], $_POST['prenom'], $_POST['date_n']) &&
        !empty($_POST['cin']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date_n'])
    ) {
        extract($_POST);
        $req = $pdo->prepare("INSERT INTO stagiaire VALUES (null, ?, ?, ?, ?)");
        return $req->execute([$cin, $nom, $prenom, $date_n]);
    } else {
        // Display an error message if any of the attributes are empty
        $err = "Can't insert to the database. Please fill in all the fields.";
    }
}
function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare(query: "DELETE FROM stagiaire WHERE id = ?");
    return $sqlState->execute([$id]);
}
function view($id)
{
    $pdo = database_connection();
    $req = $pdo->prepare('SELECT * FROM `stagiaire` where id=?');
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_OBJ);
}
function edit($id, $cin, $nom, $prenom, $date_n)
{
    $pdo = database_connection();
    $req = $pdo->prepare("UPDATE `stagiaire` SET cin=? , nom=? , prenom=?,  date_n=?  where id=?");
    return $req->execute([$cin, $nom, $prenom, $date_n, $id]);
}
