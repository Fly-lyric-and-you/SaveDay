<!DOCTYPE html>
<html>
<head>
	<title>Module Notation</title>

  <link rel="stylesheet" href="css/Note.css" type="text/css"/>
  <script type="text/javascript" src="java/Note.js"></script>
</head>
<body>
	<div id="myNav5" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>

        <div class="overlay-content">

            <h1 class="titreoverlay">Donnez votre avis</h1>


            <p class="text_overlay1">Votre avis nous interesse ! <br><br> Sur ce module, vous avez la possibilité de donner une notre à nos services, celle-ci est anonyme alors lancez-vous !</p>

            <div class="Milieu">

            <form class="devform" id="devform" action="php/envoiDevis.php" method="post">
              <div class="Qu">
                <p class="detal">Donnez nous une note !</p>
                <input class="NoteCLI" name="leNom" placeholder="/10" onfocus="this.placeholder = ''" onblur="this.placeholder = '/10'" type="number" max="10" required=""></input>
              </div>

              <button class="envoi">
                <p class="Noter">Noter</p>
              </button>
            </form>

            </div>


        </div>
  </div>

  <div onclick="openNav5()" class="bonus">
    <h3 class="Rate">Note</h3>

    <div class="zone">
      <!--<?php
            try
            {
              $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            $reponse = $bdd->query('SELECT AVG(Note) AS Note_moyen FROM Note_Visiteur');

                while ($donnees = $reponse->fetch())
                {
                    ?>
                    <p class="intro_bonus3"><?php echo round($donnees['Note_moyen'],1); ?></p>
                    <?php
                }

        $reponse->closeCursor(); 
        ?>-->
        <p class="intro_bonus2">8.5</p>
      <P class="unite">/10</P>
      <h1 class="bonus12">&#9002;</h1>
    </div>

  </div>

</body>
</html>





