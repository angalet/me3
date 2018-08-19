<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Задание №2</title>
    <style>
     body{
            font-family: Arial, Helvetica, sans-serif;
        }
        section{
            margin:auto;
            max-width: 70%;
            text-align: center;
        }
        div{
            text-align: left;  
        }
    </style>
</head>

<body>
<section>

<?php
$animals = array();
$animals = array(
    "africa" => array(
                    "Panthera leo", 
                    "Crocuta crocuta",
                    "Heterocephalus glaber",
                    "Elephantidae"
                    ),
    "noth_america" => array(
                        "Mammut americanum",
                        "Smilodon fatalis"
                          ),
    "australia" => array(
                        "Vombatidae",
                        "Vombatus ursinus",
                        "Ornithorhynchus anatinus",
                        "Thylacinus cynocephalus",
                        "Thylacosmilus Riggs"
                        ),
    "Antarctica" => array(
                        "Aptenodytes forsteri",
                        "Cryolophosaurus ellioti"
    )
    ); 
    echo "<h2>Изначальный массив </h2><br>";
    $country = array();
    $animal = array();
    $part_animal = array();
    ?><div><?php
    foreach($animals as $array => $value)
    {
        foreach($value as  $value)
        {
            $animal[]  = $value;
            $part_animal = explode(" ",$value);
            echo "Континент - $array, животное # - $value <br>";
            if (!$part_animal[1] == NULL)
            {
            $part_animal_first[] = $part_animal[0];
            $part_animal_second[] = $part_animal[1];
            }
        }
    }
    ?></div><?php
echo "<pre>";
shuffle($part_animal_first);
shuffle($part_animal_second);
$wonderful_animal = array();
for ($i = count($part_animal_first); $i > 0; $i--){
$rand = rand(0,$i);
$a = array_pop($part_animal_first);
$b = array_pop($part_animal_second);
$c = $a." ".$b;
$wonderful_animal[] = $c;
}
echo "</pre>";
echo "<h2>Перемешанный массив </h2><br>";
?><div><?php
foreach ($wonderful_animal as $wonderful_animal){
      echo "Фантазийное животное # -  $wonderful_animal <br>";
}
?></div><?php
?>
<section>
</body>
</html>
