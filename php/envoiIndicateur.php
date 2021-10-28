<?php


$bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');



if(!empty($_POST['valeur1'])&&!empty($_POST['charge1']))
{
    $req = $bdd->prepare('UPDATE `croiss_acetyl` SET valeur = (?), charge = (?) WHERE `croiss_acetyl`.`id` = 0');
    $req->execute(array(
    	htmlspecialchars($_POST["valeur1"]),
    	htmlspecialchars($_POST["charge1"])
    ));
}

if(!empty($_POST['valeur2'])&&!empty($_POST['charge2']))
{
    $req = $bdd->prepare('UPDATE `croiss_acetyl` SET valeur = (?), charge = (?) WHERE `croiss_acetyl`.`id` = 1');
    $req->execute(array(
    	htmlspecialchars($_POST["valeur2"]),
    	htmlspecialchars($_POST["charge2"])
    ));
}

if(!empty($_POST['valeur3'])&&!empty($_POST['charge3']))
{
    $req = $bdd->prepare('UPDATE `croiss_acetyl` SET valeur = (?), charge = (?) WHERE `croiss_acetyl`.`id` = 2');
    $req->execute(array(
    	htmlspecialchars($_POST["valeur3"]),
    	htmlspecialchars($_POST["charge3"])
    ));
}

echo 'Indicateur has been send !

<p><a href="https://www.flypandyou.fr/test/index.php">Retour</a></p>';

?>