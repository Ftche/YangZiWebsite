

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
      <title>YangZI</title>
      <meta name="keywords" content="YangZi,commerce,logiciel">
      <meta name="description" content="application de commerce, gestion de pharmacie, gestion de librairie">
       <META NAME="Author" CONTENT="Franklin MBOUDJE">
       <META NAME="Identifier-URL" CONTENT="http://www.yangzi-erp.com">
       <META NAME="Reply-to" CONTENT="yangzi-erp@kutiwa.com">
       <META NAME="Category" CONTENT="ERP,Software">
       <META NAME="Publisher" CONTENT="Franklin MBOUDJE">
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
                                 <a class="nav-link" href="#about">Accueil</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service"> Fonctionnalités</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact</a>
                              </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="DemandeDevis.php">Demande de devis</a>
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
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide-4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block info">
                                        <h5>Facturation</h5>
                                        <p>Les factures sont personnalisées générées selon vos critères .</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide-3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Adapter à vos besoins</h5>
                                        <p>YangZi s'adapte à votre entreprise ( TPE/PME/SA/SARL ).</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide-5.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Contrôle à distance</h5>
                                        <p>YangZi vous permet de contrôler l'activité de l'entreprise à distance.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
               <!-- <div class="col-md-5">
                  <div class="text-bg">
                     <h1>YangZi<br> Plateforme de gestion</h1>
                     <span>Système centralisé</span>
                     <p>Cette plateforme est conçue sur des technologies très robustes, s’appuyant sur une base de données très puissante </p>
                     <a href="#">Découvrer l'outil </a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="images/img.png" /></figure>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Hosting -->
      <div id="about" class="hosting">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>C'est quoi YangZi ?</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="web_hosting">
                     <figure><img  src="images/web.jpg" alt="#"/></figure>
                     <h4>YangZi est une plateforme de gestion commerciale, tropicalisée à la façon dont le commerce et prestation de services sont effectués,
                         en gardant sa flexibilité </h4>
                     <a href="#">Liser plus</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Hosting -->
      <!-- Services  -->
      <div id="service" class="Services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
                          <h2>Les fonctionnalités</h2>
                          <p>la plateforme est accessible même à partir des smartphones et à distance<br>
                              Offrant des fonctionnalités tant puissantes que flexible.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                      <div class="Services-box">
                          <i><img src="images/audit.png" alt="#"/></i>
                          <h3> Gestion des payements</h3>
                          <!--                     <p></p>-->
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                      <div class="Services-box">
                          <i><img src="images/bankrupt.png" alt="#"/></i>
                          <h3> Gestion de stock</h3>
                          <!--                     <p></p>-->
                      </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                      <div class="Services-box">
                          <i><img src="images/home.png" alt="#"/></i>
                          <h3> Tableau de bord</h3>

                      </div>
                  </div>
                  <!--               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">-->
                  <!--                  <div class="Services-box">-->
                  <!--                     <i><img src="images/cash-payment.png" alt="#" /></i>-->
                  <!--                     <h3>Gestion commerciale</h3>-->
                  <!--                  </div>-->
                  <!--               </div>-->
                  <!--               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">-->
                  <!--                  <div class="Services-box">-->
                  <!--                     <i><img src="images/agency.png" alt="#" /></i>-->
                  <!--                     <h3> Gestion des agences</h3>-->
                  <!--                  </div>-->
                  <!--               </div>-->
                  <!--            </div>-->
                  <!--             <div class="row">-->
                  <!--                <a class="read_more" href="#"> Decouvrez plus</a>-->
                  <!--             </div>-->
              </div>
          </div>
      </div>
      <!-- end Servicess -->
      <!-- why -->
      <div id="why" class="why">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Pourquoi choisir </h2>
                     <p> YangZi tropicalise à la façon dont le commerce et prestation de services sont effectués. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                  <div id="box_ho" class="why-box">
                     <i><img src="images/why1.png" alt="#" /></i>
                     <h3 >Puissance des fonctionnalités</h3>
                     <p>Recevez des notifications pour suivre vos paiements et votre solde disponible en temps réel,
                         Consultez votre historique de transactions,
                         Ajoutez un mode de paiement complémentaire
                     </p>
                  </div>
                  <a class="read_more bg" href="#">Encore plus</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="images/why2.png" alt="#" /></i>
                     <h3>Totalement optimisée</h3>
                     <p>Interfaces d'affichage et connexion, couleurs sobres et ajustable, intégration des fonctionnalités
                         , prise en main facile, et bien d'autres </p>
                  </div>
                  <a class="read_more bg" href="#">Encore plus</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="images/why3.png" alt="#" /></i>
                     <h3>Support technique</h3>
                     <p>Notre engagement : répondre à toutes vos questions par chat en moins de 1 min. Top chrono !
                         Notre service client vous est dédié, du lundi au vendredi, de 9h30 à 18h30. </p>
                  </div>
                  <a class="read_more bg" href="#">Encore plus</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end why -->
      <!-- Photos -->
      <div id="service" class="Services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
                          <h2>Quelques interfaces</h2>
                          <p>la plateforme offre diverse interfaces de contrôles et de gestions.<br>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="row text-center text-lg-left">

                      <div class="col-lg-3 col-md-4 col-6 ">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_1.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_2.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_3.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_4.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a href="#" class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_5.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_6.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_7.jpg" alt="">
                          </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-6">
                          <a  class="d-block mb-4 h-100">
                              <img class="img-fluid img-thumbnail" src="images/Interfaces/Inter_8.jpg" alt="">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Photos -->
      <!-- Pricing -->
      <!--<div id="why" class="why">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="titlepage">
                          <h2>Tarification </h2>
                          <p> YangZi vous offre des forfaits selon vos ressources et modulables selon vos besoins. </p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="card-deck mb-3  text-center">
                          <div class="card mb-4 box-shadow ">
                              <div class="card-header">
                                  <h4 class="my-0 font-weight-normal">Starter</h4>
                              </div>
                              <div class="card-body">
                                  <h1 class="card-title pricing-card-title">XAF <small class="text-muted">/ mo</small></h1>
                                  <ul class="list-unstyled mt-3 mb-4">
                                      <li>10 users included</li>
                                      <li>2 GB of storage</li>
                                      <li>Email support</li>
                                      <li>Help center access</li>
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Demander un devis</button>
                              </div>
                          </div>
                          <div class="card mb-4 box-shadow bg-info">
                              <div class="card-header">
                                  <h4 class="my-0 font-weight-normal" style=" color: white !important;">Business</h4>
                              </div>
                              <div class="card-body">
                                  <h1 class="card-title pricing-card-title " style=" color: white !important;">XAF <small class="text-muted" style=" color: white !important;">/ mo</small></h1>
                                  <ul class="list-unstyled mt-3 mb-4 " style=" color: white !important;">
                                      <li>20 users included</li>
                                      <li>10 GB of storage</li>
                                      <li>Priority email support</li>
                                      <li>Help center access</li>
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-light">Demander un devis</button>
                              </div>
                          </div>
                          <div class="card mb-4 box-shadow bg-light">
                              <div class="card-header">
                                  <h4 class="my-0 font-weight-normal">Select</h4>
                              </div>
                              <div class="card-body">
                                  <h1 class="card-title pricing-card-title">XAF <small class="text-muted">/ mo</small></h1>
                                  <ul class="list-unstyled mt-3 mb-4">
                                      <li>30 users included</li>
                                      <li>15 GB of storage</li>
                                      <li>Phone and email support</li>
                                      <li>Help center access</li>
                                  </ul>
                                  <button type="button" class="btn btn-lg btn-block btn-primary">Demander un devis</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>-->
      <!-- end pricing -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 ">
                  <form class="main_form">
                     <div class="row">
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Noms" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Email" type="text" name=" Email">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Téléphone" type="text" name="Phone">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send">Envoyer</button>
                        </div>
                     </div>
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

