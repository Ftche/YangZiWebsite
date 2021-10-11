

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>YangZI - Demande de devis</title>
    <meta name="keywords" content="YangZi,commerce,logiciel">
    <meta name="description" content="application de commerce, gestion de pharmacie, gestion de librairie">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/logo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Add CSS -->
    <style>
        .carousel-caption {
            position: absolute;
            background: rgba(0,0,0,0.4);
            padding: 15px 10px;
        }
        .carousel-caption h5 {
            color:white !important;
        }
    </style>
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section"></div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link fa fa-facebook" ></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fa fa-twitter" href="https://twitter.com/ErpYangzi"> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fa fa-linkedin" href="https://www.linkedin.com/in/erp-yangzi-67113619a/" ></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fa fa-phone" > +237 690980615</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#contact">Demande de devis</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
<!-- contact -->
<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Demande de devis</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-2 ">
                <form action="mailDevis.php" method="POST" >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="NomDemandeur">Votre nom(s) & prénom(s)</label>
                            <input type="text" class="form-control" id="NDemandeur" name="NDemandeur" aria-describedby="emailHelp" placeholder="Votre nom(s)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="NomEntreprise">Votre Entreprise</label>
                            <input type="text" class="form-control" id="NEntreprise" name="NEntreprise" placeholder="Nom de l'Entreprise" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="NDEmail">Votre email</label>
                            <input type="email" class="form-control" id="NDEmail" name="NDEmail" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="DGPays">Dans quel pays se trouve la Direction Générale ?</label>
                            <input type="text" class="form-control" id="DGPays" name="DGPays" placeholder="Pays" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="NDTelephone">Votre téléphone</label>
                            <input type="number" class="form-control" id="NDTelephone" name="NDTelephone" placeholder="237" maxlength="12" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CCG">Combien de contrôleur de gestion ?</label>
                            <input type="number" class="form-control" id="CCG" name="CCG" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CPC">Combien de personnels comptables ?</label>
                            <input type="number" class="form-control" id="CPC" name="CPC" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CDAAF">Combien de Directeur  des Affaires Administratives Financiéres ?</label>
                            <input type="number" class="form-control" id="CDAAF" name="CDAAF" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CVG">Combien de vendeurs au guichet ( vendeur direct ) ?</label>
                            <input type="number" class="form-control" id="CVG" name="CVG" placeholder="0" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CA">Combien de d'agences ?</label>
                            <input type="number" class="form-control" id="CA" name="CA" placeholder="0" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end contact -->
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cont">
                        <h3>Contacter nous maintenant !!!</h3>
                        <span>KuTiWa – Donnez de l'Élégance à votre travail.</span>
                        <p>
                            KuTiWa – Donnez de l'Élégance à votre travail.   www.kutiwa.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2019 KuTiWa. <a href="http://www.kutiwa.com ">www.kutiwa.com </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="js/instantpage-3.0.0.js" type="module" defer></script>
<!-- carousel -->

<script>
    $('.carousel').carousel({
        interval: 6000
    })
</script>
</body>
</html>

