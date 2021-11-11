<?php 

require "db.func.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Entry</title>
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
            <h3>New Entry</h3>
            <form class="entry" action="db.add.php">
            <div class="entry-banner">
                    
                    
                    <div class="entry-col" data-day="" id="currentday"></div>
                    <div class="entry-col" data-date="" id="currentdate"></div>
                </div>           
                <div class="entry-row">
                    <div class='entry-col'>
                    <article class='daily'>
                            <input type="text" id="hiddenweekof" name="weekof" hidden>
                            <input type="text" id="hiddendate" name="date" hidden>
                            <input type="text" id="hiddenday" name="day" hidden>
                            
                            <h5><label for="memoryverse">Memory Verse</label></h5>
                            <div class='txt-lft' for="memoryverse">
                                <textarea name="memoryverse" id="memoryverse" class="input-txt-m"></textarea>  
                            </div></label>
                        </article>
                        <article class='daily'>
                            <h5><label for="gratitude">Gratitude</label></h5>
                            <div class='txt-lft'>
                                <textarea name="gratitude" id="gratitude" class="input-txt-m"></textarea> 
                            </div>
                        </article>
                        <article class='daily'>
                            <h5>Prayer</h5>
                            <div class='txt-lft'>
                                <textarea name="prayer" id="prayer" class="input-txt-m"></textarea>  
                            </div>
                        </article>
                        <article class='daily'>
                            <h5>Intent</h5>
                            <div class='txt-lft'> 
                                <textarea name="intent" id="intent" class="input-txt-m"></textarea> 
                            </div>
                        </article>
                    </div>
                    <div class='entry-col'>
                        <article class='daily'>
                            <h5>Kairos</h5>
                            <div class='txt-lft'>
                                <textarea name="kairos" id="kairos" class="input-txt-lrg"></textarea>
                            </div>
                        </article>
                        <article class='daily'>
                            <h5>Reflection</h5>
                            <div class='txt-lft'> 
                                <textarea name="reflection" id="reflection" class="input-txt-m"></textarea>  
                            </div>
                        </article>
                        <article class='daily'>
                            
                        </article>
                    </div>             
                </div> 
                <div class="entry-banner">
                    <div class="entry-col"><button type="button" class="btn-journal" onClick="window.location = 'http://chriserinoreviews.great-site.net/devotional/index.php'">Cancel</button>
                    </div>
                    <div class="entry-col"><button type="submit" class="btn-journal">Submit</button></div>
                </div>
                <div class="spacer"></div>    
            </form>
            
        </section>
    </div>
</body>
</html>