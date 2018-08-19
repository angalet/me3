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
            //echo $part_animal[0]."<br>";
            //echo $part_animal[1]."<br>";
            if (!$part_animal[1] == NULL)
            {
            $part_animal_first[] = $part_animal[0];
            $part_animal_second[] = $part_animal[1];
            }
        }
    }
    ?></div><?php
    //$new_animals_ = array();
    //$new_animals_ = array_merge($animals["africa"], $animals["noth_america"]);
echo "<pre>";
//echo "Начальный <br>";
//print_r($animals);
//echo "Итоговый массив <br>";
//print_r($animal);
//print_r($part_animal_first);
//sort($part_animal_first);
shuffle($part_animal_first);
shuffle($part_animal_second);
//echo $part_animal_first[0] . "\n";
$wonderful_animal = array();
for ($i = count($part_animal_first); $i > 0; $i--){
$rand = rand(0,$i);
//echo $rand."<br>";
$a = array_pop($part_animal_first);
$b = array_pop($part_animal_second);
$c = $a." ".$b;
//echo $c."<br>";
$wonderful_animal[] = $c;
}

//print_r($part_animal_first);
//print_r($part_animal_second);

//print_r($wonderful_animal);
//print_r($new_animals_);
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