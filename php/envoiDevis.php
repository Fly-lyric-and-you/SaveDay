<?php

    http_response_code(200);
    $to = 'didiap@outlook.fr';
    $Nom = htmlspecialchars($_POST["leNom"]);
    $Prenom = htmlspecialchars($_POST["lePren"]);
    $email= htmlspecialchars($_POST["email"]);
    $Tel= htmlspecialchars($_POST["Tel"]);
    $Sujet= htmlspecialchars($_POST["Sujet"]);
    $Message= htmlspecialchars($_POST["Message"]);


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=iso-8859-1; charset=UTF-8' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>Demande de devis de '.$Nom.' '.$Prenom.',</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Téléphone: '.$Tel.'</td></tr><br><br>
        <tr><td>Sujet: '.$Sujet.'</td></tr>
        <tr><td>Message : '.$Message.'</td></tr>

        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {


        echo 'Message has been send !
        <p><a href="https://www.flypandyou.fr/test/index.php">Retour</a></p>';

    }

    else

    {
        echo 'failed, try again';
    }


    $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');



        if(!empty($_POST['leNom'])&&!empty($_POST['lePren'])&&!empty($_POST['email'])&&!empty($_POST['Tel'])&&!empty($_POST['Sujet'])&&!empty($_POST['Message']))
        {
            $req = $bdd->prepare('INSERT INTO `devis_acetyl` (nom, prenom, mail, telephone, sujet, message) VALUES(?, ?, ?, ?, ?, ?)');
            $req->execute(array(
                htmlspecialchars($_POST["leNom"]),
                htmlspecialchars($_POST["lePren"]),
                htmlspecialchars($_POST["email"]),
                htmlspecialchars($_POST["Tel"]),
                htmlspecialchars($_POST["Sujet"]),
                htmlspecialchars($_POST["Message"])
            ));
        }

?>
