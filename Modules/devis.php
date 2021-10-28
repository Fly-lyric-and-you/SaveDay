<!DOCTYPE html>
<html>
<head>
	<title>Module devis</title>

  <link rel="stylesheet" href="css/devis.css" type="text/css"/>
  <script type="text/javascript" src="java/Note.js"></script>
</head>
<body>
	  <div id="myNav4" class="overlay1">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>

        <div class="overlay-content">

            <h1 class="titreoverlay">Contact devis</h1>


            <p class="text_overlay1">Votre devis en quelques clics ! <br><br> Envoyez nous votre demande et nous vous recontacteros, par la suite pour l'obtention de votre devis !</p>

            <div class="Milieu">

            <form class="notform" id="notform" action="php/envoiDevis.php" method="post">
              <div class="Qu">
                <p class="detal">Nom *</p>
                <input class="repdevis" name="leNom" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" required=""></input>
                <input class="repdevis" name="lePren" placeholder="Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prénom'" required=""></input>
              </div>

            <div class="quest">
              <p class="detal2">Mail *</p>
              <div class="Qu">
                <input class="repdevis2" name="Mail" placeholder="mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'mail'" required=""></input>
              </div>
            </div>

            <div class="quest">
              <p class="detal2">Téléphone *</p>
              <div class="Qu">
                <input class="repdevis2" name="Tel" placeholder="téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'téléphone'" required=""></input>
              </div>
            </div>

            <div class="quest">
              <p class="detal2">Votre Projet ? *</p>
              <div class="Qu">
                <input class="repdevis2" name="Sujet" placeholder="sujet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'sujet'" required=""></input>
              </div>
            </div>

            <div class="quest">
              <p class="detal2">Votre message *</p>
              <div class="Qu">
                <textarea class="repdevis3" name="Message" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required=""></textarea>
              </div>
            </div>

              <button class="envoi">
                <p class="envoyer">Envoyez</p>
              </button>

            </form>

            </div>


        </div>
  </div>

  <div onclick="openNav4()" class="bonus">
    <h3 class="devis">Contact devis</h3>

    <div class="zone">
        <p class="intro_bonus2"></p>
      <P class="unite"></P>
      <h1 class="bonus12">&#9002;</h1>
    </div>

  </div>

</body>
</html>





