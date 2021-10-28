<!DOCTYPE html>
<html>
<head>
	<title>Module Note administration</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/styleadmin.css">

		<script type="text/javascript" src="java/adminscript.js"></script>

		<link rel="preconnect" href="https://fonts.googleapis.com"> 
  		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  		<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@475&display=swap" rel="stylesheet">

  		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>
<body>

<div class="intro">
	<h2 class="titre_bloc1">Note Visiteurs</h2>
	<p class="intro_quest">Voici le rapport de votre Module Note Visiteur, retrouvez ici les notes que vos acteurs vous on données !</p>

	<div class="rapport">
		<div class="flex-items">
			<p class="intro_quest" style="text-decoration: underline;">Moyenne</p>
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
                    <p class="Moyenne"><?php echo round($donnees['Note_moyen'],1); ?></p>
                    <?php
                }

            $reponse->closeCursor(); 
            ?>-->
			<p class="Moyenne">8,5</p>
		</div>

   		<div class="flex-items">
   			<p class="intro_quest" style="text-decoration: underline;">Notes</p>
   			<!--<?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                $reponse = $bdd->query('SELECT Note FROM Note_Visiteur ORDER BY id DESC LIMIT 0, 4');

                while ($donnees = $reponse->fetch())
                {
                    ?>
                    <p class="Les_Notes"><?php echo $donnees['Note']; ?></p>
                    <?php
                }

            $reponse->closeCursor(); 
            ?>-->
			<p class="Les_Notes">9</p>
			<p class="Les_Notes">8</p>
   		</div>
	</div>
</div>

</body>
</html>




