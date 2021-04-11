<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
<em>Vul je klas in:</em>
<input type="text" size="20" maxlength="40" name="klas">
<input type="submit" value="Verzenden">
</form>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach($klassen as $klas){
        echo "<ul><li> $klas </ul></li>";  
    }
?>  
</body>
</html>