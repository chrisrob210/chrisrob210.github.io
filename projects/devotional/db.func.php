<?php
function connect(){
    $mysqli = new mysqli("sql308.epizy.com", "epiz_26725021", "X17Lpi3XKXDGD", "epiz_26725021_devotional");  
    //mysqli(address, username, password, database)
    //@DEPLOY info: makesure to use this >> mysqli("sql308.epizy.com", "epiz_26725021", "X17Lpi3XKXDGD", "epiz_26725021_devotional");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $mysqli;
}

/* retrieves weeks from database: devotional, table: week */
function getWeeks(){
    
    // NOTES: Try changing to count weeks without requiring column "weeknumber"
    //
    $mysqli = connect();

    $query = "SELECT WeekDate AS Date, Count(Today) AS 'Entries'  FROM day  GROUP BY Date ORDER BY 'Date' ASC";
    $result = $mysqli->query($query);

    while($row = $result->fetch_array())
    {
    $rows[] = $row;
    }

    $rowcount = 1;
    foreach($rows as $row)
    {
    if ($row['Entries'] == null){$entries = "None";}
    else $entries = $row['Entries'];
    echo "<tr data-date =" . $row['Date'] . " onClick=location.href='week.php?week='+this.dataset.date><td>".$row['Date']."</td><td>".$entries."</td>";
    $rowcount++;
    }

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();

}

/* Retrieves the days of a week from database: devotional, table: day */
function getDays($week){
    
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT Today, WeekDate, Day, Reflection FROM day WHERE WeekDate = '$week' ORDER by Today DESC";
    $result = $mysqli->query($query);

    /* create and populate an array with query $result */
    while($row = $result->fetch_array())
    {
    $rows[] = $row;
    }

    /* echo the rows to table */
    foreach($rows as $row)
    {
    if ($row['Reflection'] == null){$reflect = "No";}
    else {$reflect = "yes";}
    echo "<tr data-date =" . $row['Today'] . " onClick=location.href='day.php?day='+this.dataset.date><td>".$row['Today']."</td><td>".$row['Day']."</td><td>".$reflect."</td>";
    }

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();
}

function getDayOfWeek($day){
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT Day FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();
    
    echo $row[0];
    
    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();
}

//create a href link to week.php?week=
function getLinkWeek($day){
    
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT WeekDate FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();
    
    echo "week.php?week=" . $row[0];
    
    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();
}

/*---------------------*/
/* GET ENTRY FUNCTIONS */
/*---------------------*/

function getMemVerse($day){
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();

    //check if null and format accordingly
    if ($row[3] != null){ echo nl2br($row[3]); }
    else { echo " None "; }
}

function getGratitude($day){
    
    
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();
    
    if ($row[4] != null){ echo nl2br($row[4]); } 
    else { echo " None "; }
}

function getPrayer($day){
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();
    
    if ($row[5] != null){ echo nl2br($row[5]); } 
    else { echo " None "; }
}

function getIntent($day){

    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();

    if ($row[6] !=null){ echo nl2br($row[6]); }
    else {echo " None "; }
}

function getKairos($day){
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();

    if ($row[7] != null){ echo nl2br($row[7]); }
    else {echo " None "; }
}
    
function getReflection($day){
    $mysqli = connect();

    /* create and send query */
    $query = "SELECT * FROM day WHERE Today = '$day'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    /* free result set */
    $result->close();

    /* close connection */
    $mysqli->close();

     if ($row[8] !=null){ echo $row[8]; }
    else {echo " None "; }
}
/* LIST OF COLUMNS: Memory Verse, Gratitude, Prayer, Intent, Kairos, Reflection */



/*---------------------*/
/* NEW ENTRY FUNCTIONS */
/*---------------------*/



/*--------------------------*/
/* CREATE DATABASE & TABLES */
/*--------------------------*/

//check if database exists

//create database

//create tables

?>