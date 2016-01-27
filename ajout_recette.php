<!DOCTYPE html>
<html lang="en">

<?php
include('fonctions.php');

if (isset($_POST['rate']) == true) {
    echo $_POST['rate'];
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
    <link href="css_ajout_recette.css" rel="stylesheet">

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
                <h2 class="section-heading">Ajout recette</h2>
                <h3 class="section-subheading text-muted">Saisissez les informations.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate action="ajout_recette.php" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="pseudo" class="form-control" placeholder="Nom de la recette" id="nom_recette" required data-validation-required-message="Veuillez saisir le nom de la recette.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <!-- RATE -->
                                <p class="txt_form">DIFFICULTE:</p>
                                <section id="rate" class="rating">
                                    <!-- FIFTH STAR -->
                                    <input type="radio" id="star_5" name="rate" value="5" />
                                    <label for="star_5" title="Five">&#9733;</label>
                                    <!-- FOURTH STAR -->
                                    <input type="radio" id="star_4" name="rate" value="4" />
                                    <label for="star_4" title="Four">&#9733;</label>
                                    <!-- THIRD STAR -->
                                    <input type="radio" id="star_3" name="rate" value="3" />
                                    <label for="star_3" title="Three">&#9733;</label>
                                    <!-- SECOND STAR -->
                                    <input type="radio" id="star_2" name="rate" value="2" />
                                    <label for="star_2" title="Two">&#9733;</label>
                                    <!-- FIRST STAR -->
                                    <input type="radio" id="star_1" name="rate" value="1" />
                                    <label for="star_1" title="One">&#9733;</label>
                                </section>
                            </div>
                            <div class="form-group">
                                <input type="text" name="temps" class="form-control" placeholder="Temps de la recette" id="temps_recette" required data-validation-required-message="Veuillez saisir le nom de la recette.">
                                <p class="help-block text-danger"></p>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <input type="submit" class="btn btn-xl" value="Ajouter">
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
