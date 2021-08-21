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

<body>
    <div class="reservations">
        <h1>Mes Entités</h1>
    </div>
        <div class="wrapper">
    <?php
            for ($i=0; $i < count($arrayId) ; $i++) { 
                if ($arrayProprietaire[$i] == $nomCompte){
                    include("cardEntiteViewer.php");
                }
            }
    ?>

</div>
</body>
<script type="text/javascript" src="../js/onclick.js"></script>
</html>