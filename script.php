<?php
include('fonctions.php');

function generate_user($nb)
{
    $mysqli = connect_BD();
    $file = file("names.txt");
    for ($i = 0; $i < $nb; $i++) {
        $rand = rand(0,99);
        $name = strtolower($file[$rand]).rand(0,10);
        $mail = $name . "@test.fr";
        $pseudo = $name;
        $mdp = crypt('test', '$2a$07$wtc$');
        $mysqli->query("INSERT INTO `membre`(`mail`, `pseudo`, `mdp`) VALUES ('$mail', '$pseudo', '$mdp');");
    }
    $mysqli->close();
}

function generate_userNote($nb)
{
    $mysqli = connect_BD();
    for ($i = 0; $i < $nb; $i++) {
        $value = rand(1,10);
        $id = rand(1,50);
        $mysqli->query("INSERT INTO `note`(`idMembre`, `valeur`, `idRecette`) VALUES ($id, $value, $id);");
    }
    $mysqli->close();
}

function generate_userComment($nb)
{
    $mysqli = connect_BD();
    $file = file("comments.txt");
    for ($i = 0; $i < $nb; $i++) {
        $value = rand(0,10);
        $id = rand(1,50);
        $idR = rand(1,50);
        $comment = $file[$value];
        $mysqli->query("INSERT INTO `commentaire`(`idMembre`, `contenu`, `idRecette`) VALUES ($id, '$comment', $idR);");
    }
    $mysqli->close();
}

$mysqli = connect_BD();
?>
