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
            $arrayDesc[] = $row['description'];
            $arrayLieu[] =$row['lieuInitial'];
            $arrayPrix[] =$row['prix'];
            $arrayNom[] = $row['nom'];
            $arrayType[] = $row['type'];
            $arrayProprietaire[] = $row['proprietaire'];
            $arrayImage[] =$row['img'];
            $arrayImage2[] =$row['img2'];
            $arrayImage3[] =$row['img3'];
            $arrayImage4[] =$row['img4'];
            $arrayImage5[] =$row['img5'];
            $arrayImage6[] =$row['img6'];
        }

        $idModif = $_POST['idModif'];
        $nomModif = $_POST['nomModif'];
        $descModif = $_POST['descModif'];
        $image2 = $_POST['fileToUpload2'];
        $image3 = $_POST['fileToUpload3'];
        $image4 = $_POST['fileToUpload4'];
        $image5 = $_POST['fileToUpload5'];
        $image6 = $_POST['fileToUpload6'];
        $upload = $_POST["submit"];


        $nomImage2 = htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"]));
        $nomImage3 = htmlspecialchars( basename( $_FILES["fileToUpload3"]["name"]));
        $nomImage4 = htmlspecialchars( basename( $_FILES["fileToUpload4"]["name"]));
        $nomImage5 = htmlspecialchars( basename( $_FILES["fileToUpload5"]["name"]));
        $nomImage6 = htmlspecialchars( basename( $_FILES["fileToUpload6"]["name"]));


        $sql2 = "UPDATE `identifiantsentite` SET `nom`='$nomModif',`description`='$descModif',`img2`='$nomImage2',`img3`='$nomImage3',`img4`='$nomImage4',`img5`='$nomImage5',`img6`='$nomImage6' 
                 WHERE id = $idModif;";

        $phrase = utf8_encode("Votre annonce est sauvegardée.");

        $target_dir = "uploads/";

        $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $target_file2 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
        $target_file3 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
        $target_file4 = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
        $target_file5 = $target_dir . basename($_FILES["fileToUpload6"]["name"]);


        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
        $imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
        $imageFileType5 = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'File is not an image.\')">';
            $uploadOk = 0;
          }
        }

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo '<meta http-equiv="refresh" content=0;URL="add.php">';
              echo '<body  onLoad="alert(\'File is not an image.\')">';
              $uploadOk = 0;
            }
          }

          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo '<meta http-equiv="refresh" content=0;URL="add.php">';
              echo '<body  onLoad="alert(\'File is not an image.\')">';
              $uploadOk = 0;
            }
          }

          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
            if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo '<meta http-equiv="refresh" content=0;URL="add.php">';
              echo '<body  onLoad="alert(\'File is not an image.\')">';
              $uploadOk = 0;
            }
          }

          if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload6"]["tmp_name"]);
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

        if (file_exists($target_file2)) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, file already exists.'.$target_file2.'\')">';
            $uploadOk = 0;
        }

        if (file_exists($target_file3)) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, file already exists.'.$target_file3.'\')">';
            $uploadOk = 0;
        }

        if (file_exists($target_file4)) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, file already exists.'.$target_file4.'\')">';
            $uploadOk = 0;
        }

        if (file_exists($target_file5)) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, file already exists.'.$target_file5.'\')">';
            $uploadOk = 0;
        }

        // Check file name
        $mystring1 = basename( $_FILES["fileToUpload2"]["name"]);
        $findme1 = ' ';
        $pos1 = strpos($mystring1, $findme1);

        $mystring2 = basename( $_FILES["fileToUpload3"]["name"]);
        $findme2 = ' ';
        $pos2 = strpos($mystring2, $findme2);

        $mystring3 = basename( $_FILES["fileToUpload4"]["name"]);
        $findme3 = ' ';
        $pos3 = strpos($mystring3, $findme3);

        $mystring4 = basename( $_FILES["fileToUpload5"]["name"]);
        $findme4 = ' ';
        $pos4 = strpos($mystring4, $findme4);

        $mystring5 = basename( $_FILES["fileToUpload6"]["name"]);
        $findme5 = ' ';
        $pos5 = strpos($mystring5, $findme5);
        
        // Notez notre utilisation de !==.  != ne fonctionnerait pas comme attendu
        // car la position de 'a' est la 0-ième (premier) caractère.
        if ($pos1 !== false) {
          echo '<meta http-equiv="refresh" content=0;URL="add.php">';
          echo '<body  onLoad="alert(\'Sorry, your file name contains SPACE.\')">';
          $uploadOk = 0;
        }

        if ($pos2 !== false) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file name contains SPACE.\')">';
            $uploadOk = 0;
          }
          if ($pos3 !== false) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file name contains SPACE.\')">';
            $uploadOk = 0;
          }
          if ($pos4 !== false) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file name contains SPACE.\')">';
            $uploadOk = 0;
          }
          if ($pos5 !== false) {
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
        if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
        && $imageFileType2 != "gif" ) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed.\')">';
          $uploadOk = 0;
        }
        if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
        && $imageFileType3 != "gif" ) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed.\')">';
          $uploadOk = 0;
        }
        if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
        && $imageFileType4 != "gif" ) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed.\')">';
          $uploadOk = 0;
        }
        if($imageFileType5 != "jpg" && $imageFileType5 != "png" && $imageFileType5 != "jpeg"
        && $imageFileType5 != "gif" ) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed.\')">';
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, your file was not uploaded.\')">';
        // if everything is ok, try to upload file
        } else {/*
            move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file);
            move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file2);
            move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file3);
            move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file4);
            move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_file5);
*/
          if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file4) && move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_file5)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            $query2 = $mysqli->query($sql2);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }

        /*
          if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file2)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            $query2 = $mysqli->query($sql2);
            $query3 = $mysqli->query($sql3);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }

          if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file3)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            $query2 = $mysqli->query($sql2);
            $query3 = $mysqli->query($sql3);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }

          if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file4)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            $query2 = $mysqli->query($sql2);
            $query3 = $mysqli->query($sql3);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }

          if (move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_file5)) {
            echo '<body  onLoad="alert(\''.$phrase.'\')">';
            $query2 = $mysqli->query($sql2);
            echo '<meta http-equiv="refresh" content=0;URL="../index.php">';
          } else {
            echo '<meta http-equiv="refresh" content=0;URL="add.php">';
            echo '<body  onLoad="alert(\'Sorry, there was an error uploading your file.\')">';
          }
          */
        }
?>

    </body>
    </html>