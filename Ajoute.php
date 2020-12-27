<!DOCTYPE html>
<html>

<head>
      <title> Panier </title>
	  <meta charset="utf-8" />
</head>
<body>
<h1>Panier</h1>
<div>
  
/** */
<?php 
session_start();
include 'Donnees.inc.php';

?>

<table border="1" width="100" cellpadding="0" cellspacing="0">
  <tr>
      <td>Numéro</td>
      <td>titre</td>
      <td>ingredients</td>
      <td>preparation</td>
      <td>index</td>
      <td></td>
  </tr>

<?php
 $uid=$_SESSION["uid"];

 /**$sql="select * from Recettes";
 $arr=$donne->Query($sql);
 $i=0;$i<count($Recettes);$i++ */
for($i=0;$i<count($Recettes);$i++){
  /**print_r($Recettes[$i]['titre']);
  echo "</br>";*/
  echo "<tr>
    <td>{$i}</td>
    <td>{$Recettes[$i]['titre']}</td>
    <td>{$Recettes[$i]['ingredients']}</td>
    <td>{$Recettes[$i]['preparation']}</td>
    <td>{$Recettesr[$i]['index'][0]}</td>
    <td> <a href='ajoute.php?ids={$i}'> acheter</a></td>
    </tr>";
}
?>

</body>
</html>
