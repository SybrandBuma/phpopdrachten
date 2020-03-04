<?php
/**
 * User: Sybrand Baltussen
 * Date: 05/02/2020
 * Time: 10:56 PM
 * File: opdracht 3.1.php
 */
?>


<html>
<link href="css/stylesheet.css">
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $evenement = "Elfstedentocht";
    $evenementfries = "Alvestedetocht";
    $kilometer = 200;
    $tocht = "schaatstocht";
    $ijs = "natuurijs";
    $vereninging = "Koninklijke Vereniging Elf Steden";
    $stad = "Leeuwarden";
    $provincie = "Friesland";
    $aantalmaal = 15;
    $jaar = 1909;
    $aantalkeer = 1;

    $verhaal = "De ".$evenement." (Fries: ".$evenementfries.") is een ".$kilometer.
        " kilometer <br> lange ".$tocht." over "
        .$text4."die wordt georganiseerd door <br> de ".$text5.". "
        .$text6.", <br>de hoofdstad van ".$text7.
        ", is start- en aankomstplaats. De <br>".$text1.
        " is inmiddels ".$text8. " maal verreden en werd voor het <br> eerst in "
        .$text9." gereden en wordt maximaal ".$text10." keer per winter <br> gehouden. <br>";
    echo $verhaal;
    $verhaal2 =  "De $text1 (Fries: $text2) is een $text11<br>
        kilometer lange $text3 over $text4 die wordt<br>
        georganiseerd door de $text5. $text6, de hoofdstad van $text7, is start- en<br>
        aankomstplaats. De $text1 is inmiddels $text8 maal<br>
        verreden en werd voor het eerst in $text9 gereden en wordt<br>
        maximaal $text10 keer per winter gehouden.<br>";
    echo $verhaal2;
    ?>
</main>
<a href="../../index.php">terug</a>
</body>
</html>
