<?php
require "db.func.php";
connect();
$day = $_GET['day'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "$day Entry"; ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="js/date.js" defer></script>
</head>
<body>
    <header class="container">
        <nav>
            <ul>
                <li><a href="../projects.html">Home</a></li>
                <li><a href="index.php">Overview</a></li>
                <li><a href="<?php getLinkWeek($day)?>">Week</a></li>        
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Devotional Journal</h1>
            <section class="history">
                <div class="entry">
                    <div class="entry-banner">
                    
                    
                        <div class="entry-col" data-day="" id="currentday"></div>
                        <div class="entry-col" data-date="" id="currentdate"></div>
                    </div>        
                    <div class="entry-row">
                        <div class='entry-col'>
                            <article class='daily'><h5>Memory Verse</h5>
                                <div class='txt-lft'>
                                    <?php getMemVerse($day); ?>
                                </div>
                            </article>
                            <article class='daily'><h5>Gratitude</h5>
                                <div class='txt-lft'>
                                    <?php getGratitude($day); ?>
                                </div>
                            </article>
                            <article class='daily'><h5>Prayer</h5>
                                <div class='txt-lft'>
                                    <?php getPrayer($day); ?>
                                </div>
                            </article>
                            <article class='daily'><h5>Intent</h5>
                                <div class='txt-lft'>
                                    <?php getIntent($day); ?>
                                </div>
                            </article>
                        </div>
                        <div class='entry-col'>
                            <article class='daily'><h5>Kairos</h5>
                                <div class='txt-lft'>
                                    <?php getKairos($day); ?>
                                </div>
                            </article>
                            <article class='daily'><h5>Reflection</h5>
                                <div class='txt-lft'>
                                    <?php getReflection($day); ?>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="entry-banner">
                    </div>
                    <div class="spacer"></div> 
                </div>
            </section>
            <section class="newentry">
            <a href="entry.php" id="aEntry">New Entry</a>
        </section>  
    </div>
</body>
</html>