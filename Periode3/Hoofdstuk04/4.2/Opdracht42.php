<?php
/**
 * Created by PhpStorm.
 * User: sybrand
 * Date: 2/20/2020
 * Time: 10:52 AM
 */
include '../../includes/variabelen.php'
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8" />
        <title>Opdrachten PHP periode 3</title>
    </head>
    <body>
    <?php include '../../includes/header.php' ?>
    <div id="wrapper">
        <?php
        /**
         * Nederlands = Ende, Jan-Chris van den
         * Engels = Mitrovich, Sandra
         * PHP = Saebu, Abu
         * JavaScript = Evers, Remco
         * ASP = Meer, Martijn van
         * Modeleren = Bijnen, Wim van
         * Database SQL = Wetering, Martijn van de
         * Digitale vaardigheden gevorderd = Pielage, Larissa
         * Rekenen = Wetering, Martijn van de
         * Loopbaan & Burgerschap = Ruiter, Paula de
         * Computertekenen = Berg, Pieter van den
         */



        $courseName = 'Engels';
        $teacherName = '';

        switch($courseName){
            case "Nederlands":
                $teacherName = 'Ende, Jan-Chris van den';
                break;
            case "Engels":
                $teacherName = 'Mitrovic';
                break;
            case "PHP":
                $teacherName = 'Saebu, Abu';
                break;
            case "JavaScript":
                $teacherName = 'Evers, Remco';
                break;
            case "ASP":
                $teacherName = 'Gijsbrechts, Ralph';
                break;
            case "Modelleren":
                $teacherName = 'Bijnen, Wim van';
                break;
            case "Database SQL":
                $teacherName = 'Wetering, Martijn van de';
                break;
            case "Digitale vaardigheden gevorderd":
                $teacherName = 'Pielage, Larissa';
                break;
            case "Rekenen":
                $teacherName = 'Wetering, Martijn van de';
                break;
            case "Loopbaan & Burgerschap":
                $teacherName = 'Visser, Thomas';
                break;
            case "Computertekenen":
                $teacherName = 'Berg, Pieter van den';
                break;
        }

        echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
        ?>
    </div>
    <div id='footer'>
        <?php include '../../includes/footer.php'?>
    </div>
    </body>
    </html>

