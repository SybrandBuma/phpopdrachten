<?php
/**
 * Created by PhpStorm.
 * User: sybrand
 * Date: 5/24/2020
 * Time: 11:00 PM
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include '../../includes/header.php' ?>
<div id="wrapper">

    <?php
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
    }
    catch(PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo "<p>".$e->getMessage()."</p>";
        die();
    }

    echo "<p>Database connectie gelukt</p>";

    $query = "SELECT * FROM joke
";

    try
    {
        $result = $pdo->query($query);
    }
    catch(PDOException $error)
    {
        echo "<p>Error:".$error->getMessage()."</p>";
    }


    echo "<table>";
    echo "
            <tr>
                <th>ID</th>
                <th>joke text</th>
                <th>jokeclue</th>
                <th>jokedate</th>
            </tr>
            <tr>
            </tr>";
    $counter = 0;
    while($row = $result->fetch(PDO:: FETCH_ASSOC))
    {
        $counter++;
        echo
            "
                        <tr>
                            <td>$counter</td>
                            <td>".$row['joketext'] ."</td>
                            <td>".$row['jokeclou']."</td>
                            <td>".$row['jokedate']."</td>
                        </tr>
                    ";
    }
    echo "</table>";

    ?>

    <a href="../../index.php">Terug</a>
</div>
<div id='footer'>
    <?php include '../../includes/variabelen.php'?>
</div>
</body>
</html>