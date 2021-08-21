<?php

session_start();

        include("mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

    $username = $_POST["username"];
    $password = $_POST["password"];

    date_default_timezone_set('Europe/Paris');
    $date = date('d-m-Y H:i:s');

    $year = date('Y');
    $month = date('m');
    $day = date('d');

    $sql = "SELECT username, password FROM inscription";
    $sql2 = "INSERT INTO connexion (username, password, dateheure) VALUES ('$username', '$password', '$date')";

    $query = $mysqli->query($sql);

    $array = Array();
    while($result = $query->fetch_assoc()){
        $arrayusername[] =$result['username'];
        $arraypassword[] =$result['password'];
    }



    if (in_array($username, $arrayusername) && in_array($password, $arraypassword)){
        $_SESSION["connecter"] = 'TRUE';
        $_SESSION["nomCompte"] = "$username";
        header("Location: ../index.php");
        $query2 = $mysqli->query($sql2);
        
    } else {
        echo '<meta http-equiv="refresh" content=0;URL="connexion.php">';
        echo '<body  onLoad="alert(\'Login ou Mot de Passe incorrect\')">';
    }

    if (($username == "admin" || $username == "root") && ($password == "admin" || $password == "root")){
        header("Location: admin.php");
    }


?>