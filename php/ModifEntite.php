<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css" />

    <title>Partage</title>

    <style>

.reservations {
  height: max-content;

  display: flex;
  justify-content: center;
  align-items: flex-start;
  box-shadow: 0 0 0 #000;
  z-index: 0;
}
  
  h1{
    transition: all 0.4s;
    color: #555555;
    text-align: center;
    background-color: #eeeeee;
    text-align: center;
    border-radius: 3vh;
    padding: 2.5vh 5vw;
    width: 25vw;
    font-size: 2.5rem;
    font-weight: normal;
    margin: 2vh 0;
    text-decoration: none;
  }

  button {
  transition: all 0.4s;
  background-color: white;
  color: #555555;
  width: 10vw;
  padding: 2vh 2.5vw;
  font-weight: 600;
  border-radius: 2vh 2vw;
  border: none;
  font-weight: bold;
  letter-spacing: .05vw;
}

    button:hover {
  transition: all 0.4s;
  background: -webkit-linear-gradient(bottom, #7579ff, #b224ef);
  width: 15vw;
  color: #eeeeee;
  box-shadow: #ddd 0px 0px 10px 0px;;
}

label:required:invalid {
    color: red;
}

label:required:valid {
    color: green;
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

        $nomCompte = $_SESSION["nomCompte"];

        $sql = "SELECT * FROM identifiantsentite;";

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

        ?>

    <?php  ?>

</head>

<body onload="entiteDataModif();">
    <div class="reservations">
        <h1>Modifier mon entite</h1>
    </div>
        <div class="wrapper">
            <form action="VerificationModifs.php" method="POST" enctype="multipart/form-data">
                <input type="number" id="idModif" value="" name="idModif">

                <label for="nomModif">Modifier le nom de votre annonce</label>
                <input type="text" id="nomModif" required value="" name="nomModif">

                <br><br>

                <label for="descModif">Modifier la description de votre annonce</label>
                <input type="text" id="descModif" required value="" name="descModif">

                <br><br><br>

                <div class="labelfile">
                    <label for="fileToUpload2" class="label-file">Importer 2e image</label>
                    <input type="file" name="fileToUpload2" id="fileToUpload2"  style="display: none;">
                </div>
                <br>
                <div class="labelfile">
                    <label for="fileToUpload3" class="label-file">Importer 3e image</label>
                    <input type="file" name="fileToUpload3" id="fileToUpload3" required style="display: none;">
                </div>
                <br>
                <div class="labelfile">
                    <label for="fileToUpload4" class="label-file">Importer 4e image</label>
                    <input type="file" name="fileToUpload4" id="fileToUpload4" required style="display: none;">
                </div>
                <br>
                <div class="labelfile">
                    <label for="fileToUpload5" class="label-file">Importer 5e image</label>
                    <input type="file" name="fileToUpload5" id="fileToUpload5" required style="display: none;">
                </div>
                <br>
                <div class="labelfile">
                    <label for="fileToUpload6" class="label-file">Importer 6e image</label>
                    <input type="file" name="fileToUpload6" id="fileToUpload6" required style="display: none;">
                </div>
                <br><br>

                <button type="submit" class="submitButton" name="submit" value="submit">Valider</button>
            </form>

</div>
</body>
<script type="text/javascript" src="../js/onclick.js"></script>
</html>