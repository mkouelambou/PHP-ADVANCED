<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$leeftijd = 0;
for($leeftijd = 0; $leeftijd < 18;){
    echo "<li><ul> Ik ben $leeftijd jaar oud, dus ik mag nog niet stemmen</li></ul>";
    $leeftijd++;
}
    echo "<li><ul> Ik ben 18 jaar oud, dus ik heb stemrecht!</li></ul>";
?>   
</body>
</html>