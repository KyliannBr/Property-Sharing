<?php

    session_start();

    include("mysqlinfo.php");
    
    // Create connection
    $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-j H:i:s');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO inscription (username, password) VALUES ('$username', '$password')";
    
    
    ///     Verification Login      ///     

    $sql2 = "SELECT username, password FROM inscription";
    $sql3 = "INSERT INTO connexion (username, password, dateheure) VALUES ('$username', '$password', '$date')";

    $query = $mysqli->query($sql2);

    $arraylogin = Array();
    while($result = $query->fetch_assoc()){
        $arraylogin[] =$result['username'];
        $arraypassword[] =$result['password'];
    }




    if (in_array($password, $arraypassword) && in_array($username, $arraylogin)){
        echo '<meta http-equiv="refresh" content=0;URL="connexion.php">';
        echo '<body onLoad="alert(\'Ce compte existe deja\')">'; 
    } else if (in_array($username, $arraylogin)){
        echo '<body onLoad="alert(\'Ce nom d utilisateur existe deja\')">'; 
        echo '<meta http-equiv="refresh" content=0;URL="inscription.php">';
        
    } else if ((in_array($username, $arraylogin) === false)){
        $_SESSION['connecter'] = "TRUE";
        $_SESSION['nomCompte'] = $username;
        header("Location: ../index.php");
        $query3 = $mysqli->query($sql);
        $query2 = $mysqli->query($sql3);
    }









?>