<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

        <link rel="stylesheet" href="css/style.css" />

        <link rel="icon" href="files/icons/favicon.ico" />

        <title>Partage</title>

        <?php 
        
        error_reporting(0);
        session_start();

        include("php/mysqlinfo.php");

        $mysqli = new mysqli($servername, $usernameDB, $passwordDB, $myDB);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM identifiantsentite";

        $query = $mysqli->query($sql);
        
        $array = Array();
        $result = $mysqli->query($sql);

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $arrayImage[] =$row['img'];
            $arrayDesc[] = $row['description'];
            $arrayLieu[] =$row['lieuInitial'];
            $arrayPrix[] =$row['prix'];
            $arrayNom[] = $row['nom'];
            $arrayType[] = $row['type'];
            $arrayProprietaire[] = $row['proprietaire'];
            $arrayId[] = $row['id'];
            $arrayImage2[] =$row['img2'];
            $arrayImage3[] =$row['img3'];
            $arrayImage4[] =$row['img4'];
            $arrayImage5[] =$row['img5'];
            $arrayImage6[] =$row['img6'];
        }

        $connecter = $_SESSION["connecter"];
        

        ?>

                                                                                                        <?php  ?>

    </head>

<body>

    <div class="topnav" id="Topnav">
        <a href="#mobilier" onclick="mobilier();" id="TopnavA">MOBILIER</a>
        <a href="#immobilier" onclick="immobilier();" id="TopnavC">IMMOBILIER</a>
        
        
        <a href="<?php if($connecter == "TRUE"){echo("php/tableauBord.php");}else{echo("php/connexion.php");}  ?>" style="float: right;"class="active" id="TopnavD"><?php if($connecter == "TRUE"){echo($_SESSION['nomCompte']);}else{echo("Mon Compte");} ?></a>
        <a href="php/deconnexion.php" style="float: right; display:<?php if ($connecter == "TRUE") { echo("content;"); }else{ echo("none;"); } ?> " id="TopnavDeconnexion">Déconnexion</a>
        <a href="php/add.php" id="TopnavB" style="float: right; display:<?php if ($connecter == "TRUE") { echo("content;"); }else{ echo("none;"); } ?> ">Ajouter</a>
      </div>
    


    <div class="left"  id="mobilier">
        <div class="wrapper">

        <?php 

            for ($i=0; $i < count($arrayId) ; $i++) { 
                if ($arrayType[$i] == "mobilier"){
                    include("php/card.php");
                }
            }
        
       ?>
            
        </div>
    </div>

    <div class="diviseur"></div>

    <div class="right" id="immobilier">
        <div class="wrapper">
            <?php 

                for ($i=0; $i < count($arrayDesc) ; $i++) {
                    if ($arrayType[$i] == "immobilier"){ 
                        include("php/card.php");
                    }
                }
            
            ?>
        
        </div>
    </div>

</body>

<script>

</script>
<script src="js/onclick.js"></script>

</html>

