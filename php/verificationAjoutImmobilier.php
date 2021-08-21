<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php 

        session_start();

        include("mysqlinfo.php");

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
            $arrayId[] = $row['id'];
            $arrayImage[] =$row['img'];
            $arrayDesc[] = $row['description'];
            $arrayLieu[] =$row['lieuInitial'];
            $arrayPrix[] =$row['prix'];
            $arrayNom[] = $row['nom'];
            $arrayType[] = $row['type'];
        }

        $idAjout = end($arrayId) +1;
        $nomAjout = $_POST['name'];
        $descAjout = $_POST['desc'];
        $emplacementAjout = $_POST['emplacement'];
        $proprietaireAjout = $_POST['proprietaire'];
        $priceAjout = $_POST['price'];
        $imageAjout = $_POST['fileToUpload'];
        $typeAjout = $_POST['type'];
        $upload = $_POST["submit"];
        $varImgName = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
        $imgNameAjout = $varImgName;

        $sql2 = "INSERT INTO `identifiantsentite`(`id`, `nom`, `lieuInitial`, `proprietaire`, `prix`, `description`, `img`, `type`) 
                 VALUES ($idAjout,'$nomAjout','$emplacementAjout','$proprietaireAjout',$priceAjout,'$descAjout','$varImgName','$typeAjout')";

        $phrase = utf8_encode("The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.");

        #echo '<body  onLoad="alert(\''.$upload.' '.$extensionImage.'\')">';

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'File is not an image.\')">';
            $uploadOk = 0;
          }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, file already exists.'.$target_file.'\')">';
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000000000000) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file is too large.\')">';
          $uploadOk = 0;
        }

        // Check file name
        $mystring = basename( $_FILES["fileToUpload"]["name"]);
        $findme = ' ';
        $pos = strpos($mystring, $findme);
        
        // Notez notre utilisation de !==.  != ne fonctionnerait pas comme attendu
        // car la position de 'a' est la 0-ième (premier) caractère.
        if ($pos !== false) {
          echo '<meta http-equiv="refresh" content=0;URL="add.php">';
          echo '<body  onLoad="alert(\'Sorry, your file name contains SPACE.\')">';
          $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed.\')">';
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file was not uploaded.\')">';
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $query2 = $mysqli->query($sql2);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }
        }
?>

    </body>
    </html>