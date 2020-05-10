<?php
/**
 * Created by PhpStorm.
 * User: Abu
 * Date: 2/24/2018
 * Time: 10:08 PM
 */
?>
<?php
    $year = date('Y');
    echo $year;
?>

<?php
    $name = "Sybrand Baltussen";
    echo $name;
?>
<?php echo "<a href='../../index.php'> Terug </a>"?>

<?php
date_default_timezone_set("europe/Amstedam");
$time = date("H");
echo "$time ";
if($time>5 && $time <=12)
{
    echo "Goedenmorgen ";
}
elseif ($time< 17 && $time >= 12)
{
    echo "Goedenmiddag ";
}
elseif ($time< 24 && $time >= 17)
{
    echo "Goedenavond ";
}
elseif ($time< 5 && $time >= 0)
{
    echo "Goedennacht ";
}
?>




