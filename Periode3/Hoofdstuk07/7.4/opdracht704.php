<?php
/**
 * User: Sybrand Baltussen
 * Date: 27/5/2020
 * Time: 12:06 AM
 * Bestand: opdracht704.php
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 4</title>
</head>
<body>
<?php include("../../includes/header.php") ?>
<?php
    include("../7.3/functions.php");

    //POST Request for new inserts
    if(isset($_POST["jokeText"]) == true && isset($_POST["jokeclou"]) == true)
    {
        //Variables for textboxes
        $jokeText = $_POST["jokeText"];
        $jokeclou = $_POST["jokeclou"];

        $query = "INSERT INTO joke (joketext, jokeclou, jokedate) VALUES ('$jokeText', '$jokeclou', GETDATE())";

        startConnection();
        executeQueryViaExec($query);
    }
    else
    {
        //if joketext and jokeclue are not a variable, make it NULL
        $jokeText = NULL;
        $jokeclou = NULL;
    }

    //Checks if post request is made and redirects to new page
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('location: insert.php');
    }
?>
<div id="wrapper">
    <h2>Nieuwe grappen toevoegen</h2>
    <form action="opdracht704.php" method="POST">
        <label>Joketext</label>
        <input type="text" name="jokeText">
        <br>
        <label>Jokeclou</label>
        <input type="text" name="jokeclou">
        <br>
        <input type="submit" value="Verstuur">
    </form>
</div>
    <a href="../../index.php">Terug</a>
<?php include("../../includes/footer.php"); ?>
</body>
</html>