<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../css/style.css" />

        <link rel="icon" href="../files/icons/favicon.ico" />

        <title>Partage</title>

        <?php 
        
        session_start();

        include("mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        ?>

</head>

<body class="add">

    <div class="topnav" id="Topnav" style="display: flex; justify-content: center;">
        <a href="../index.php" id="TopnavAjouter">HOME</a>
    </div>

    <div class="left">
        <a href="addMobilier.php">Mobillier</a>
    </div>

    <div class="diviseur"></div>

    <div class="right">
        <a href="addImmobilier.php">Immobillier</a>
        
    </div>

</body>

<script src="js/onclick.js"></script>

</html>