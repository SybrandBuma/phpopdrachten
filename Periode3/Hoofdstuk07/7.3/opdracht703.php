<?php
/**
 * User: Sybrand Baltussen
 * Date: 22/5/2020
 * Time: 11:06 PM
 * Bestand: opdracht73.php
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="../../css/style.css">
    <meta charset="utf-8" />
    <title>Opdrachten PHP periode 3</title>
</head>
<style>
    table, tr, th, td
    {
        border: solid 1px;
    }
</style>
<body>
<?php include('../../includes/header.php') ?>
<div id="wrapper">
    <h2>Opdracht 7.3</h2>
    <form action="opdracht703.php" method="GET">
        <label><b>Zoekterm:</b></label>
        <input type="search" name="tbSearch">
        <input type="submit" value="Zoeken">
    <hr>
    <?php
        include("functions.php");

        if(isset($_GET['tbSearch']) == true)
        {
            $query = "SELECT * FROM joke WHERE joketext LIKE '%".$_GET['tbSearch']."%'";
        }
        else
        {
            $query = "SELECT * FROM joke";
        }

        startConnection();
        $result = executeQuery($query);

        echo "<p>$query</p>";
        echo "<table>";
        echo "
                <tr>
                    <th>ID</th>
                    <th>joketext</th>
                    <th>jokeclue</th>
                    <th>jokedate</th>
                </tr>
                <tr></tr>";
        $counter = 0;
        if(isset($_GET['tbSearch']) == true)
        {
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $counter++;
                echo
                    "
                <tr>
                    <td>$counter</td>
                    <td>" . $row['joketext'] . "</td>
                    <td>".$row['jokeclou']."</td>
                    <td>" . $row['jokedate'] . "</td>
                </tr>
            ";
            }
        }
        else
        {
            while ($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                $counter++;
                echo
                    "
                <tr>
                    <td>$counter</td>
                    <td>" . $row['joketext'] . "</td>
                    <td>".$row['jokeclou']."</td>
                    <td>" . $row['jokedate'] . "</td>
                </tr>
            ";
            }
        }
        echo "</table>";
    ?>
    </form>
</div>
<a href="../../index.php">Terug</a>
<?php include('../../includes/footer.php'); ?>
</body>
</html>
