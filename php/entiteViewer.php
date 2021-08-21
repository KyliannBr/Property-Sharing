<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../css/style.css" />

  <link rel="icon" href="../files/icons/favicon.ico" />

  <title>Partage</title>

  <style>
    .topnav {
      position: absolute;
      top: 0;
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

    img {
      vertical-align: middle;
    }

    .grid {
      width: 45vw;
      max-width: 50vw;
      margin-left: auto;
      margin-right: auto;

      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .grid-bg {
      background-color: #333;
    }

    .grid-block {
      width: 15vw;
      min-height: 11.25rem;
      padding: .5vw;
    }

    .grid-block-txt {
      width: 15vw;
      min-height: 1vh;
      padding: .5vw;
    }


    .image-grid .tile-link:hover .tile-img {
      top: -1rem;
      left: -1rem;
    }

    .image-grid .tile-img {
      position: relative;
      top: 0;
      left: 0;
      -webkit-transition-property: opacity, top, left, box-shadow;
      transition-property: opacity, top, left, box-shadow;
    }

    .tile-link {
      display: block;
    }

    .tile-link:hover .tile-img {
      opacity: 1;
    }

    .tile-link:hover .tile-img-link {
      display: block;
    }

    .tile-link:hover .tile-img-link:hover .tile-img {
      opacity: 0.5;
    }

    .tile-img {
      display: block;
      width: 100%;
      height: auto;
      opacity: 1;
      -webkit-transition-property: opacity;
      transition-property: opacity;
      -webkit-transition-duration: 0.125s;
      transition-duration: 0.125s;
      -webkit-transition-timing-function: ease-in;
      transition-timing-function: ease-in;
    }

    .tile-link:hover .tile-img1 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img2 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img3 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img4 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img5 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img6 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img7 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img8 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img9 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
    }

    .tile-link:hover .tile-img10 {
      box-shadow: 5px 5px rgba(214, 221, 244, 0.4),
        10px 10px rgba(214, 221, 244, 0.3), 15px 15px rgba(214, 221, 244, 0.2),
        20px 20px rgba(214, 221, 244, 0.1), 25px 25px rgba(214, 221, 244, 0.05);
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

<body onload="entiteData();">

  <div class="topnav" id="Topnav">
    <a href="../index.php" id="TopnavA">HOME</a>
  </div>

  <div class="titre">
    <h1 id="titreEntite"></h1>
  </div>

  <div class="grid image-grid">

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img1" class="tile-img tile-img1"
            src=""
            alt="Image">
        </a>
      </div>
    </div>

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img2" class="tile-img tile-img2"
          src=""
          alt="Image">
        </a>
      </div>
    </div>

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img3" class="tile-img tile-img3"
          src=""
          alt="Image">
        </a>
      </div>
    </div>

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img4" class="tile-img tile-img4"
          src=""
          alt="Image">
        </a>
      </div>
    </div>

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img5" class="tile-img tile-img5"
          src=""
          alt="Image">
        </a>
      </div>
    </div>

    <div class="grid-block">
      <div class="tile">
        <a class="tile-link">
          <img id="img6" class="tile-img tile-img6"
          src=""
          alt="Image">
        </a>
      </div>
    </div>

  </div>

  <div class="grid image-grid grid-bg">

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id=""></p>
        </a>
      </div>
    </div>

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id="desc"></p>
        </a>
      </div>
    </div>

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id=""></p>
        </a>
      </div>
    </div>

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id="proprietaire"></p>
        </a>
      </div>
    </div>

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id="prix"></p>
        </a>
      </div>
    </div>

    <div class="grid-block-txt">
      <div class="tile">
        <a class="tile-link">
          <p id="lieu"></p>
        </a>
      </div>
    </div>

  </div>

  <div class="buttonSubmitEntiteViewer">
    <form action="reserver.php" class="formButtonSubmitEntiteViewer">
      <input type="text" value="" id="formID" style="display: none;" />
      <button type="submit">Reserver</button>
    </form>
    
  </div>



</body>

<script src="../js/onclick.js"></script>

</html>