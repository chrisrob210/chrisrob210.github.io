
<?php
require "db.func.php";

$date = htmlspecialchars($_GET['date']);
$weekOf = htmlspecialchars($_GET['weekof']);
$day = htmlspecialchars($_GET['day']);
$memverse = nl2br(htmlentities($_GET['memoryverse']));
$gratitude = nl2br(htmlentities($_GET['gratitude']));
$prayer = nl2br(htmlentities($_GET['prayer']));
$intent = nl2br(htmlentities($_GET['intent']));
$kairos = nl2br(htmlentities($_GET['kairos']));
$reflection = nl2br(htmlentities($_GET['reflection']));

echo "Week Of: " . $weekOf . "<br>";
echo "Date: " . $date . "<br>";
echo "Day: " . $day . "<br>";
echo "Verse: " . $memverse . "<br>";
echo "Gratitude: " . $gratitude . "<br>";
echo "Prayer: " . $prayer . "<br>";
echo "Intent: " . $intent . "<br>";
echo "Kairos: " . $kairos . "<br>";
echo "Reflection: " . $reflection . "<br>";

$mysqli = connect();

$query = "SELECT WeekDate FROM week WHERE WeekDate = '$weekOf'";
$result = $mysqli->query($query);


if ($result->num_rows == null){
    echo "<script>console.log('Entry Does Not Exist!')</script>";
    $query = "INSERT INTO `week` (`WeekDate`) VALUES ('$weekOf')";
    $result = $mysqli->query($query);
        /* free result set */
       // $result->close();

        
}
/* close connection */
$mysqli->close();

$mysqli = connect();
    
$query = "INSERT INTO `day` (`Today`, `WeekDate`, `Day`, `MemoryVerse`, `Gratitude`, `Prayer`, `Intent`, `Kairos`, `Reflection`) VALUES ('$date', '$weekOf', '$day', '$memverse', '$gratitude', '$prayer', '$intent', '$kairos', '$reflection');";
$result = $mysqli->query($query);
/* free result set */
//$result->close();

/* close connection */
$mysqli->close();
?>