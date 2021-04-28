<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color: <?php echo $_POST["kleur"]?>;
            color: <?php echo $_POST["textkleur"]?>;
            padding: <?php echo $_POST["padding"]?>;
            display: flex;
            justify-content: center;
            align-items:center;
        }
        table{
            width: 350px;
            height: 450px;
            border: <?php echo $_POST["tabel"]?>px solid black;
            background-color: white;
        }
    </style>
</head>
<body>
<?php
    $gegevens = array("Naam" => "Mike Koue-Lambou",
                "Leeftijd" => 17,
                "Klas" => "0C",
                "Muziek" => "Rap",
                "Woonplaats" => "Amsterdam",
                "Eten" => "Pizza, Friet");
               echo "<table class=table height=250px width=200px>"; 
            foreach($gegevens as $key => $value){
              maakRij($key,$value);
            }
            function maakRij($key,$value){
                echo"<tr>";
                echo"<td>$key</td>";
                echo"<td>$value</td>";
                echo"</tr>";
            }
            echo "</table>";
    ?>
</body>
</html>