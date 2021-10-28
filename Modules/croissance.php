<!DOCTYPE html>
<html>
<head>
	<title>Module Taux de croissance</title>

  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/style_test_player.css" type="text/css"/>

  <link rel="stylesheet" href="css/style_pass_word.css" type="text/css"/>
  <link rel="stylesheet" href="css/styleback.css" type="text/css"/>

<!---Module-->  
  <link rel="stylesheet" href="css/devis.css" type="text/css"/>
  <link rel="stylesheet" href="css/Note.css" type="text/css"/>
<!---Fin Module-->

<!----->

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@475&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

<!---->
  <script type="text/javascript" src="java/pass_flyp.js"></script>
  <script type="text/javascript" src="java/monscript.js"></script>
  <script type="text/javascript" src="java/Note.js"></script>
  <meta meta name="viewport" content="width=device-width, user-scalable=0.3" />

<!---->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!---->

<style type="text/css">
  .indicateur{
    font-size: 70px;
    font-weight: bold;
    color:var(--main-color);
    border-radius: 50px;
  }

</style>

</head>
<body>
    
    
    <div id="myNav3" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>

        <div class="overlay-content">

          <h1 class="titreoverlay">Indicateurs Clés</h1>
  

            <div class="ligneSepa2"></div>

        <?php
            try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
            catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

            $reponse = $bdd->query('SELECT charge FROM croiss_acetyl WHERE id = 0');

            while ($donnees = $reponse->fetch())
                {
        ?>

              <p class="indicateur"><?php echo $donnees['charge']; ?> %</p>
                  
        <?php
                }
            $reponse->closeCursor();
        ?> 

            <p class="text_overlay1">Indicateurs 1<br><br>

        <?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

                $reponse = $bdd->query('SELECT valeur FROM croiss_acetyl WHERE id = 0');

                while ($donnees = $reponse->fetch())
                {
        ?>

              <p class="text_overlay1"><?php echo $donnees['valeur']; ?></p>
                  
        <?php
                }
              $reponse->closeCursor();
        ?>

            <div class="ligneSepa2"></div>

        <?php
            try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
            catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

            $reponse = $bdd->query('SELECT charge FROM croiss_acetyl WHERE id = 1');

            while ($donnees = $reponse->fetch())
                {
        ?>

              <p class="indicateur"><?php echo $donnees['charge']; ?> %</p>
                  
        <?php
                }
            $reponse->closeCursor();
        ?>

            <p class="text_overlay1">Indicateurs 2<br><br> 

            <?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

                $reponse = $bdd->query('SELECT valeur FROM croiss_acetyl WHERE id = 1');

                while ($donnees = $reponse->fetch())
                {
            ?>

              <p class="text_overlay1"><?php echo $donnees['valeur']; ?></p>
                  
            <?php
                }
              $reponse->closeCursor();
            ?> 

            <div class="ligneSepa2"></div>

        <?php
            try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
            catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

            $reponse = $bdd->query('SELECT charge FROM croiss_acetyl WHERE id = 2');

            while ($donnees = $reponse->fetch())
                {
        ?>

              <p class="indicateur"><?php echo $donnees['charge']; ?> %</p>
                  
        <?php
                }
            $reponse->closeCursor();
        ?>

            <p class="text_overlay1">Indicateurs 3<br><br> 

            <?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

                $reponse = $bdd->query('SELECT valeur FROM croiss_acetyl WHERE id = 2');

                while ($donnees = $reponse->fetch())
                {
              ?>

              <p class="text_overlay1"><?php echo $donnees['valeur']; ?></p>
                  
              <?php
                }
              $reponse->closeCursor();
            ?>

            <div class="ligneSepa2"></div>
        </div>
    </div>

  <div onclick="openNav3()" class="bonus">
    <h3 class="News4">Indicateurs clés</h3>

    <div class="zone">
      <?php
            try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
            catch(Exception $e)
                {
                  die('Erreur : '.$e->getMessage());
                }

            $reponse = $bdd->query('SELECT charge FROM croiss_acetyl WHERE id = 0');

            while ($donnees = $reponse->fetch())
                {
        ?>

              <p class="intro_bonus"><?php echo $donnees['charge']; ?></p>
                  
        <?php
                }
            $reponse->closeCursor();
        ?> 


      <P class="unite">%</P>
      <h1 class="bonus1">&#9002;</h1>
    </div>

  </div>

</body>
</html>