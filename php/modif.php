<?php


$bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');


if(!empty($_POST['date'])&&!empty($_POST['actu']))
{
    $req = $bdd->prepare('INSERT INTO `Information_acetyl` (`date`, valeurs) VALUES(?, ?)');
    $req->execute(array(
    	htmlspecialchars($_POST["date"]),
    	htmlspecialchars($_POST["actu"])
    ));
}

if(!empty($_POST['image']))
{
    $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
    $req = $bdd->prepare('INSERT INTO `Information_acetyl` (nom,taille,type,bin) VALUES(?,?,?,?)');
    $req->execute(array(
        $_FILES["image"]["name"],
        $_FILES["image"]["size"],
        $_FILES["image"]["type"], 
        file_get_contents($_FILES["image"]["tmp_name"])
    ));
}  

if(!empty($_POST['valeur'])&&!empty($_POST['charge']))
{
    $req = $bdd->prepare('UPDATE `charge_acetyl` SET valeur = (?), charge = (?), charge2 = 100 - (?) WHERE `charge_acetyl`.`id` = 0');
    $req->execute(array(
    	htmlspecialchars($_POST["valeur"]),
    	htmlspecialchars($_POST["charge"]),
    	htmlspecialchars($_POST["charge"])
    ));
}


if(!empty($_POST['service'])&&!empty($_POST['numero']))
{
    $req = $bdd->prepare('UPDATE `service_acetyl` SET service = (?), numero = (?) WHERE `service_acetyl`.`id` = 0');
    $req->execute(array(
    	htmlspecialchars($_POST["service"]),
    	htmlspecialchars($_POST["numero"])
    ));
}


if(!empty($_POST['datecrea'])&&!empty($_POST['forme'])&&!empty($_POST['nomcomm'])&&!empty($_POST['tele'])&&!empty($_POST['siret']))
{
    $req = $bdd->prepare('UPDATE `generale_acetyl` SET valeurs = (?) WHERE `generale_acetyl`.`id` = 0; UPDATE `generale_acetyl` SET valeurs = (?) WHERE `generale_acetyl`.`id` = 1; UPDATE `generale_acetyl` SET valeurs = (?) WHERE `generale_acetyl`.`id` = 2; UPDATE `generale_acetyl` SET valeurs = (?) WHERE `generale_acetyl`.`id` = 3; UPDATE `generale_acetyl` SET valeurs = (?) WHERE `generale_acetyl`.`id` = 4');
	$req->execute(array(
		htmlspecialchars($_POST["datecrea"]),
		htmlspecialchars($_POST["forme"]),
		htmlspecialchars($_POST["nomcomm"]),
		htmlspecialchars($_POST["tele"]),
		htmlspecialchars($_POST["siret"]) 
	));
}

if(!empty($_POST['effect'])&&!empty($_POST['CS'])&&!empty($_POST['CA']))
{
    $req = $bdd->prepare('UPDATE `taille_acetyl` SET valeurs = (?) WHERE `taille_acetyl`.`id` = 0; UPDATE `taille_acetyl` SET valeurs = (?) WHERE `taille_acetyl`.`id` = 1; UPDATE `taille_acetyl` SET valeurs = (?) WHERE `taille_acetyl`.`id` = 2');
    $req->execute(array(
    	htmlspecialchars($_POST["effect"]),
    	htmlspecialchars($_POST["CS"]),
    	htmlspecialchars($_POST["CA"])
    ));
}

if(!empty($_POST['effect'])&&!empty($_POST['CS'])&&!empty($_POST['CA']))
{
    $req = $bdd->prepare('UPDATE `dirigeant_acetyl` SET valeurs = (?) WHERE `dirigeant_acetyl`.`id` = 0; UPDATE `dirigeant_acetyl` SET valeurs = (?) WHERE `dirigeant_acetyl`.`id` = 1; UPDATE `dirigeant_acetyl` SET valeurs = (?) WHERE `dirigeant_acetyl`.`id` = 2');
    $req->execute(array(
    	htmlspecialchars($_POST["pres1"]),
    	htmlspecialchars($_POST["DG1"]),
    	htmlspecialchars($_POST["admin1"])
    ));
}

if(!empty($_POST['dom'])&&!empty($_POST['expert']))
{
    $req = $bdd->prepare('UPDATE `domaine_acetyl` SET valeurs = (?) WHERE `domaine_acetyl`.`id` = 0; UPDATE `domaine_acetyl` SET valeurs = (?) WHERE `domaine_acetyl`.`id` = 1');
    $req->execute(array(
    	htmlspecialchars($_POST["dom"]),
    	htmlspecialchars($_POST["expert"])
    ));
}

echo 'Les informations ont bien été mise à jour !';
?>

