<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo uniqid() ?> </title>
</head>
<body>
<?php 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$nbr=$_POST['nbr'];
$adresse=$_POST['adr'];
$type=$_POST['type'];
$cin=$_POST['cin'];
if (isset($_POST['c1']))
$ketchup="ketchup";
else
$ketchup="";
if (isset($_POST['c2']))
$salade="salade";
else
$salade="";

if (isset($_POST['c3']))
$mayo="mayo";
else
$mayo="";
$total=4*$nbr;
$remise="";
if ($nbr>10){
$total=$total*0.9;
$remise="avec un remise de 10%";
}

?>
    <h3> nom et prenom :<?php echo $nom.' '.$prenom ?> </h3>
    <h3> cin :<?php echo $cin ?> </h3>
    <h3> nombre de sandwitch :<?php echo $nbr ?> </h3>
    <h3> adresse:<?php echo $adresse ?> </h3>
    <h3> type :<?php echo $type ?> </h3>
    <h3> les ingrédients à ajouter :<?php echo $ketchup.' '.$salade.' '.$mayo ?> </h3>
    <h3> total :<?php echo $total.' '.$remise ?> </h3>
   
    

    
</body>
</html>