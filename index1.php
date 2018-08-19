
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
            max-width: 50%;
            text-align: center;
        }
        div{
            text-align: left; 
            max-width: 40%; 
            border:1px solid #cccc;
            margin:auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #cccc;
            box-shadow:0 0 15px black;
        }
    </style>
</head>

<body>
<section>
<form action="" name="form1" method="get" enctype="multipart/form-data">
<p>Input name of the city</p>
<p><input type="text"  name="city" /></p>
<p><input type="submit" name="OK" value="OK" /></p>
</form>
<?php
//echo test;
if (!isset($_GET['OK']) == NULL)
{
$city = $_GET['city'];
echo "<pre>";
//$city = 'moscow';
$myuid = '72cc62f4121c0cd802c8064ada77e9d8';
$weather = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=".$myuid."");
//$weather = file_get_contents('weather.txt');
//print_r($weather);
//file_put_contents('weather.txt', $weather);
$weather = json_decode($weather, true);
//print_r($weather);
echo "</pre>";
if ($weather['name']){
?>

    <div>
    <h2>The weather in <?=$weather['name']?></h2>
    <p>City- <?=$weather['name']?></p>
    <p>Temperature - <?=$weather['main']['temp'] - 273.15?> °C</p>
    <p>Weather - <?=$weather['weather'][0]['main']?></p>
    <p>Pressure - <?=$weather['main']['pressure']?> Pa</p>
    <p>Pressure - <?=$weather['wind']['speed']?> meter/sec</p>
    <p>Sunrise - <?=date('Y-M-d H:m:s',$weather['sys']['sunrise'])?></p>
    <p>Sunset - <?=date('Y-M-d H:m:s',$weather['sys']['sunset'])?></p></div>
    

<?php } 
else echo "<div><p>Please input correct name of city </p></div>";
}
 ?>
 
<section>
</body>
</html>