<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../files/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<style>

.topnav {
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
	</style>

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
    
<body> 

<div class="topnav" id="Topnav">
        <a href="../index.php" id="TopnavAjouter">HOME</a>
    </div>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../files/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="verificationInscription.php" autocomplete="on" method="POST">
					<span class="login100-form-logo">
						<img src="../files/tdris.png" width="90vw" height="auto" style="padding-right: 0.4vw;"/>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Inscription
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							M'inscrire
						</button>
					</div>

					<div class="text-center p-t-90">
                        <p class="text-light">Deja un compte ?</p> 
						<a class="txt1" href="connexion.php">
							Me Connecter
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</html>