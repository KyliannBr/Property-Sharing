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
<body style="overflow-y: hidden;">

<div class="topnav" id="Topnav" style="display: flex; justify-content: center;">
        <a href="../index.php" id="TopnavAjouter">HOME</a>
        <a href="addImmobilier.php" id="TopnavAjouter">IMMOBILIER</a>
</div>

<div class="middle">
    <h1 style="color: white">Mobillier</h1>
       <div class="wrapper">
            <form method="POST" action="verificationAjout.php" autocomplete="on" enctype="multipart/form-data">

                <input type="text" id="type" name="type" width="0vw" height="0vh" value="mobilier" style="display: none;">
                <input type="text" id="proprietaire" name="proprietaire" width="10vw" height="1vh" placeholder="Proprietaire de votre bien" value="<?php echo($_SESSION["nomCompte"]); ?>" style="display: none;">

                <label for="name">Intitulé</label>
                <input type="text" id="name" name="name" width="10vw" height="1vh" placeholder="Nom de votre bien" required>
                    <br><br>
                <label for="desc">Description</label>
                <input type="text" id="description" name="desc" width="10vw" height="1vh" placeholder="Description de votre bien" required>
                    <br><br>
                <label for="emplacement">Emplacement</label>
                <input type="text" id="emplacement" name="emplacement" width="10vw" height="1vh" placeholder="Emplacement de votre bien" required>
                    <br><br>
                <label for="price">Prix</label>
                <input type="number" id="price" name="price" width="10vw" height="1vh" placeholder="Prix de votre bien" required>
                    <br><br>
                <div class="labelfile">
                    <label for="fileToUpload" class="label-file" required>Importer une image</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" required style="display: none;">
                </div>
                    <br>
                <button type="submit" class="buttonSubmit" name="submit" value="submit">Envoyer</button>
                <button type="reset" class="buttonReset">Reset</button>
            </form>
        </div>
</div>

</body>

<script src="js/onclick.js"></script>

</html>