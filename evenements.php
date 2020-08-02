<!DOCTYPE html>
<html lang="fr">

    <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
                    <meta http-equiv="Pragma" content="no-cache">
                    <meta http-equiv="Expires" content="0">
                    <title>Sequel DM</title>
                    <meta name="description" content="Le site du serveur Dead Matter Sequel (normal et hardcore).">
                    <meta name="keywords" content="Dead Matter, survival, zombie, serveur sequel, serveur dead matter">
                    <link rel="shortcut icon" type="image/png" href="public/images/logo.png">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                    <script src="https://kit.fontawesome.com/32fc3043f6.js" crossorigin="anonymous"></script>
                    <link rel="stylesheet" href="public/css/main.css">
                    <link rel="stylesheet" href="public/css/header.css">
                    <link rel="stylesheet" href="public/css/footer.css">
                    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                                crossorigin="anonymous"></script>

                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                                crossorigin="anonymous"></script>


    </head>

     <body>
     <header>
     <nav id="header" class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
         <div class="container-fluid">
             <a class="navbar-brand" href="/">
                 <img src="public/img/sequel7.png" height="100" alt="">
             </a>

             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                         <li class="nav-link"><a href="/presentation-serveur.php">Le serveur</a></li>
                         <li class="nav-link"><a href="/regles-serveur.php">Règlement</a></li>
                         <li class="nav-link"><a href="/teams.php">Les Teams</a></li>
                         <li class="nav-link"><a href="/evenements.php">Les Evènements</a></li>
                 </ul>
             </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->

     </nav>
     <div >
                                           <ul class="nav navbar-nav navbar-logo mx-auto">
                                                 <li class="nav-item">
                                                    <img src="public/img/evenements.png" height="50" alt="" class="navbar-logo" style="transform: translate(0, -20px);">
                                                 </li>
                                           </ul>
                                       </div><!-- /.container-fluid -->
     </div><!-- /.container-fluid -->
     </header>

     <div class="main-content events mx-auto container-fluid">
         <ul class="articles-listing">
            <li class="event-li row">
                <div class= "col-4">
                    <a href="/concours.php"> <img width="250" height="200" src ="public/img/concours.png"> </a>
                </div>
                <div class= "col-8">
                    <h3> <a href="/concours.php">Jeu Concours à l'occasion de la sortie de l'alpha</a> </h3>
                     <p>Tentes de gagner deux clés pour l'alpha fermée (CA) de Dead Matter</p>
                     <p class="more">Publié le 02/08/2020</p>
                </div>
            </li>

        </ul>

     </div>

      <div class="footer">

                  <nav class="navbar navbar-center bg-dark">
                                            <div class="container-fluid">
                                                <ul class="nav navbar-nav navbar-logo mx-auto">
                                                      <li class="nav-item">
                                                          <img src="public/img/communaute.png" height="50" alt="" style="transform: translate(0, -60%);">
                                                      </li>
                                                </ul>
                                            </div><!-- /.container-fluid -->
                                        </nav>
                  <?php include("footer.php"); ?>

              </div>

     </body>

</html>