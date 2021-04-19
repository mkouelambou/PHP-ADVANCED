<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
</body>
</html>
<?php
$kleur = array('red', 'blue', 'green');

function schrijfkleur($kleur,$naam){
    
    echo "<h1 style='color:".$kleur.";'>Mijn naam is Mike $naam</h1>";
}
schrijfkleur($kleur[0], "red");
schrijfkleur($kleur[1], "blue");
schrijfkleur($kleur[2], "green");
?>