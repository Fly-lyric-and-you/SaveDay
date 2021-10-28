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
	<h2 class="titre_bloc1">Demande de devis</h2>
	<p class="intro_quest">Voici le rapport de votre Module Note Visiteur, retrouvez ici le résumé de demandes qui vous ont été formulées !</p>

	<div class="rapport">
		<div class="flex-items">
			<p class="intro_quest" style="text-decoration: underline;">Nombre de demande</p>
			<!--	<?php
	        try
	        {
	            $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
	        }
	        catch(Exception $e)
	        {
	            die('Erreur : '.$e->getMessage());
	        }

	        $reponse = $bdd->query('SELECT COUNT(nom) as countid FROM devis_acetyl');

	        $nbligne = $reponse->fetch();
	    
	        echo '<p class="Moyenne">' .$nbligne['countid']. '</p>';
	      
	    	?> -->
			<p class="Moyenne">4</p>
		</div>

   		<div class="flex-items">
   			<p class="intro_quest" style="text-decoration: underline;">Auteur</p>
   		<!--<?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                $reponse = $bdd->query('SELECT nom FROM devis_acetyl ORDER BY id DESC LIMIT 0, 5');

                while ($donnees = $reponse->fetch())
                {
            ?>
            
            <p class="Les_Notes"><?php echo $donnees['nom']; ?></p>
            
            <?php
                }

            $reponse->closeCursor(); 
            ?>

          -->
   			<p class="Les_Notes">Mr Chris</p>
   			<p class="Les_Notes">Mm Joe</p>
   			<p class="Les_Notes">Mm Dune</p>
   			<p class="Les_Notes">Mr Song</p>
   		</div>

   		<div class="flex-items">
   			<p class="intro_quest" style="text-decoration: underline;">Numéros</p>
   		<!--<?php
                try
                {
                  $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
                $reponse = $bdd->query('SELECT telephone FROM devis_acetyl ORDER BY id DESC LIMIT 0, 5');

                while ($donnees = $reponse->fetch())
                {
            ?>
            
            <p class="Les_Notes"><?php echo $donnees['telephone']; ?></p>
            
            <?php
                }

            $reponse->closeCursor(); 
            ?>

          -->
   			<p class="Les_Notes">074575765</p>
   			<p class="Les_Notes">064745665</p>
   			<p class="Les_Notes">074775765</p>
   			<p class="Les_Notes">064788865</p>
   		</div>
	</div>
</div>

</body>
</html>




