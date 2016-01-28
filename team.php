
<!DOCTYPE html>
<html lang="en">

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

   <?php include "views/header.html" ; ?>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Notre équipe</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <!-- Cécile Valette -->
            <n class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/cec.png" height="250" width="250"  class="img-responsive img-circle" alt="">
                        <h4>Cécile Valette</h4>
                        <p class="text-muted">Développeur web</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Geoffrey Veyre -->
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/geoffrey.png" height="250" width="250" class="img-responsive img-circle" alt="">
                        <h4>Geoffrey Veyre</h4>
                        <p class="text-muted">Développeur web</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                </n>
                <!-- Nicolas Scheidegger-->
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/nico.png" height="250" width="250"  class="img-responsive img-circle" alt="">
                        <h4>Nicolas Scheidegger</h4>
                        <p class="text-muted">Développeur web</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Aurélien Tardy -->
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/aure.png" height="250" width="250"  class="img-responsive img-circle" alt="">
                        <h4>Aurélien Tardy</h4>
                        <p class="text-muted">Développeur web</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Nous sommes 4 étudiants en DUT Informatique à l'université Claude Bernard antenne Bourg-en-Bresse. Nous aimons la bonne bouffe mais nous n'avons pas souvent d'idées de recettes! C'est pourquoi nous avons créé ce site communautaire pour partager nos recettes. </p>
                </div>
            </div>
        </div>
    </section>





    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/agency.js"></script>
    <?php include "views/footer.html" ; ?>

</body>

</html>
