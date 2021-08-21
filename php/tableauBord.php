<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css" />

    <link rel="icon" href="../files/icons/favicon.ico" />

    <title>Partage</title>

    <script type="text/javascript" src="../js/onclick.js"></script>

    <style>
        .topnav {
            display: flex;
            justify-content: center;
            text-align: center;
            z-index: 999;
            width: 100vw;
            position: fixed;
            overflow: hidden;
            background-color: #333;
            transition: 0.4s;
            height: 7vh;
        }

        #TopnavAjouter {
            transition: 0.4s;
            height: 7vh;
            padding: 2.5vh 15vw;
            font-size: 17px;
        }

        .topnav a {
            transition: 0.4s;
            height: 7vh;
            padding: 2.5vh 15vw;
            font-size: 17px;
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
            text-transform: capitalize;
            letter-spacing: .3vw;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: var(--active);
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        ul {
            list-style-type: none;
            margin: 7vh 0 0 0;;
            padding: 0;
            width: 15vw;
            background-color: #333;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            text-align: center;
            display: block;
            color: #ddd;
            padding: 2vh;
            text-decoration: none;
        }

        li a.active {
            background-color: #ddd;
            color: black;
        }

        li a:hover:not(.active) {
            background-color: #ddd;
            color: black;
        }
    </style>

    <?php 
        
        session_start();
        $_SESSION["connecter"] = "TRUE";

        include("mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        ?>

    <?php  ?>

</head>

<body>

    <div class="topnav" id="Topnav">
        <a href="../index.php" id="TopnavAjouter">HOME</a>
    </div>

        <ul>
            <li><a href="#" onclick="mesReservations();">Mes Réservations</a></li>
            <li><a href ="#" onclick="mesEntites();">Mes Entités</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>

    <div style="margin-left:15%;padding:0 1vw;height: max-content; padding-top: 8vh;">
        <iframe title="iframe" src="mesReservations.php" id="iframe" frameborder="none">
        
    </div>

</body>



</html>