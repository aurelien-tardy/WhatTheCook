<?php
include('class/Membre.php');

function connect_BD(){
    $mysqli = new mysqli("localhost", "admin", "", "test");
    if ($mysqli->connect_errno) {
        $error = "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        return $error;
    }
    return $mysqli;
}

function existMail($mail){
    $mysqli = connect_BD();
    $nb = $mysqli->query("SELECT mail FROM membre WHERE mail ='$mail'")->num_rows;
    if($nb == 1)
        return true;
    else
        return false;
}

function existPseudo($pseudo){
    $mysqli = connect_BD();
    $nb = $mysqli->query("SELECT pseudo FROM membre WHERE pseudo ='$pseudo'")->num_rows;
    if($nb == 1)
        return true;
    else
        return false;
}

function register($mail,$pseudo,$mdp){
    if(isset($mail, $pseudo, $mdp)){
        if(existMail($mail) != true && existPseudo($pseudo) != true){
            $mdp = crypt($mdp, '$2a$07$wtc$');
            $user = new Membre($mail,$pseudo,$mdp,0);
            return true;
        }else{
            $error = "Pseudo ou E-mail déja utilisés";
            return false;
        }
    }else{
        $error = "Un des champs est vide.";
        return false;
    }
}

function existMdp($mdp){
    $mdp= crypt($mdp, '$2a$07$wtc$');
    $mysqli = connect_BD();
    $nb = $mysqli->query("SELECT mdp FROM membre WHERE mdp ='$mdp'")->num_rows;
    if($nb == 1)
        return true;
    else
        return false;


}

function existPseudo_Mdp($pseudo,$mdp){
    $mdp= crypt($mdp, '$2a$07$wtc$');
    $mysqli = connect_BD();
    $truemdp = $mysqli->query("SELECT mdp FROM membre WHERE pseudo ='$pseudo' or mail ='$pseudo'")->fetch_row();


    if($truemdp[0]==$mdp){
        return true;
    }
    else
        return false;
}


function connexion(){
    $mysqli=connect_BD();
    $login = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    if(existPseudo($login)==true || existMail($login)==true){
        if(existMdp($mdp)== true){
            session_start();
            $_SESSION["login"]=$login;


        }
        else{
            $message = 'Mot de passe incorrect.';
            echo $message;
        }
    }
    else{
        $message= 'Pseudo ou adresse mail incorrect(e)';
        echo $message;
    }
}


?>