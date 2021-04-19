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

function total($getal1, $getal2, $getal3 ){
    echo "Als ik de getallen $getal1, $getal2 en $getal3 bij elkaar optel, is de uitkomst ";
    return $getal1 + $getal2 + $getal3;
}
echo total(4,2,9);
echo "<br>";
function total2($getal4,$getal5,$getal6){
    echo "Als ik de getallen $getal4, $getal5 en $getal6 bij elkaar optel, is de uitkomst ";
    return $getal4 + $getal5 + $getal6;
}

echo total(1,2,3);

?>
</body>
</html>