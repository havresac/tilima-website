<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- humans.txt We Are People, Not Machines | http://humanstxt.org/ -->
    <link type="text/plain" rel="author" href="http://domain/humans.txt" />
    <!-- CSS stylesheet link -->
    <link rel="stylesheet" type="text/css"  href="stylesheets/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>TILIMA</title>

  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
          <h1  class="lead">Tilima</h1>
            <h2 class="lead">Bienvenue sur le site de TILIMA.</h2>
        </div>

          <h1 class="lead"> <strong>TILiMa</strong> signifie <strong>T</strong>uyaux <strong>I</strong>nternet <strong>Li</strong>bres du <strong>Ma</strong>ine.</h1>
                <p>TILIMA sera un fournisseur d'acces internet associatif basé sur des valeurs comme :</p>
                  <ul>
                    <li>Bénévolat ;</li>
                    <li>Solidarité ;</li>
                    <li>Fonctionnement démocratique ;</li>
                    <li>But non lucratif ;</li>
                    <li>Défense et promotion de la neutralité du net.</li>
                  </ul>

            <h1>Prochaine réunion mensuelle de l'association Tilima</h1>

          <div class="row">
                <div class="col-lg-6">
                      <p>Vous êtes invité à nous rejoindre :</p>
                      <!-- Date prochaine réunion -->
                      <p>La prochaine réunion aura lieu début novembre 2016 à partir de 20h<br>
                        <em>le HAUM<br>
                          Boulevard Marie et Alexandre OYON<br>
                          72000 Le Mans<br>
                        </em>
                  </div>
                  <div class="col-lg-6">
                            <!-- iframe openstreetmap -->
                            <iframe width="425" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=0.18631696701049807%2C47.99328557279961%2C0.19287228584289554%2C47.99653797717409&amp;layer=mapnik&amp;marker=47.99491180061288%2C0.18959462642669678" style="width: 100%; padding-right: 45px;"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=47.99491&amp;mlon=0.18959#map=18/47.99491/0.18959">Voir sur une carte plus grande</a></small>

                  </div>
          </div>

          <div class="row">
                <div class="col-lg-6">
                    <h1>Travail en cours</h1>
                      <p>Voici le document collaboratif recensant les efforts en cours :<br> <a href="http://pad.tilima.fr/p/accueil">http://pad.tilima.fr/p/accueil</a></p>
                </div>


                <div class="col-lg-6">
                  <h1><p>Nous contacter </p></h1>
                    <ul>
                      <li>Via IRC <strong><a href="irc://irc.geeknode.org/#tilima">geeknode#tilima</a></strong></li>
                      <li>Via Twitter <strong><a href="http://twitter.com/tilima_fai">@tilima_fai</a></strong></li>
                      <li>Via courriel : contact à tilima point fr</li>
                    </ul>
                  </div>
          </div>

    <footer class="footer">

<?php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites depuis mai 2016.';
?>


    </footer>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
