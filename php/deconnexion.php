<?php 
        
        session_start();

        include("mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $_SESSION["connecter"] = "FALSE";
        header("Location: ../index.php");

        ?>