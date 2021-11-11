<?php
require "db.func.php";
connect();
$week = $_GET['week'];
echo "<script>console.log('week: $week')</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <header class="container">
        <nav>
            <ul>
                <li><a href="../projects.html">Home</a></li>
                <li><a href="index.php">Overview</a></li>         
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Devotional Journal</h1>
        <section class="history">
            <h3>Daily Entries</h3>
            <table class="journal">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Reflection</th>
                    </tr>
                </thead>
                <tbody>
                    <?php getDays($week); ?>
                </tbody>
            </table>
        </section>
        <section class="newentry">
            <a href="entry.php" id="aEntry">New Entry</a>
        </section>  
    </div>
</body>

</html>