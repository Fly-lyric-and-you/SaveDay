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

<form id="myindicateur" action="php/envoiIndicateur.php" method="post">

<div class="intro">
  <h2 class="titre_bloc1">Vos Indicateurs clés</h2>
  <p class="intro_quest">Voici votre module indicateur clés, vous pouvez ici mettre en place les objectifs que vous souhaitez partager !</p>
  <p class="indication">Appuyez sur le &#x1F44D; Pour envouyer les indicateurs</p>

  <div class="rapport">
            <div class="flex-items">
              <p class="intro_quest" style="text-decoration: underline;">Indicateur pricipale</p>
              <p class="Les_Notes">Indicateur 1</p>
              <input class="common-textarea" name="charge1" placeholder="%" onfocus="this.placeholder = ''" onblur="this.placeholder = '%'" required=""></input>
              <textarea class="textarea2" name="valeur1" placeholder="Justification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Justification'" required=""></textarea>
            </div>
              <div class="flex-items">
                <p class="intro_quest" style="text-decoration: underline;">Autre indicatuers</p>
                <p class="Les_Notes">Indicateur 2</p>
                <input class="common-textarea" name="charge2" placeholder="%" onfocus="this.placeholder = ''" onblur="this.placeholder = '%'" required=""></input>
                <textarea class="textarea1" name="valeur2" placeholder="Justification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Justification'" required=""></textarea>

                <p class="Les_Notes">Indicateur 3</p>
                <input class="common-textarea" name="charge3" placeholder="%" onfocus="this.placeholder = ''" onblur="this.placeholder = '%'" required=""></input>
                <textarea class="textarea1" name="valeur3" placeholder="Justification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Justification'" required=""></textarea>
              </div>
          </div>

<button class="EnvoiIndicateur">&#x1F44D;</button>
</form>

</div>

</body>
</html>




