<?php
$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
foreach($student as $key => $gegevens) {
  echo "De lengte van $key is $gegevens <br>";
}
?>