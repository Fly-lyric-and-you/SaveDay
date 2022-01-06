<?php 

  try 
  {
      $bdd = new PDO('mysql:host=91.216.107.183;dbname=flypa1556204_2ehybl;charset=utf8', 'flypa1556204', 'Pape1998Paul_');
  }
  catch(PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }