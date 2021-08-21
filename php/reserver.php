<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

        <link rel="stylesheet" href="../css/style.css" />

        <link rel="icon" href="../files/icons/favicon.ico" />

        <title>Partage</title>

        <?php 
        
        error_reporting(0);
        session_start();

        include("mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        ?>

    </head>

    <body>

        <iframe id="GoogleCalendar" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=Z25lM2szM3NzbGtndWc3cm9zYzY4MHBsZDBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%233F51B5&amp;showTitle=0&amp;showDate=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;title=Partage%20T-DRIS" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </body>
        <script src="../js/onclick.js"></script>
    </html>