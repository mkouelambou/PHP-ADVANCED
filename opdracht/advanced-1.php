<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
    <form action="advanced-2.php" method="POST">
        <ul><label for="padding">cel-dikte (px)</label>
        <input type="number" name="padding" placeholder="cel-dikte"></ul>
 
        <ul><label for="tabel">tabelrand dikte (px)</label>
        <input type="number" name="tabel" placeholder="tabelrand dikte"></ul>
 
        <ul><label for="textkleur">kies een kleur</label>
        <select id="textkleur" name="textkleur" size="1">
            <?php
 
                $textkleur = array("red", "blue", "green", "black", "brown", "purple","pink","grey");
                foreach ($textkleur as $key => $value) {
                    echo "<option value=".$value.">$value</option>";
                }
            ?></select></ul>
 
        <ul><label for="kleur">kies een achtergrondkleur</label>
        <select id="kleur" name="kleur" size="1">
            <?php
 
                $kleur = array("red", "blue", "green", "black", "brown", "purple","pink","grey");
                    foreach ($kleur as $key => $value) {
                    echo "<option value=".$value.">$value</option>";
                }
            ?></select></ul>
        <ul><input type="submit"></ul>
    </div>
</body>
</html>