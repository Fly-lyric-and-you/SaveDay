<!DOCTYPE html>
<html>
<head>
	<title>Module Note administration</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="css/relance.css">

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

<h2 class="titre_bloc1">Relance financière</h2>
<p class="intro_quest">Voici le rapport des relances, retrouvez ici votre mail gérérique, les échances et les sommes qu'ils vous doiventet la possibilité de rajouter un client !</p>

  <form action="php/modifmail.php" method="post">
      <p class="intro_quest" style="text-decoration: underline; margin-left: 35%;">Mail généreique</p>
            
      <div class="mail">
      <div id="div1">
        Lorem ipsum dolor sit amet, <br><br>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br>Lorem ipsum dolor sit amet.
      </div>
    </div>

    <button class="EnvoiIndicateur">Modifier</button>
  </form>


  <form action="php/envoirelance.php" method="post">
  <div class="rapport">
    <div class="flex-items">
      <p class="intro_quest" style="text-decoration: underline;">Client</p>
    </div>

    <div class="flex-items">
      <p class="intro_quest" style="text-decoration: underline;">Échance</p>
    </div>
  </div>

  <div class="client">
    <div class="item">Client 1</div><div class="item" style="color: red;">+360 J</div>
  </div>

  <div class="client">
    <div class="item">Client 2</div><div class="item" style="color: red;">+200 J</div>
  </div>

  <div class="client">
    <div class="item">Client 3</div><div class="item" style="color: red;">+180 J</div>
  </div>

  <div class="client">
    <button class="EnvoiIndicateur">Ouvrir</button><button class="EnvoiIndicateur">Relancer</button>
  </div>

 </form>


  <form action="php/ajoutclient.php" method="post">
    <p class="intro_quest" style="text-decoration: underline; margin-left: 42%;">Ajouter</p>

      <div class="client">
        <div class="item">NOM</div><textarea class="clienttxt" name="NOM" placeholder="NOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NOM'" required=""></textarea>
      </div>
      <div class="client">
        <div class="item">MAIL</div><textarea class="clienttxt" name="MAIL" placeholder="MAIL" onfocus="this.placeholder = ''" onblur="this.placeholder = 'MAIL'" required=""></textarea>
      </div>
      <div class="client">
        <div class="item">NUMÉRO</div><textarea class="clienttxt" name="NUMÉRO" placeholder="NUMÉRO" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NUMÉRO'"></textarea>
      </div>
      <div class="client">
        <div class="item">N°FAC</div><textarea class="clienttxt" name="N°FAC" placeholder="N°FAC" onfocus="this.placeholder = ''" onblur="this.placeholder = 'N°FAC'"></textarea>
      </div>
      <div class="client">
         <div class="item">ÉCHÉANCE</div><textarea class="clienttxt" name="ÉCHÉANCE" placeholder="ÉCHÉANCE" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ÉCHÉANCE'"></textarea>
      </div>

    <button class="EnvoiIndicateur">Ajouter</button>
  </form>
          

</div>

</body>
</html>




