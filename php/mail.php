<?php

    http_response_code(200);
    $to = 'didiap@outlook.fr';
    $firstname = htmlspecialchars($_POST["name"]);
    $email= htmlspecialchars($_POST["email"]);
    $boite= htmlspecialchars($_POST["boite"]);

    $actu= htmlspecialchars($_POST["actu"]);
    $charge= htmlspecialchars($_POST["charge"]);
    $detail1= htmlspecialchars($_POST["detail1"]);
    $service= htmlspecialchars($_POST["service"]);
    $nomservice= htmlspecialchars($_POST["nomservice"]);
    $numeroservice= htmlspecialchars($_POST["numeroservice"]);
    $croissance= htmlspecialchars($_POST["croissance"]);
    $croissanceexpl= htmlspecialchars($_POST["croissanceexpl"]);


    $datecrea= htmlspecialchars($_POST["datecrea"]);
    $forme= htmlspecialchars($_POST["forme"]);
    $nomcomm= htmlspecialchars($_POST["nomcomm"]);
    $tele= htmlspecialchars($_POST["tele"]);
    $siret= htmlspecialchars($_POST["siret"]);
    
    $effect= htmlspecialchars($_POST["effect"]);
    $CS= htmlspecialchars($_POST["CS"]);
    $CA= htmlspecialchars($_POST["CA"]);

    $pres1= htmlspecialchars($_POST["pres1"]);
    $DG1= htmlspecialchars($_POST["DG1"]);
    $admin1= htmlspecialchars($_POST["admin1"]);

    $dom= htmlspecialchars($_POST["dom"]);
    $expert= htmlspecialchars($_POST["expert"]);
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1; charset=UTF-8' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>A modifier la page de la boite '.$boite.'</td></tr>

        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo '
<head>
    <title>mail test</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styleadmin.css">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@475&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">


        <style type="text/css">
            body {
                background-color: rgb(241, 241, 241);
            }
        </style>

</head>

<body>



<header>
    <div class="tete">
        <span class="flyp">flyp.</span>
    </div>
</header>

<section class="contact-area section-gap" id="contact">


        <div class="">
                <div class="container">
                    
                            <div class="titre">
                                <h1 class="titre_page">Votre page administrative</h1>
                                <p class="asterix">*</p>
                                <p class="text_page">Le formulaire a bien été complété</p>
                            </div>              
                </div>


        </div>
</scetion>

        The message has been sent.

</body>';


//    $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe', 'flypa1556204', 'Pape1998Paul_');

//        if(1 == 1)
//        {
//            $requete = $bdd -> prepare("INSERT INTO generale_acetyl(valeurs) VALUES(?)");
//            $requete ->execute(array());
//        }

 }

    else

    {
        echo 'failed, try again';
    }

?>
