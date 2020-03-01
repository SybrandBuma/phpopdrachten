<?php
/**
 * Created by PhpStorm.
 * User: sybrand
 * Date: 2/20/2020
 * Time: 10:52 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
</head>
<body>
<?php include '../../includes/header.php' ?>
<div id="wrapper">
    <?php
    //deel 1
    $trafficLightColor = "groen";
    $ambulanceComing = false;
    $driveOn = true;

    if($trafficLightColor == "groen" && $ambulanceComing == false)
    {
        $driveOn = true;
        echo "U mag door rijden<br>";
    }
    else
    {
        $driveOn = false;
        echo "U moet stoppen<br>";
    }
    ?>
    <?php
    // deel 2
    $countryName = "Bulgarije";
    $currentAge = 20;
    $sentence1 = "Je mag hier sterke alcohol kopen";
    $sentence2 = "Je mag hier zwakke alcohol kopen";
    $sentence3 = "Je mag hier geen alcohol kopen";
    $text = "";

    echo "Je woont in $countryName en bent $currentAge jaar<br>";

    if ($countryName == "Belgie" && $currentAge >= 18)
    {
        echo $text = $sentence1;
    }
    elseif ($countryName == "Belgie" && $currentAge >= 20)
    {
        echo $text = $sentence2;
    }
    elseif ($countryName == "Belgie" && $currentAge <= 16)
    {
        echo $text = $sentence3;
    }
    elseif($countryName == "Bulgarije" && $currentAge >= 18)
    {
        echo $text = "$sentence1 en $sentence2";
    }
    elseif ($countryName == "Bulgarije" && $currentAge < 18)
    {
        echo $text = $sentence3;
    }
    elseif($countryName == "Cyprus" && $currentAge >= 17)
    {
        echo $text = "$sentence1 en $sentence2";
    }
    elseif ($countryName == "Cyprus" && $currentAge < 17)
    {
        echo $text = $sentence3;
    }
    elseif($countryName == "Nederland" && $currentAge >= 18)
    {
        echo $text = "$sentence1 en $sentence2" ;
    }
    elseif ($countryName == "Nederland" && $currentAge < 18)
    {
        echo $text = $sentence3;
    }
    elseif($countryName == "Zweden" && $currentAge >= 20)
    {
        echo $text = $sentence1;
    }
    elseif ($countryName == "Zweden" && $currentAge >= 18)
    {
        echo $text = $sentence2;
    }
    elseif ($countryName == "Zweden" && $currentAge < 18)
    {
        echo $text = $sentence3;
    }
    ?>

    <a href="../index.php">Terug</a>
</div>
<div id='footer'>
    <?php include '../../includes/variabelen.php'?>
</div>
</body>
</html>
