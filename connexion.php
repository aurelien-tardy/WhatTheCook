<!DOCTYPE html>
<html lang="en">

<?php
include('fonctions.php');

if (isset($_POST['pseudo'], $_POST['mdp']) == true) {
    if (existPseudo_Mdp($_POST['pseudo'], $_POST['mdp']) == true) {
        connexion();
        header('Location: http://localhost/whatthecook/');
        exit();
    }
    else
        printf("Erreur connexion()");
}
else
    printf("Erreur champs vide");


?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="new_css.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<?php include('views/header.html'); ?>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Bienvenue</h2>
                <h3 class="section-subheading text-muted">Saisissez vos identifiants.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate action="connexion.php" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="pseudo" class="form-control" placeholder="Votre pseudo ou adresse mail" id="pseudo" required data-validation-required-message="Veuillez saisir votre pseudo ou votre adresse mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe" id="mdp" required data-validation-required-message="Veuillez saisir votre mot de passe">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input type="submit" class="btn btn-xl" value="Se connecter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('views/footer.html'); ?>

</body>

</html>
