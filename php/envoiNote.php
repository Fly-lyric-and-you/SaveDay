<?php


$bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_1runqe;charset=utf8', 'flypa1556204', 'Pape1998Paul_');



$req = $bdd->prepare('INSERT INTO `Note_Visiteur` (Note) VALUES(?)');
$req->execute(array(
	htmlspecialchars($_POST["Note"])
));


echo 'Note has been send !

<p><a href="https://www.flypandyou.fr/test/index.php">Retour</a></p>';

?>

