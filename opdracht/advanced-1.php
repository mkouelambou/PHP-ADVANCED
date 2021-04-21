<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class ="content"><center>
<form action = "advaned-2.php" method = "POST">
    <table border = "0">
<div>
<label for="colors">Achtergrondkleur</label>
    <select name="colors" id="colors">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
</select>
</div>
<div>
<label for="colors">Textkleur</label>
    <select name="colors" id="colors">
    <option value="red">Red</option>
    <option value="blue">Blue</option>
    <option value="green">Green</option>
    <option value="black">Black</option>
    <option value="brown">Brown</option>
</select>
</div>
<?php
    $kleuren = array("red", "blue", "green", "black", "brown")
    foreach($kleuren as $kleur){
        echo "<ul><li> $kleur </ul></li>";
    }
    ?>
</body>
</html>