<!DOCTYPE html>
<html lang="en">

<?php
include "fonctions.php";
if(isset($_POST['email'], $_POST['pseudo'], $_POST['mdp'], $_POST['mdp2'])){
    if($_POST['mdp'] == $_POST['mdp2']) {
        if(register($_POST['email'], $_POST['pseudo'], $_POST['mdp']) == true) {
            session_start();
            $_SESSION['pseudo'] = $_POST['pseudo'];
            if(isset($_SESSION['pseudo'])){
                header("Location: index.php");
                exit;
            }
        }else{
            $error = "L'E-mail ou le pseudo est déja utilisé.";
        }
    }else{
        $error = "Les 2 mots de passe ne sont pas identiques.";
    }
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WhatTheCook</title>

    <?php include "views/stylesheet.html"; ?>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php include "views/header.html" ; ?>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Inscription</h2>
                    <h3 class="section-subheading text-muted">L'inscription est gratuite et le restera toujours.</h3>
                    <h3 class="section-subheading text-muted"><?php if(isset($error)) echo $error; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" action="inscription.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Adresse E-mail*" id="email" required data-validation-required-message="Veuillez rentrer une adresse E-mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="pseudo" type="text" class="form-control" placeholder="Pseudo *" id="pseudo" required data-validation-required-message="Veuillez rentrer un pseudo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="mdp" type="password" class="form-control" placeholder="Mot de passe *" id="mdp" required data-validation-required-message="Veuillez rentrer un mot de passe valide.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="mdp2" type="password" class="form-control" placeholder="Confirmation mot de passe *" id="mdp2" required data-validation-required-message="Veuillez confirmer votre mot de passe.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" id="submit" class="btn btn-xl" value="S'inscrire">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "views/footer.html"; ?>


</body>

</html>
